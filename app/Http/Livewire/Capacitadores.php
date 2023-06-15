<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Capacitadore;

class Capacitadores extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_Capacitador, $Nombre, $Telefono, $Direccion, $Email, $Fecha_nacimiento, $Solicitud;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.capacitadores.view', [
            'capacitadores' => Capacitadore::latest()
						->orWhere('id_Capacitador', 'LIKE', $keyWord)
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
		$this->id_Capacitador = null;
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
		'id_Capacitador' => 'required',
		'Nombre' => 'required',
		'Telefono' => 'required',
		'Direccion' => 'required',
		'Email' => 'required',
		'Fecha_nacimiento' => 'required',
		'Solicitud' => 'required',
        ]);

        Capacitadore::create([ 
			'id_Capacitador' => $this-> id_Capacitador,
			'Nombre' => $this-> Nombre,
			'Telefono' => $this-> Telefono,
			'Direccion' => $this-> Direccion,
			'Email' => $this-> Email,
			'Fecha_nacimiento' => $this-> Fecha_nacimiento,
			'Solicitud' => $this-> Solicitud
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Capacitadore Successfully created.');
    }

    public function edit($id)
    {
        $record = Capacitadore::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_Capacitador = $record-> id_Capacitador;
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
		'id_Capacitador' => 'required',
		'Nombre' => 'required',
		'Telefono' => 'required',
		'Direccion' => 'required',
		'Email' => 'required',
		'Fecha_nacimiento' => 'required',
		'Solicitud' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Capacitadore::find($this->selected_id);
            $record->update([ 
			'id_Capacitador' => $this-> id_Capacitador,
			'Nombre' => $this-> Nombre,
			'Telefono' => $this-> Telefono,
			'Direccion' => $this-> Direccion,
			'Email' => $this-> Email,
			'Fecha_nacimiento' => $this-> Fecha_nacimiento,
			'Solicitud' => $this-> Solicitud
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Capacitadore Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Capacitadore::where('id', $id);
            $record->delete();
        }
    }
}
