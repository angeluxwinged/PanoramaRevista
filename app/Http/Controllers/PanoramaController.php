<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Pais;
use App\Models\Consejo;
use App\Models\Edicion;
use App\Models\uabcs;

class PanoramaController extends Controller
{
    //vistas
    function panoramaActual(){
        //consultas consejo editorial
        $latestNoEdicion = Consejo::latest('no_edicion')->value('no_edicion');
        $editorGeneral = Consejo::where('no_edicion', $latestNoEdicion)->where('cargo', 'Editor/a General')->pluck('nombre');
        $editores = Consejo::where('no_edicion', $latestNoEdicion)->where('cargo', 'Editor/a')->pluck('nombre');
        $editorInvitado = Consejo::where('no_edicion', $latestNoEdicion)->where('cargo', 'Editor/a Invitado')->pluck('nombre');
        $comiteDeRedaccion = Consejo::where('no_edicion', $latestNoEdicion)->where('cargo', 'Comité de Redacción')->pluck('nombre');
        
        //consultas uabcs
        $latestNoEdicionUABCS = uabcs::latest('no_edicion')->value('no_edicion');
        $rector = uabcs::where('no_edicion', $latestNoEdicionUABCS)->where('cargo', 'Rector/a')->pluck('nombre');
        $secreGeneral = uabcs::where('no_edicion', $latestNoEdicionUABCS)->where('cargo', 'Secretario/a General')->pluck('nombre');
        $secreAdminFinanzas = uabcs::where('no_edicion', $latestNoEdicionUABCS)->where('cargo', 'Secretario/a de Administración y Finanzas')->pluck('nombre');
        $directDifusionCultural = uabcs::where('no_edicion', $latestNoEdicionUABCS)->where('cargo', 'Director/a de Difusión Cultural y Extensión Universitaria')->pluck('nombre');
        $jefeDepartamento = uabcs::where('no_edicion', $latestNoEdicionUABCS)->where('cargo', 'Director/a de Difusión Cultural y Extensión Universitaria')->pluck('nombre');
        
        //consultas edicion
        $latestEdicion = Edicion::latest('no_edicion')->first();
        $titulo = $latestEdicion->titulo;
        $fecha = $latestEdicion->fecha;
        $noEdicion = $latestEdicion->no_edicion;
        $noContinuidad = $latestEdicion->no_continuidad;
        $epoca = $latestEdicion->epoca;
        $noAno = $latestEdicion->no_ano;
        $link = $latestEdicion->link;

        //nombre del ultimo pdf en la carpeta pdfs
        $infoPDF = $this->obtenerInfoPDF();

        return view('panoramaActual', compact('editorGeneral', 'editores', 'editorInvitado', 'comiteDeRedaccion', 
        'rector', 'secreGeneral', 'secreAdminFinanzas', 'directDifusionCultural', 'jefeDepartamento', 'fecha', 'noEdicion', 
        'noContinuidad', 'epoca', 'noAno', 'titulo', 'link', 'infoPDF'));
    }

    function obtenerInfoPDF() {
        $rutaCarpetaPDFs = public_path('dist\pdfs');

        $archivos = File::files($rutaCarpetaPDFs);

        $archivosDigitales = array_filter($archivos, function ($archivo) {
            return preg_match('/^Digital\d+\.pdf$/', $archivo->getFilename());
        });

        $numeroMasAlto = -1;
        $nombrePDF = '';

        foreach ($archivosDigitales as $archivo) {
            $nombreArchivo = $archivo->getFilename();
            preg_match('/(\d+)/', $nombreArchivo, $coincidencias);
            $numero = intval($coincidencias[0]);

            if ($numero > $numeroMasAlto) {
                $numeroMasAlto = $numero;
                $nombrePDF = $nombreArchivo;
            }
        }

        return [
            'nombrePDF' => $nombrePDF
        ];
    }

    function archivo(){
        //consultas ediciones
        $ediciones = Edicion::latest('no_edicion')->get();

        //nombre de los PDFs para descargar en archivo
        $nombresPDF = $this->obtenerNombresPDF();

        return view('archivo', compact('ediciones', 'nombresPDF'));
    }

    public function guardarPais(Request $request)
    {
        // Obtiene el país del cuerpo de la solicitud
        $pais = $request->input('pais');

        // Crea un nuevo registro en la tabla 'paises' con el país
        Pais::create(['nombre' => $pais]);

        return response()->json(['message' => 'País guardado con éxito']);
    }

    function obtenerNombresPDF(){
        $rutaCarpetaPDFs = public_path('dist\pdfs');

        $archivos = File::files($rutaCarpetaPDFs);

        $archivosDigitales = array_filter($archivos, function ($archivo) {
            return preg_match('/^Digital\d+\.pdf$/', $archivo->getFilename());
        });

        $nombresPDF = array_map(function ($archivo) {
            return $archivo->getFilename();
        }, $archivosDigitales);

        usort($nombresPDF, function ($a, $b) {
            $numeroA = intval(preg_replace('/\D/', '', $a));
            $numeroB = intval(preg_replace('/\D/', '', $b));
            return $numeroB - $numeroA;
        });

        return $nombresPDF;
    }

    function consejoEditorial(){
        //consultas consejo editorial
        $latestNoEdicion = Consejo::latest('no_edicion')->value('no_edicion');
        $editorGeneral = Consejo::where('no_edicion', $latestNoEdicion)->where('cargo', 'Editor/a General')->pluck('nombre');
        $editores = Consejo::where('no_edicion', $latestNoEdicion)->where('cargo', 'Editor/a')->pluck('nombre');
        $comiteDeRedaccion = Consejo::where('no_edicion', $latestNoEdicion)->where('cargo', 'Comité de Redacción')->pluck('nombre');

        //fotos
        $editorGeneralFoto = Consejo::where('no_edicion', $latestNoEdicion)->where('cargo', 'Editor/a General')->pluck('foto');
        $editoresFoto = Consejo::where('no_edicion', $latestNoEdicion)->where('cargo', 'Editor/a')->pluck('foto');
        $comiteDeRedaccionFoto = Consejo::where('no_edicion', $latestNoEdicion)->where('cargo', 'Comité de Redacción')->pluck('foto');
        
        return view('consejoEditorial', compact('editorGeneral', 'editores', 'comiteDeRedaccion', 'editorGeneralFoto',
        'editoresFoto', 'comiteDeRedaccionFoto'));
    }
    
    function colaboradores(){
        //editores invitados
        $editoresInvitados = Consejo::where('cargo', 'Editor/a Invitado')->distinct('nombre')->pluck('nombre');
        $editoresInvitadosFoto = Consejo::where('cargo', 'Editor/a Invitado')->distinct('foto')->pluck('foto');

        return view('colaboradores', compact('editoresInvitados', 'editoresInvitadosFoto'));
    }
    function estadisticas(){
        return view('estadisticas');
    }

}
