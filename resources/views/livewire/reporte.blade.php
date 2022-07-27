
<div>
    <br>
    <br>
         <div>
             <form action="">
                <input type="text" wire:model="buscar">
                <a href="{{url('sintoma-pdf'.$buscar)}}">buscar por nombre</a>
          </div>
           <br>
           <br>
           <div>
            <form action="">
               <input type="text" wire:model="nombredoc">
               <a href="{{url('Medico-pdf'.$nombredoc)}}">Buscar dato</a>
         </div>
        </div>
        <br>
        <br>
         <div>
            <a href="{{url('paciente-pdf')}}">Mostrar los dato</a>
         </div>
             
    </div>
