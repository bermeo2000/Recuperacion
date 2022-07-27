<div>
    <table>
        <thead >
            <tr >
                <td >
                   tipo de sintoma 
                </td>
                <td>
         
            </tr>
        </thead>
        <tbody>
            @foreach ($j as $item)
                <tr>
                    <td>
                        {{$item->tipo_sinto}}
                    </td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
