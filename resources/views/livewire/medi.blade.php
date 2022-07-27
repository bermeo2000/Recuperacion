<div>
    <table>
        <thead >
            <tr >
                <td >
                   Nombre 
                </td>
                <td>
                    Apellido
                 </td>
                 <td>
                    Cedula 
                 </td>
                 <td>
                    Especialidad
                 </td>
                 <td>
                    edad
                 </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($je as $item)
                <tr>
                    <td>
                        {{$item->nom}}
                    </td>
                    <td>
                        {{$item->ape}}
                    </td>
                    <td>
                        {{$item->CI}}
                    </td>
                    <td>
                        {{$item->espe}}
                    </td>
                    <td>
                        {{$item->eda}}
                    </td>
                    <td>
                        {{$item->nomp}}  {{$item->apep}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

