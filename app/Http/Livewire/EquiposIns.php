<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Jugador;

use App\Models\InscripcionEqu;
use PDF;
class EquiposIns extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_equ, $nombre_jug, $cedula_jug, $telefono_jug, $correo_jug, $descripcion_jug;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
       
        return view('livewire.equipos-ins.view', [
            'equiposIns' => InscripcionEqu::with('equipos')->with('juegos')
                        ->whereHas('equipos', fn ($query) => 
                        $query->where('nombre_equ', 'LIKE', $keyWord)
                        )
                        ->whereHas('equipos', fn ($query) => 
                        $query->where('descripcion_equ', 'LIKE', $keyWord)
                        )
                        ->whereHas('juegos', fn ($query) => 
                        $query->where('nombre_jue', 'LIKE', $keyWord)
                        )
                        ->orWhere('precio_ins_equ', 'LIKE', $keyWord)
						->get(),
        ]);
    }
	
    public function viewPDF()
    {
        $keyWord = '%'.$this->keyWord .'%';

        $equiposIns = InscripcionEqu::with('equipos')->with('juegos')
        ->whereHas('equipos', fn ($query) => 
        $query->where('nombre_equ', 'LIKE', $keyWord)
        )
        ->whereHas('equipos', fn ($query) => 
        $query->where('descripcion_equ', 'LIKE', $keyWord)
        )
        ->whereHas('juegos', fn ($query) => 
        $query->where('nombre_jue', 'LIKE', $keyWord)
        )
        ->orWhere('precio_ins_equ', 'LIKE', $keyWord)
        ->get();
        $pdf = PDF::loadView('livewire.equipos-ins.equipoInsReporte', array('equiposIns'=> $equiposIns))->setPaper('a4','landscape');
        return $pdf->stream();
    }
    
    public function downloadPDF()
    {
        $keyWord = '%'.$this->keyWord .'%';

        $equiposIns =  InscripcionEqu::with('equipos')->with('juegos')
        ->whereHas('equipos', fn ($query) => 
        $query->where('nombre_equ', 'LIKE', $keyWord)
        )
        ->whereHas('equipos', fn ($query) => 
        $query->where('descripcion_equ', 'LIKE', $keyWord)
        )
        ->whereHas('juegos', fn ($query) => 
        $query->where('nombre_jue', 'LIKE', $keyWord)
        )
        ->orWhere('precio_ins_equ', 'LIKE', $keyWord)
        ->get();

        $pdf = PDF::loadView('livewire.equipos-ins.equipoInsReporte', array('equiposIns'=> $equiposIns))->setPaper('a4','landscape');
        return $pdf->download('Equipos_Inscritos.pdf');
    }
}
