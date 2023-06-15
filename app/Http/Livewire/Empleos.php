<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Empleo;

class Empleos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_Empleo, $Descripcion, $Cantidad, $Horario;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.empleos.view', [
            'empleos' => Empleo::latest()
						->orWhere('id_Empleo', 'LIKE', $keyWord)
						->orWhere('Descripcion', 'LIKE', $keyWord)
						->orWhere('Cantidad', 'LIKE', $keyWord)
						->orWhere('Horario', 'LIKE', $keyWord)
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
		$this->id_Empleo = null;
		$this->Descripcion = null;
		$this->Cantidad = null;
		$this->Horario = null;
    }

    public function store()
    {
        $this->validate([
		'id_Empleo' => 'required',
		'Descripcion' => 'required',
		'Cantidad' => 'required',
		'Horario' => 'required',
        ]);

        Empleo::create([ 
			'id_Empleo' => $this-> id_Empleo,
			'Descripcion' => $this-> Descripcion,
			'Cantidad' => $this-> Cantidad,
			'Horario' => $this-> Horario
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Empleo Successfully created.');
    }

    public function edit($id)
    {
        $record = Empleo::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_Empleo = $record-> id_Empleo;
		$this->Descripcion = $record-> Descripcion;
		$this->Cantidad = $record-> Cantidad;
		$this->Horario = $record-> Horario;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_Empleo' => 'required',
		'Descripcion' => 'required',
		'Cantidad' => 'required',
		'Horario' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Empleo::find($this->selected_id);
            $record->update([ 
			'id_Empleo' => $this-> id_Empleo,
			'Descripcion' => $this-> Descripcion,
			'Cantidad' => $this-> Cantidad,
			'Horario' => $this-> Horario
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Empleo Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Empleo::where('id', $id);
            $record->delete();
        }
    }
}
