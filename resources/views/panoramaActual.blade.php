@extends('layouts.plantilla')

@section('title','Panorama Actual')

@section('content')
    <h2>Panorama Digital No. {{$noEdicion}} / No. {{$noContinuidad}} Continuidad / {{$epoca}} / Año {{$noAno}}</h2>
    
    <div class="actual-container">
        <div class="actual-pdf">
            @if ($link)
                <embed src="{{$link}}#toolbar=0" width="100%" height="700px" />
            @endif
        </div>
        
        <div class="panorama-act">
            <div class="panorama-titulo">
                @if (is_countable($rector) && count($rector) > 0)
                <h3 style="margin-right: 20px">{{$titulo}}</h3>
                @endif

                <div>
                    <a class="btn-pdfVer"  href="{{$link}}" target="_blank">
                        <img src="{{ asset('dist/images/pdf.png')}}" style="width: 25px; height: 25px; margin-right: 10px">
                        Leer
                    </a>
                </div>

                <div>
                    <a class="btn-pdfDow"  href="dist/pdfs/{{ $infoPDF['nombrePDF'] }}" target="_blank" download="{{ $infoPDF['nombrePDF'] }}">
                        <img src="{{ asset('dist/images/pdf.png')}}" style="width: 25px; height: 25px; margin-right: 10px">
                        Descargar
                    </a>
                </div>
            </div>

            <div class="container-info">
                <div class="actual-info">
                    <h5>UNIVERSIDAD AUTÓNOMA DE BAJA CALIFORNIA SUR</h5>
                    {{-- rector --}}
                    @if (is_countable($rector) && count($rector) > 0)
                    <p style="margin: 0"><b>Rector/a</b></p>
                        @foreach ($rector as $rector)
                            <p style="margin: 0">{{$rector}}</p>
                        @endforeach
                    @endif <br>
        
                    {{-- secretario/a general --}}
                    @if (is_countable($secreGeneral) && count($secreGeneral) > 0)
                    <p style="margin: 0"><b>Secretario/a Genereal</b></p>
                        @foreach ($secreGeneral as $secreGeneral)
                            <p style="margin: 0">{{$secreGeneral}}</p>
                        @endforeach
                    @endif <br>
        
                    {{-- secretario/a de administración y finanzas --}}
                    @if (is_countable($secreAdminFinanzas) && count($secreAdminFinanzas) > 0)
                    <p style="margin: 0"><b>Secretario/a de Administración y Finanzas</b></p>
                        @foreach ($secreAdminFinanzas as $secreAdminFinanzas)
                            <p style="margin: 0">{{$secreAdminFinanzas}}</p>
                        @endforeach
                    @endif <br>
        
                    {{-- director/a de difusion cultural y ext universitaria --}}
                    @if (is_countable($directDifusionCultural) && count($directDifusionCultural) > 0)
                    <p style="margin: 0"><b>Director/a de Difusión Cultural y Extensión Unniversitaria</b></p>
                        @foreach ($directDifusionCultural as $directDifusionCultural)
                            <p style="margin: 0">{{$directDifusionCultural}}</p>
                        @endforeach
                    @endif <br>
        
                                {{-- jefe/a del departamento editorial --}}
                    @if (is_countable($jefeDepartamento) && count($jefeDepartamento) > 0)
                    <p style="margin: 0"><b>Jefe/a del Departamento Editorial</b></p>
                        @foreach ($jefeDepartamento as $jefeDepartamento)
                            <p style="margin: 0">{{$jefeDepartamento}}</p>
                        @endforeach
                    @endif <br>
                </div>
        
                <div class="actual-info">
                    <h5 style="color: rgb(172,125,41)"><p><span style="color: rgb(145,216,246)">P</span>anorama</h5>
                    <p><b>Consejo Editorial</b></p>
                    {{-- editor general --}}
                    @if (is_countable($editorGeneral) && count($editorGeneral) > 0)
                    <p style="margin: 0"><b>Editor/a General</b></p>
                        @foreach ($editorGeneral as $editorGeneral)
                            <p style="margin: 0">{{$editorGeneral}}</p>
                        @endforeach
                    @endif <br>
        
                    {{-- editores --}}
                    @if (is_countable($editores) && count($editores) > 0)
                    <p style="margin: 0"><b>Editores</b></p>
                        @foreach ($editores as $editores)
                            <p style="margin: 0">{{$editores}}</p>
                        @endforeach
                    @endif <br>
        
                    {{-- editores Invitados --}}
                    @if (is_countable($editorInvitado) && count($editorInvitado) > 0)
                    <p style="margin: 0"><b>Editores Invitados</b></p>
                        @foreach ($editorInvitado as $editorInvitado)
                            <p style="margin: 0">{{$editorInvitado}}</p>
                        @endforeach
                    @endif <br>
        
                    {{-- comite de redaccion --}}
                    @if (is_countable($comiteDeRedaccion) && count($comiteDeRedaccion) > 0)
                    <p style="margin: 0"><b>Comité de Redacción</b></p>
                        @foreach ($comiteDeRedaccion as $comiteDeRedaccion)
                            <p style="margin: 0">{{$comiteDeRedaccion}}</p>
                        @endforeach
                    @endif <br>
                </div>
            </div>

            <br><br><p style="font-weight: bolder">Publicado: {{$fecha}}</p>
        </div>

    </div>

@endsection