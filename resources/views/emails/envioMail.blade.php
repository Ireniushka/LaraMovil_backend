@extends('layouts.app')

@section('content')
<div class="container">

@Logged()
    <h2> <strong> Envio de e-mails </strong></h2>
    <form action="{{ url('/emailEnviado')}}" method="post">
        {{csrf_field()}}
        <label>{{'Para'}}</label>
        @foreach($users as $user)
        <input type="checkbox" name="para[]" value="alberto.rgmb@gmail.com" size=55>
        <label>{{$user->email}}</label>
        @endforeach
        </br>
        <label>{{'Asunto'}}</label>
        <input type="text" name="asunto" size=55>
        </br>
        <label>{{'Contenido'}}</label>
        <br>
        <textarea name="contenido" id="contenido" cols=70 rows=10></textarea>
        <br>
        <input type="file" name="file">
        <br>

        <input type="submit" value="Enviar" class="boton_agregar"></input>
        </br>

    </form>

    </br>
    </br>
    </br>

    <a href="{{url('/')}}"><button class="btn btn-primary">Volver</button></a>

    @endLogged
</div>
@endsection