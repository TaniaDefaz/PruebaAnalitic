<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Administradore;

class Administradores extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_Administrador, $nombreAdm;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.administradores.view', [
            'administradores' => Administradore::latest()
						->orWhere('id_Administrador', 'LIKE', $keyWord)
						->orWhere('nombreAdm', 'LIKE', $keyWord)
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
		$this->id_Administrador = null;
		$this->nombreAdm = null;
    }

    public function store()
    {
        $this->validate([
		'id_Administrador' => 'required',
		'nombreAdm' => 'required',
        ]);

        Administradore::create([ 
			'id_Administrador' => $this-> id_Administrador,
			'nombreAdm' => $this-> nombreAdm
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Administradore Successfully created.');
    }

    public function edit($id)
    {
        $record = Administradore::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_Administrador = $record-> id_Administrador;
		$this->nombreAdm = $record-> nombreAdm;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_Administrador' => 'required',
		'nombreAdm' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Administradore::find($this->selected_id);
            $record->update([ 
			'id_Administrador' => $this-> id_Administrador,
			'nombreAdm' => $this-> nombreAdm
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Administradore Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Administradore::where('id', $id);
            $record->delete();
        }
    }
}
