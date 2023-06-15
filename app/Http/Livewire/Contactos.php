<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contacto;

class Contactos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_Contactos, $Telefono, $Redes_Sociales, $Email;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.contactos.view', [
            'contactos' => Contacto::latest()
						->orWhere('id_Contactos', 'LIKE', $keyWord)
						->orWhere('Telefono', 'LIKE', $keyWord)
						->orWhere('Redes_Sociales', 'LIKE', $keyWord)
						->orWhere('Email', 'LIKE', $keyWord)
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
		$this->id_Contactos = null;
		$this->Telefono = null;
		$this->Redes_Sociales = null;
		$this->Email = null;
    }

    public function store()
    {
        $this->validate([
		'id_Contactos' => 'required',
		'Telefono' => 'required',
		'Redes_Sociales' => 'required',
		'Email' => 'required',
        ]);

        Contacto::create([ 
			'id_Contactos' => $this-> id_Contactos,
			'Telefono' => $this-> Telefono,
			'Redes_Sociales' => $this-> Redes_Sociales,
			'Email' => $this-> Email
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Contacto Successfully created.');
    }

    public function edit($id)
    {
        $record = Contacto::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_Contactos = $record-> id_Contactos;
		$this->Telefono = $record-> Telefono;
		$this->Redes_Sociales = $record-> Redes_Sociales;
		$this->Email = $record-> Email;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_Contactos' => 'required',
		'Telefono' => 'required',
		'Redes_Sociales' => 'required',
		'Email' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Contacto::find($this->selected_id);
            $record->update([ 
			'id_Contactos' => $this-> id_Contactos,
			'Telefono' => $this-> Telefono,
			'Redes_Sociales' => $this-> Redes_Sociales,
			'Email' => $this-> Email
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Contacto Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Contacto::where('id', $id);
            $record->delete();
        }
    }
}
