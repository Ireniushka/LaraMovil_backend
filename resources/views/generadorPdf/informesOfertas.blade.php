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
        <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Oferta</th>
                    <th>Descripción</th>
                    <th>Ciclo</th>
                    <th>Fecha</th>
                    <th>Alumnos inscritos</th>
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
        </div>

    </body>
</html>