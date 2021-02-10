@extends('layouts.app')
<style>
    .boton{
        background-color:orange;
        padding: 5px;
        border-radius: 6px;
        border: 2px solid;
    }
    .volver{
        margin: 20px;
    }

</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Ofertas por curso escolar</strong></div>

                <div class="panel-body">
                    <form>
                        <label>Indique los años del curso escolar:  </label>
                        <input type="text" size=30>
                        <input type="submit" value="Consultar" class="boton">
                        |
                        <a href="{{ route('informeOferta') }}" class="boton">Generar pdf</a>
                    </form>
                    <table class ="table table-light">
                        <thead class="thead-ligth">
                            <tr>
                                <th>Oferta</th>
                                <th>Descripción</th>
                                <th>Ciclo</th>
                                <th>Fecha</th>
                                <th>Inscritos</th>
                            </tr>
                        </thead>

                        <tbody>
                        @if($offers)
                            @foreach($offers as $offer)
                                <tr>
                                    <td>{{$offer->headline}}</td>
                                    <td>{{$offer->description}}</td>
                                    <td>{{$offer->cicle->name}}</td>
                                    <td>{{$offer->date_max}}</td>
                                    <td>{{$offer->applieds()->count()}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>   
                    <p>{{$offers->links()}}</p>           
                </div>

                <a href="generador"><button class="btn btn-primary volver">Volver</button></a>
                <p></p>
            </div>
        </div>
    </div>
</div>
@endsection