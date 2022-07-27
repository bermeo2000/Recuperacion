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
                
            </tr>
        </thead>
        <tbody>
            @foreach ($j as $item)
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
                
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
