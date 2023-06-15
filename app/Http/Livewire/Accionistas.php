<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Accionista;

class Accionistas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_Accionistas, $Rol, $Nombre, $Titulo, $Experiencia, $Descripcion;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.accionistas.view', [
            'accionistas' => Accionista::latest()
						->orWhere('id_Accionistas', 'LIKE', $keyWord)
						->orWhere('Rol', 'LIKE', $keyWord)
						->orWhere('Nombre', 'LIKE', $keyWord)
						->orWhere('Titulo', 'LIKE', $keyWord)
						->orWhere('Experiencia', 'LIKE', $keyWord)
						->orWhere('Descripcion', 'LIKE', $keyWord)
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
		$this->id_Accionistas = null;
		$this->Rol = null;
		$this->Nombre = null;
		$this->Titulo = null;
		$this->Experiencia = null;
		$this->Descripcion = null;
    }

    public function store()
    {
        $this->validate([
		'id_Accionistas' => 'required',
		'Rol' => 'required',
		'Nombre' => 'required',
		'Titulo' => 'required',
		'Experiencia' => 'required',
		'Descripcion' => 'required',
        ]);

        Accionista::create([ 
			'id_Accionistas' => $this-> id_Accionistas,
			'Rol' => $this-> Rol,
			'Nombre' => $this-> Nombre,
			'Titulo' => $this-> Titulo,
			'Experiencia' => $this-> Experiencia,
			'Descripcion' => $this-> Descripcion
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Accionista Successfully created.');
    }

    public function edit($id)
    {
        $record = Accionista::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_Accionistas = $record-> id_Accionistas;
		$this->Rol = $record-> Rol;
		$this->Nombre = $record-> Nombre;
		$this->Titulo = $record-> Titulo;
		$this->Experiencia = $record-> Experiencia;
		$this->Descripcion = $record-> Descripcion;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_Accionistas' => 'required',
		'Rol' => 'required',
		'Nombre' => 'required',
		'Titulo' => 'required',
		'Experiencia' => 'required',
		'Descripcion' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Accionista::find($this->selected_id);
            $record->update([ 
			'id_Accionistas' => $this-> id_Accionistas,
			'Rol' => $this-> Rol,
			'Nombre' => $this-> Nombre,
			'Titulo' => $this-> Titulo,
			'Experiencia' => $this-> Experiencia,
			'Descripcion' => $this-> Descripcion
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Accionista Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Accionista::where('id', $id);
            $record->delete();
        }
    }
}
