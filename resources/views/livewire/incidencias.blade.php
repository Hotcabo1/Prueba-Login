<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($descripcion)
            <tr>
                <td>{{$registro->id}}</td>
                <td>{{$descripcion->descripcion}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
