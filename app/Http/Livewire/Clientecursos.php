<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Clientecurso;

class Clientecursos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_ClienteCurso, $Nombre, $Telefono, $Direccion, $Email, $Fecha_nacimiento, $Solicitud;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.clientecursos.view', [
            'clientecursos' => Clientecurso::latest()
						->orWhere('id_ClienteCurso', 'LIKE', $keyWord)
						->orWhere('Nombre', 'LIKE', $keyWord)
						->orWhere('Telefono', 'LIKE', $keyWord)
						->orWhere('Direccion', 'LIKE', $keyWord)
						->orWhere('Email', 'LIKE', $keyWord)
						->orWhere('Fecha_nacimiento', 'LIKE', $keyWord)
						->orWhere('Solicitud', 'LIKE', $keyWord)
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
		$this->id_ClienteCurso = null;
		$this->Nombre = null;
		$this->Telefono = null;
		$this->Direccion = null;
		$this->Email = null;
		$this->Fecha_nacimiento = null;
		$this->Solicitud = null;
    }

    public function store()
    {
        $this->validate([
		'id_ClienteCurso' => 'required',
		'Nombre' => 'required',
		'Telefono' => 'required',
		'Direccion' => 'required',
		'Email' => 'required',
		'Fecha_nacimiento' => 'required',
		'Solicitud' => 'required',
        ]);

        Clientecurso::create([ 
			'id_ClienteCurso' => $this-> id_ClienteCurso,
			'Nombre' => $this-> Nombre,
			'Telefono' => $this-> Telefono,
			'Direccion' => $this-> Direccion,
			'Email' => $this-> Email,
			'Fecha_nacimiento' => $this-> Fecha_nacimiento,
			'Solicitud' => $this-> Solicitud
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Clientecurso Successfully created.');
    }

    public function edit($id)
    {
        $record = Clientecurso::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_ClienteCurso = $record-> id_ClienteCurso;
		$this->Nombre = $record-> Nombre;
		$this->Telefono = $record-> Telefono;
		$this->Direccion = $record-> Direccion;
		$this->Email = $record-> Email;
		$this->Fecha_nacimiento = $record-> Fecha_nacimiento;
		$this->Solicitud = $record-> Solicitud;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_ClienteCurso' => 'required',
		'Nombre' => 'required',
		'Telefono' => 'required',
		'Direccion' => 'required',
		'Email' => 'required',
		'Fecha_nacimiento' => 'required',
		'Solicitud' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Clientecurso::find($this->selected_id);
            $record->update([ 
			'id_ClienteCurso' => $this-> id_ClienteCurso,
			'Nombre' => $this-> Nombre,
			'Telefono' => $this-> Telefono,
			'Direccion' => $this-> Direccion,
			'Email' => $this-> Email,
			'Fecha_nacimiento' => $this-> Fecha_nacimiento,
			'Solicitud' => $this-> Solicitud
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Clientecurso Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Clientecurso::where('id', $id);
            $record->delete();
        }
    }
}
