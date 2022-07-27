<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\medicos;
use App\Models\pasientes;
use App\Models\sintomas;
use PDF;

use Illuminate\Support\Facades\DB;

class Reporte extends Component
{
    protected $queryString = ['buscar'];
    public $buscar, $nombredoc;

    
        public function pacient()
        {
           
            $e=DB::table('pacientes')
            ->join('medico','pacientes.id_medico','=','medico.id')
            ->select('pacientes.*','medico.nom as nomp','medico.ape as apep')
            ->get();
            
            return PDF::loadView('livewire.medi', compact('e'))
            ->stream('archivo.pdf');
        } 
    
        public function render()
        {
    
            return view('livewire.reporte');

        }
    
    
        public function sintom($buscar)
        {
            $j=DB::table('medico')
            ->join('pacientes','medico.id_pacientes','=','pacientes.id')
            ->select('medico.*','pacientes.nom as nomp')
            -> where( 'medico.nom',$buscar )->get();
            return PDF::loadView('livewire.paci', compact('j'))
            ->stream('archivo.pdf');
        }
        public function Medic($nombredoc)
        {
            $je=DB::table('medico')
            ->join('pacientes','medico.id_pacientes','=','pacientes.id')
            ->select('medico.*','pacientes.nom as nomp')
            -> where( 'pacientes.nom', $nombredoc )->get();
            return PDF::loadView('livewire.sint', compact('je'))
            ->stream('archivo.pdf');
        }
    
      
}
