
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }


    /* Float four columns side by side */
    .column {
        float: left;
        width: 43%;
        padding: 0 10px;
    }

    .boton{
        width:250px;
        margin-top:3px;
        margin-left:-80px; 
    }

    /* Remove extra left and right margins, due to padding */
    .row {margin: 0 -5px;}

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
    .column {
        width: 100%;
        display: block;
        margin-top: 0;
    }
    }

    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 8px;
        text-align: center;
        background-color: #f1f1f1;
    }
</style>

<body>
    <div class="container">
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
            <tr>
                <td>{{$offer->headline}}</td>
                <td>{{$offer->description}}</td>
                <td>{{$offer->cicle_id}}</td>
                <td>{{$offer->date_max}}</td>
                <td>{{$offer->num_candidates}}</td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
