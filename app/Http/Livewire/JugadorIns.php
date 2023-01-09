<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Jugador;

use App\Models\InscripcionInd;
use PDF;
class JugadorIns extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_equ, $nombre_jug, $cedula_jug, $telefono_jug, $correo_jug, $descripcion_jug;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
       
        return view('livewire.jugadores-ins.view', [
            'jugadorsIns' => InscripcionInd::with('jugadors')->with('juegos')
                        ->whereHas('jugadors', fn ($query) => 
                        $query->where('nombre_jug', 'LIKE', $keyWord)
                        )
                        ->whereHas('jugadors', fn ($query) => 
                        $query->where('cedula_jug', 'LIKE', $keyWord)
                        )
                        ->whereHas('jugadors', fn ($query) => 
                        $query->where('telefono_jug', 'LIKE', $keyWord)
                        )
                        ->whereHas('jugadors', fn ($query) => 
                        $query->where('correo_jug', 'LIKE', $keyWord)
                        )
                        ->whereHas('jugadors', fn ($query) => 
                        $query->where('descripcion_jug', 'LIKE', $keyWord)
                        )
                        ->whereHas('juegos', fn ($query) => 
                        $query->where('nombre_jue', 'LIKE', $keyWord)
                        )
                        ->orWhere('precio_ins', 'LIKE', $keyWord)
						->get(),
        ]);
    }
	
    public function viewPDF()
    {
        $keyWord = '%'.$this->keyWord .'%';

        $jugadorIns = InscripcionInd::with('jugadors')->with('juegos')
        ->whereHas('jugadors', fn ($query) => 
        $query->where('nombre_jug', 'LIKE', $keyWord)
        )
        ->whereHas('jugadors', fn ($query) => 
        $query->where('cedula_jug', 'LIKE', $keyWord)
        )
        ->whereHas('jugadors', fn ($query) => 
        $query->where('telefono_jug', 'LIKE', $keyWord)
        )
        ->whereHas('jugadors', fn ($query) => 
        $query->where('correo_jug', 'LIKE', $keyWord)
        )
        ->whereHas('jugadors', fn ($query) => 
        $query->where('descripcion_jug', 'LIKE', $keyWord)
        )
        ->whereHas('juegos', fn ($query) => 
        $query->where('nombre_jue', 'LIKE', $keyWord)
        )
        ->orWhere('precio_ins', 'LIKE', $keyWord)
        ->get();
        $pdf = PDF::loadView('livewire.jugadores-ins.jugadorInsReporte', array('jugadorIns'=> $jugadorIns))->setPaper('a4','landscape');
        return $pdf->stream();
    }
    
    public function downloadPDF()
    {
        $keyWord = '%'.$this->keyWord .'%';

        $jugadorIns = InscripcionInd::with('jugadors')->with('juegos')
        ->whereHas('jugadors', fn ($query) => 
        $query->where('nombre_jug', 'LIKE', $keyWord)
        )
        ->whereHas('jugadors', fn ($query) => 
        $query->where('cedula_jug', 'LIKE', $keyWord)
        )
        ->whereHas('jugadors', fn ($query) => 
        $query->where('telefono_jug', 'LIKE', $keyWord)
        )
        ->whereHas('jugadors', fn ($query) => 
        $query->where('correo_jug', 'LIKE', $keyWord)
        )
        ->whereHas('jugadors', fn ($query) => 
        $query->where('descripcion_jug', 'LIKE', $keyWord)
        )
        ->whereHas('juegos', fn ($query) => 
        $query->where('nombre_jue', 'LIKE', $keyWord)
        )
        ->orWhere('precio_ins', 'LIKE', $keyWord)
        ->get();
        $pdf = PDF::loadView('livewire.jugadores-ins.jugadorInsReporte', array('jugadorIns'=> $jugadorIns))->setPaper('a4','landscape');
        return $pdf->download('Jugadores_Inscritos.pdf');
    }
}
