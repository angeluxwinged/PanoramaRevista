@extends('layouts.plantilla')

@section('title','Colaboradores')

@section('content')
    <h2>Colaboradores</h2>

    <div class="container">
        <div class="row">
            @foreach ($editoresInvitados as $key => $editor)
            <div class="col-md-3">
                <div class="text-center colab-info">
                    <p>{{ $editor }}</p>
                    @if (isset($editoresInvitadosFoto[$key]))
                    <img src="{{$editoresInvitadosFoto[$key]}}" width="250">
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    
@endsection