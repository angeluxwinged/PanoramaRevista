<?php

namespace Database\Seeders;

use App\Models\Edicion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EdicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $D1Edicion = new Edicion();
        $D1Edicion->fecha = "Agosto 2022";
        $D1Edicion->no_edicion = "1";
        $D1Edicion->no_continuidad = "59";
        $D1Edicion->epoca = "Nueva época";
        $D1Edicion->no_ano = "1";
        $D1Edicion->link = "https://www.uabcs.mx/documentos/revistaPanorama/Panorama%20digital%20revista%20No%201.pdf";
        $D1Edicion->save();

        $D2Edicion = new Edicion();
        $D2Edicion->fecha = "Septiembre 2022";
        $D2Edicion->no_edicion = "2";
        $D2Edicion->no_continuidad = "60";
        $D2Edicion->epoca = "Nueva época";
        $D2Edicion->no_ano = "1";
        $D2Edicion->link = "https://www.uabcs.mx/documentos/revistaPanorama/Panorama%20digital%20revista%20No%202.pdf";
        $D2Edicion->save();

        $D3Edicion = new Edicion();
        $D3Edicion->fecha = "Octubre 2022";
        $D3Edicion->no_edicion = "3";
        $D3Edicion->no_continuidad = "61";
        $D3Edicion->epoca = "Nueva época";
        $D3Edicion->no_ano = "1";
        $D3Edicion->link = "https://www.uabcs.mx/documentos/revistaPanorama/Panorama%20digital%20revista%20No%203.pdf";
        $D3Edicion->save();

        $D4Edicion = new Edicion();
        $D4Edicion->fecha = "Noviembre 2022";
        $D4Edicion->no_edicion = "4";
        $D4Edicion->no_continuidad = "62";
        $D4Edicion->epoca = "Nueva época";
        $D4Edicion->no_ano = "1";
        $D4Edicion->link = "https://www.uabcs.mx/documentos/revistaPanorama/Panorama%20digital%20revista%20No%204.pdf";
        $D4Edicion->save();

        $D5Edicion = new Edicion();
        $D5Edicion->fecha = "Diciembre 2022";
        $D5Edicion->no_edicion = "5";
        $D5Edicion->no_continuidad = "63";
        $D5Edicion->epoca = "Nueva época";
        $D5Edicion->no_ano = "1";
        $D5Edicion->link = "https://www.uabcs.mx/documentos/revistaPanorama/Panorama%20digital%20revista%20No%205.pdf";
        $D5Edicion->save();

        $D6Edicion = new Edicion();
        $D6Edicion->fecha = "Enero 2023";
        $D6Edicion->no_edicion = "6";
        $D6Edicion->no_continuidad = "64";
        $D6Edicion->epoca = "Nueva época";
        $D6Edicion->no_ano = "2";
        $D6Edicion->link = "https://www.uabcs.mx/documentos/revistaPanorama/Panorama%20digital%20revista%20No%206.pdf";
        $D6Edicion->save();

        $D7Edicion = new Edicion();
        $D7Edicion->titulo = "Mamífros Marinos en Baja California Sur";
        $D7Edicion->fecha = "Febrero 2022";
        $D7Edicion->no_edicion = "7";
        $D7Edicion->no_continuidad = "65";
        $D7Edicion->epoca = "Nueva época";
        $D7Edicion->no_ano = "2";
        $D7Edicion->link = "https://www.uabcs.mx/documentos/revistaPanorama/Panorama%20digital%20revista%20No%207.pdf";
        $D7Edicion->save();

        $D8Edicion = new Edicion();
        $D8Edicion->titulo = "Nuestra Universidad. 47 años de historias";
        $D8Edicion->fecha = "Marzo 2023";
        $D8Edicion->no_edicion = "8";
        $D8Edicion->no_continuidad = "66";
        $D8Edicion->epoca = "Nueva época";
        $D8Edicion->no_ano = "2";
        $D8Edicion->link = "https://www.uabcs.mx/documentos/revistaPanorama/Panorama%20digital%20revista%20No%208.pdf";
        $D8Edicion->save();

        $D9Edicion = new Edicion();
        $D9Edicion->titulo = "Acceso al conocimiento universitario";
        $D9Edicion->fecha = "Abril 2023";
        $D9Edicion->no_edicion = "9";
        $D9Edicion->no_continuidad = "67";
        $D9Edicion->epoca = "Nueva época";
        $D9Edicion->no_ano = "2";
        $D9Edicion->link = "https://www.uabcs.mx/documentos/revistaPanorama/Panorama%20digital%20revista%20No%209.pdf";
        $D9Edicion->save();

        $D10Edicion = new Edicion();
        $D10Edicion->titulo = "Apuntes sobre la literatura del noroeste de México";
        $D10Edicion->fecha = "Mayo 2023";
        $D10Edicion->no_edicion = "10";
        $D10Edicion->no_continuidad = "68";
        $D10Edicion->epoca = "Nueva época";
        $D10Edicion->no_ano = "2";
        $D10Edicion->link = "https://www.uabcs.mx/documentos/revistaPanorama/Panorama%20digital%20revista%20No%2010.pdf";
        $D10Edicion->save();

        $D11Edicion = new Edicion();
        $D11Edicion->titulo = "Sendas marinas del Pacífico";
        $D11Edicion->fecha = "Junio 2022";
        $D11Edicion->no_edicion = "11";
        $D11Edicion->no_continuidad = "69";
        $D11Edicion->epoca = "Nueva época";
        $D11Edicion->no_ano = "2";
        $D11Edicion->link = "https://www.uabcs.mx/documentos/revistaPanorama/Panorama%20digital%20revista%20No%2011.pdf";
        $D11Edicion->save();
    }
}
