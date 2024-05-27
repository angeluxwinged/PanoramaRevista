@extends('layouts.plantilla')

@section('title','Archivo')

@section('content')
    <h2>Convocatoria Permanente de Panorama</h2>
    <div class="archivo-convocatoria">
        <h4>Presentacón, enfoque y bases de Panorama</h4>
        <h4>Revista de la Universidad Autónoma de Baja California Sur</h4>
        <img src="{{ asset('dist/images/pdf.png')}}" style="width: 30px; height: 30px; margin-right: 10px">
        <a href="https://www.uabcs.mx/documentos/revistaPanorama/Convocatoria%20Permanente%20de%20Panorama%20(actualizada%20enero%202023).pdf" target="_blank">Ver PDF</a>
    </div>

    <h2>Archivo</h2>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($ediciones as $key => $edicion)
            <div class="col-md-3">
                <div class="archivo text-center">
                    <embed src="{{ $edicion->link }}#toolbar=0" width="250" height="300px" />
                    <p>{{$edicion->titulo}}</p>

                    <p>Panorama Digital No. {{$edicion->no_edicion}}</p>

                    <div class="row px-5">
                        <a class="btn-pdfVerArchivo mb-3"  href="{{$edicion->link}}" target="_blank">
                            <img src="{{ asset('dist/images/pdf.png')}}" style="width: 25px; height: 25px; margin-right: 10px">
                            Leer
                        </a>
    
                        <a class="btn-pdfDowArchivo"  href="dist/pdfs/{{ $nombresPDF[$key] }}" target="_blank" download="{{ $nombresPDF[$key] }}">
                            <img src="{{ asset('dist/images/pdf.png')}}" style="width: 25px; height: 25px; margin-right: 10px">
                            Descargar
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <button id="obtenerPaisBtn" class="btn btn-primary">Obtener País</button>
    <p id="respuestaPais"></p>
    
    
    <script>
        $(document).ready(function () {
            $('#obtenerPaisBtn').click(function () {
                obtenerPaisPorIP();
            });
    
            function obtenerPaisPorIP() {
                $.ajax({
                    url: 'http://ip-api.com/json',
                    method: 'GET',
                    success: function (data) {
                        var pais = data.country;
                        $('#respuestaPais').text('Tu país es: ' + pais);

                    },
                    error: function () {
                        $('#respuestaPais').text('No se pudo obtener el país.');
                    }
                });
            }
        });
    </script>
    
    
    
@endsection