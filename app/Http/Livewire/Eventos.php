<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Evento;

class Eventos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_Eventos, $Descripcion, $Sitio, $FechaEvento, $Hora;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.eventos.view', [
            'eventos' => Evento::latest()
						->orWhere('id_Eventos', 'LIKE', $keyWord)
						->orWhere('Descripcion', 'LIKE', $keyWord)
						->orWhere('Sitio', 'LIKE', $keyWord)
						->orWhere('FechaEvento', 'LIKE', $keyWord)
						->orWhere('Hora', 'LIKE', $keyWord)
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
		$this->id_Eventos = null;
		$this->Descripcion = null;
		$this->Sitio = null;
		$this->FechaEvento = null;
		$this->Hora = null;
    }

    public function store()
    {
        $this->validate([
		'id_Eventos' => 'required',
		'Descripcion' => 'required',
		'Sitio' => 'required',
		'FechaEvento' => 'required',
		'Hora' => 'required',
        ]);

        Evento::create([ 
			'id_Eventos' => $this-> id_Eventos,
			'Descripcion' => $this-> Descripcion,
			'Sitio' => $this-> Sitio,
			'FechaEvento' => $this-> FechaEvento,
			'Hora' => $this-> Hora
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Evento Successfully created.');
    }

    public function edit($id)
    {
        $record = Evento::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_Eventos = $record-> id_Eventos;
		$this->Descripcion = $record-> Descripcion;
		$this->Sitio = $record-> Sitio;
		$this->FechaEvento = $record-> FechaEvento;
		$this->Hora = $record-> Hora;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_Eventos' => 'required',
		'Descripcion' => 'required',
		'Sitio' => 'required',
		'FechaEvento' => 'required',
		'Hora' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Evento::find($this->selected_id);
            $record->update([ 
			'id_Eventos' => $this-> id_Eventos,
			'Descripcion' => $this-> Descripcion,
			'Sitio' => $this-> Sitio,
			'FechaEvento' => $this-> FechaEvento,
			'Hora' => $this-> Hora
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Evento Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Evento::where('id', $id);
            $record->delete();
        }
    }
}
