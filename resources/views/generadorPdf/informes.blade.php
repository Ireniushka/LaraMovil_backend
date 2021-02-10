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

