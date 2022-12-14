<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Juego;

class Juegos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_aul, $id_cat, $nombre_jue, $compania_jue, $precio_jue, $descripcion_jue;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.juegos.view', [
            'juegos' => Juego::latest()
						->orWhere('id_aul', 'LIKE', $keyWord)
						->orWhere('id_cat', 'LIKE', $keyWord)
						->orWhere('nombre_jue', 'LIKE', $keyWord)
						->orWhere('compania_jue', 'LIKE', $keyWord)
						->orWhere('precio_jue', 'LIKE', $keyWord)
						->orWhere('descripcion_jue', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->id_aul = null;
		$this->id_cat = null;
		$this->nombre_jue = null;
		$this->compania_jue = null;
		$this->precio_jue = null;
		$this->descripcion_jue = null;
    }

    public function store()
    {
       

        Juego::create([ 
			'id_aul' => $this-> id_aul,
			'id_cat' => $this-> id_cat,
			'nombre_jue' => $this-> nombre_jue,
			'compania_jue' => $this-> compania_jue,
			'precio_jue' => $this-> precio_jue,
			'descripcion_jue' => $this-> descripcion_jue
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Juego Successfully created.');
    }

    public function edit($id)
    {
        $record = Juego::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_aul = $record-> id_aul;
		$this->id_cat = $record-> id_cat;
		$this->nombre_jue = $record-> nombre_jue;
		$this->compania_jue = $record-> compania_jue;
		$this->precio_jue = $record-> precio_jue;
		$this->descripcion_jue = $record-> descripcion_jue;
		
        $this->updateMode = true;
    }

    public function update()
    {
        

        if ($this->selected_id) {
			$record = Juego::find($this->selected_id);
            $record->update([ 
			'id_aul' => $this-> id_aul,
			'id_cat' => $this-> id_cat,
			'nombre_jue' => $this-> nombre_jue,
			'compania_jue' => $this-> compania_jue,
			'precio_jue' => $this-> precio_jue,
			'descripcion_jue' => $this-> descripcion_jue
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Juego Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Juego::where('id', $id);
            $record->delete();
        }
    }
}
