@extends('layouts.plantilla')

@section('title','Consejo Editorial')

@section('content')
    <h2>Consejo Editorial</h2>

    <div class="container">
        {{-- editor general --}}
        @if (is_countable($editorGeneral) && count($editorGeneral) > 0)
        <div class="text-center consejo-cargo">
            <h4>Editor/a General</h4>
        </div>
        <div class="row justify-content-center">
            @foreach ($editorGeneralFoto as $key => $editorFoto)
            <div class="col text-center">
                <div class="consejo-info">
                    <p>{{$editorGeneral[$key]}}</p>
                    <img src="{{$editorFoto}}" width="250">
                </div>
            </div>
            @endforeach
        </div>
        @endif <br>
    
        {{-- editores --}}
        @if (is_countable($editores) && count($editores) > 0)
        <div class="text-center consejo-cargo">
            <h4>Editores</h4>
        </div>
        <div class="row justify-content-center">
            @foreach ($editoresFoto as $key => $editorFoto)
            <div class="col-md-3 text-center">
                <div class="consejo-info">
                    <p>{{$editores[$key]}}</p>
                    <img src="{{$editorFoto}}" width="250">
                </div>
            </div>
            @endforeach
        </div>
        @endif <br>
    
        {{-- comité de redacción --}}
        @if (is_countable($comiteDeRedaccion) && count($comiteDeRedaccion) > 0)
        <div class="text-center consejo-cargo">
            <h4>Comité de Redacción</h4>
        </div>
        <div class="row justify-content-center">
            @foreach ($comiteDeRedaccionFoto as $key => $comiteFoto)
            <div class="col text-center">
                <div class="consejo-info">
                    <p>{{$comiteDeRedaccion[$key]}}</p>
                    <img src="{{$comiteFoto}}" width="250">
                </div>
            </div>
            @endforeach
        </div>
        @endif <br>
    </div>
    

@endsection