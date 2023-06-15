<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Consultoresexterno;

class Consultoresexternos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_consultores, $Nombre, $Titulo, $Experiencia, $Descripcion;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.consultoresexternos.view', [
            'consultoresexternos' => Consultoresexterno::latest()
						->orWhere('id_consultores', 'LIKE', $keyWord)
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
		$this->id_consultores = null;
		$this->Nombre = null;
		$this->Titulo = null;
		$this->Experiencia = null;
		$this->Descripcion = null;
    }

    public function store()
    {
        $this->validate([
		'id_consultores' => 'required',
		'Nombre' => 'required',
		'Titulo' => 'required',
		'Experiencia' => 'required',
		'Descripcion' => 'required',
        ]);

        Consultoresexterno::create([ 
			'id_consultores' => $this-> id_consultores,
			'Nombre' => $this-> Nombre,
			'Titulo' => $this-> Titulo,
			'Experiencia' => $this-> Experiencia,
			'Descripcion' => $this-> Descripcion
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Consultoresexterno Successfully created.');
    }

    public function edit($id)
    {
        $record = Consultoresexterno::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_consultores = $record-> id_consultores;
		$this->Nombre = $record-> Nombre;
		$this->Titulo = $record-> Titulo;
		$this->Experiencia = $record-> Experiencia;
		$this->Descripcion = $record-> Descripcion;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_consultores' => 'required',
		'Nombre' => 'required',
		'Titulo' => 'required',
		'Experiencia' => 'required',
		'Descripcion' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Consultoresexterno::find($this->selected_id);
            $record->update([ 
			'id_consultores' => $this-> id_consultores,
			'Nombre' => $this-> Nombre,
			'Titulo' => $this-> Titulo,
			'Experiencia' => $this-> Experiencia,
			'Descripcion' => $this-> Descripcion
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Consultoresexterno Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Consultoresexterno::where('id', $id);
            $record->delete();
        }
    }
}
