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

                    <img src="imgPdf/ri_3.png">
                
                </th>
                <th>DEPARTAMENTO ESCUELA EMPRESA</th>
            </tr>
        </table>   
        <br>
        <br>
       <strong>Oferta seleccionada:</strong>
        <br>
        <table class ="table table-light">
            <tr>
                <th>Oferta</th>
                <th>Descripción</th>
                <th>Ciclo</th>
                <th>Fecha</th>
                <th>Inscritos</th>
            </tr>
            <tr>
                <td>{{$offer->headline}}</td>
                <td>{{$offer->description}}</td>
                <td>{{$offer->cicle->name}}</td>
                <td>{{$offer->date_max}}</td>
                <td>{{$offer->applieds()->count()}}</td>
            </tr>
        </table>
        <br>
        <br>
        <strong>Alumnos inscritos:</strong>
        <br>
        <table class ="table table-light">
            <thead class="thead-ligth">
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Ciclo</th>
                    <th>Email</th>
                    <th>Inscrito en</th>
                </tr>
            </thead>

            <tbody>
            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->surname}}</td>
                        <td>{{$user->cicle->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->applieds()->count()}} ofertas</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        
    </body>
</html>
