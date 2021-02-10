<!doctype html>
<html>
    <head>
        <a href="{{ url('/') }}" class="btn btn-sm btn-dark"><-- Home</a>

        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="ges" class="btn btn-sm btn-dark botones botones:hover disabled"> All </a>
            <a href="gesDsact" class="btn btn-sm btn-dark botones botones:hover">Activated</a>
            <a href="gesActiv" class="btn btn-sm btn-dark botones botones:hover">Desactivated</a>
        </div>


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            .botones:hover{
               background-color: #29515D;
               border: #29515D;
               
            }

            .botones{
                background-color: #1B96C4;
                border: #1B96C4;
            }
        </style>
    </head>
    <body>
        <table class="table table-striped task-table">
        <!-- Table Headings -->
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Activated</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
            <tr>
                
                <td class="table-text">
                    <div>{{ $user->id }}</div>
                </td>
                <td class="table-text">
                    <div>{{ $user->name }}</div>
                </td>
                <td class="table-text">
                    <div>{{ $user->surname }}</div>
                </td>
                <td class="table-text">
                    <div>{{ $user->email }}</div>
                </td>
                <td>
                    
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