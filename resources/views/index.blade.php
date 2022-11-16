<table>
    <tbody>
        @foreach($resep as $resep)
        <tr>
            <td>{{$resep->Nama_Resep}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

