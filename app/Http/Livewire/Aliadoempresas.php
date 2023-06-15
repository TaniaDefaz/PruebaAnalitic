<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Aliadoempresa;

class Aliadoempresas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_aliadoEmpresa, $Nombre, $Titulo, $Rol, $Experiencia, $Funciones;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.aliadoempresas.view', [
            'aliadoempresas' => Aliadoempresa::latest()
						->orWhere('id_aliadoEmpresa', 'LIKE', $keyWord)
						->orWhere('Nombre', 'LIKE', $keyWord)
						->orWhere('Titulo', 'LIKE', $keyWord)
						->orWhere('Rol', 'LIKE', $keyWord)
						->orWhere('Experiencia', 'LIKE', $keyWord)
						->orWhere('Funciones', 'LIKE', $keyWord)
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
		$this->id_aliadoEmpresa = null;
		$this->Nombre = null;
		$this->Titulo = null;
		$this->Rol = null;
		$this->Experiencia = null;
		$this->Funciones = null;
    }

    public function store()
    {
        $this->validate([
		'id_aliadoEmpresa' => 'required',
		'Nombre' => 'required',
		'Titulo' => 'required',
		'Rol' => 'required',
		'Experiencia' => 'required',
		'Funciones' => 'required',
        ]);

        Aliadoempresa::create([ 
			'id_aliadoEmpresa' => $this-> id_aliadoEmpresa,
			'Nombre' => $this-> Nombre,
			'Titulo' => $this-> Titulo,
			'Rol' => $this-> Rol,
			'Experiencia' => $this-> Experiencia,
			'Funciones' => $this-> Funciones
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Aliadoempresa Successfully created.');
    }

    public function edit($id)
    {
        $record = Aliadoempresa::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_aliadoEmpresa = $record-> id_aliadoEmpresa;
		$this->Nombre = $record-> Nombre;
		$this->Titulo = $record-> Titulo;
		$this->Rol = $record-> Rol;
		$this->Experiencia = $record-> Experiencia;
		$this->Funciones = $record-> Funciones;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_aliadoEmpresa' => 'required',
		'Nombre' => 'required',
		'Titulo' => 'required',
		'Rol' => 'required',
		'Experiencia' => 'required',
		'Funciones' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Aliadoempresa::find($this->selected_id);
            $record->update([ 
			'id_aliadoEmpresa' => $this-> id_aliadoEmpresa,
			'Nombre' => $this-> Nombre,
			'Titulo' => $this-> Titulo,
			'Rol' => $this-> Rol,
			'Experiencia' => $this-> Experiencia,
			'Funciones' => $this-> Funciones
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Aliadoempresa Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Aliadoempresa::where('id', $id);
            $record->delete();
        }
    }
}
