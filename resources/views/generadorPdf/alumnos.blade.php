@extends('layouts.app')

<style>
    .boton{
        background-color:orange;
        font-size: 12px;
        padding: 5px;
        border-radius: 6px;
        border: 2px solid;
        text-decoration: none;
        height:32px;
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

                <div class="panel-heading"><strong>Alumnos por oferta</strong></div>

                <div class="panel-body">
                    
                    <form action="{{ route('consultaCiclo')}}" method="post">
                    {{ csrf_field() }}
                        <div class="btn-group form-group" rol="group" style="height:50px">
                            <label>Seleccione el ciclo: </label>
                            <select name="select" style="height:30px">
                                <option value="todos">Todos</option>
                                @foreach($cicles as $cicle)
                                <option value="{{$cicle->id}}">{{$cicle->name}}</option>
                                @endforeach
                            </select>  
  
                            <button type="submit" class="boton" >Consultar</button>                           
                        </div>
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
                                        <td width="100">  
                                            <a href="{{ route('informeAlumno', $offer) }}" class="boton">
                                                Generar pdf
                                            </a>                                
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table> 

                    @else
                        <p>--NO HAY OFERTAS RELACIONADAS CON ESTE CICLO--</p>
                    @endif
                    
                        <p>{{$offers->links()}}</p>
                </div>
                </br>
                <a href="generador"><button class="btn btn-primary volver">Volver</button></a>
                <p></p>
            </div>
        </div>
    </div>
</div>
@endsection