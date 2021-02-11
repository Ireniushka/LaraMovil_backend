<!doctype html>
<html>
    <head>
        <div class="botonera" role="group">
            <a href="{{ url('/') }}" class="boton-atras"><-- Inicio</a>
            <a href="users" class="botones-filtro disabled"> Todos </a>
            <a href="usersAct" class="botones-filtro"> Usuarios activados </a>
            <a href="usersDct" class="botones-filtro"> Usuarios desactivados</a>
        </div>


        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
        <style>

            .boton-atras{
                background-color: #2D2F2F;
                border: none;
                border-radius: 8px;
                color: white;
                font-family: sans-serif;
                padding: 5px 5px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 12px;
                border-collapse: collapse;
                border-spacing: 0;
            } 

            .boton-atras:hover{
                background-color: #0F1010;
            }

            .botonera{
                border: 1px solid;
                color: white;
                border-radius: 4px;
                font-family: sans-serif;
                display: inline-block;
                font-size: 12px;
                cursor: pointer;
                outline: none;
            }


            .botones-filtro{
                border: none;
                color: white;
                padding: 5px 15px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                background-color: #1B96C4;
                border-radius: 4px;
                font-family: sans-serif;
            } 

            .botones-filtro:hover{
                background-color: #29515D;
                border: #29515D;
                border-radius: 4px;
            }
            
            .disabled{
                opacity: 0.6;
                cursor: not-allowed;
                pointer-events: none;
            }
            
            .botones-activos{
                border: none;
                color: white;
                padding: 5px 15px;
                text-align: center;
                background-color: #5bc0de;
                border-radius: 4px;
                font-family: sans-serif;
                outline: none;
                width: 100px;
            }

            .botones-activos:hover{
                background-color: #52A9C3;
                cursor: pointer;
            }

            .tabla-cabecera{
                background-color: black;
                color: white;
                font-family: sans-serif;
            }
            .tabla{
                text-align: center;
                font-family: sans-serif;
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
            }

            tr:nth-child(even){
                background: rgba(224,232,234,0.5);
                color: black;
            }

            th, td{
                text-align: left;
                padding: 16px;
            }
            
            html,body{
                margin:0;
                padding: 0;
            }

        </style>
    </head>
    <body>
        <table class="tabla">
        <!-- Table Headings -->
            <thead class="tabla-cabecera">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Email</th>
                    <th scope="col">Activado</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
            <tr>
                
                <td>
                    <div>{{ $user->id }}</div>
                </td>
                <td>
                    <div>{{ $user->name }}</div>
                </td>
                <td>
                    <div>{{ $user->surname }}</div>
                </td>
                <td>
                    <div>{{ $user->email }}</div>
                </td>
                <td>
                    @if($user->activated == 0)
                    <form method="post" action="{{ route('StatusOff',$user->id )}}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <input type="hidden" name="visitaID" value="$valid->activated"/>
                        <button class="botones-activos" type="submit">
                            Activar
                        </button>
                    </form>
                    @else
                    <form method="post" action="{{ route('StatusOn',$user->id )}}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <input type="hidden" name="visitaID" value="$valid->activated"/>
                        <button class="botones-activos" type="submit">
                            Desactivar
                        </button>
                    </form>
                    @endif
                </td>
                <!-- <form method="post" action="/visitas">
                    <input type="hidden" name="visitaID" value="$valid->activated"/>
                    <button class="btn btn-lg btn-success" type="submit">
                        Confirmar Visita
                    </button>
                </form> -->
            </tr>
            @endforeach
            </tbody>
        </table>
    </body>
</html>