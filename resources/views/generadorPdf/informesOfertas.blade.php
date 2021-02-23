<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <style>
            table, thead, tbody, tr, th, td{
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>    
        <table style="width:100%">
            <tr>
                <th>
                    <br>
                    <img src="imgPdf/ri_3.png">
                    <br>
                </th>
                <th>DEPARTAMENTO ESCUELA EMPRESA</th>
            </tr>
        </table>   
        <br>
        <br>

        <p>Curso escolar: {{$curso}}</p>
        <br>
        
        @foreach($cicles as $cicle)
            @foreach($offers as $offer)
            @if($offer->cicle == $cicle)
                <br>
                <p>Ciclo de: {{$cicle->name}}</p>

                <table class ="table table-light">
                    <thead class="thead-ligth">
                        <tr>
                            <th>Oferta</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th>Inscritos</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($offers as $offer)
                            @if($offer->cicle == $cicle)
                                <tr>
                                    <td>{{$offer->headline}}</td>
                                    <td>{{$offer->description}}</td>
                                    <td>{{$offer->date_max}}</td>
                                    <td>{{$offer->applieds()->count()}}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                @break
            @endif
            @endforeach   
        @endforeach

    </body>
</html>
