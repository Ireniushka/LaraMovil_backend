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
                    <form action="{{ route('consultaCurso')}}" method="post" with="auto">
                    {{ csrf_field() }}
                        <label>Indique los años del curso escolar:  </label>
                        <input name="anios" type="text" size=30 placeholder="Ejemplo: 2019-2020" required autofocus pattern="(1|2)[0-9]{3}.(1|2)[0-9]{3}" title="Ejemplo: 2019-2020">

                        <button type="submit" class="boton" >Generar pdf</button> 
                    </form>


                    @if($offers->count())

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
                                @foreach($offers as $offer)
                                    <tr>
                                        <td>{{$offer->headline}}</td>
                                        <td>{{$offer->description}}</td>
                                        <td>{{$offer->cicle->name}}</td>
                                        <td>{{$offer->date_max}}</td>
                                        <td>{{$offer->applieds()->count()}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>   

                    @else
                        <p>--NO HAY OFERTAS PARA ESTE CURSO ESCOLAR--</p>
                    @endif
                    
                    <p>{{$offers->links()}}</p>           
                </div>

                <a href="generador"><button class="btn btn-primary volver">Volver</button></a>
                <p></p>
            </div>
        </div>
    </div>
</div>
@endsection