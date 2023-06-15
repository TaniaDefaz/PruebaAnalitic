<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Genero;

class Generos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_Genero, $Genero, $Sexo;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.generos.view', [
            'generos' => Genero::latest()
						->orWhere('id_Genero', 'LIKE', $keyWord)
						->orWhere('Genero', 'LIKE', $keyWord)
						->orWhere('Sexo', 'LIKE', $keyWord)
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
		$this->id_Genero = null;
		$this->Genero = null;
		$this->Sexo = null;
    }

    public function store()
    {
        $this->validate([
		'id_Genero' => 'required',
		'Genero' => 'required',
		'Sexo' => 'required',
        ]);

        Genero::create([ 
			'id_Genero' => $this-> id_Genero,
			'Genero' => $this-> Genero,
			'Sexo' => $this-> Sexo
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Genero Successfully created.');
    }

    public function edit($id)
    {
        $record = Genero::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_Genero = $record-> id_Genero;
		$this->Genero = $record-> Genero;
		$this->Sexo = $record-> Sexo;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_Genero' => 'required',
		'Genero' => 'required',
		'Sexo' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Genero::find($this->selected_id);
            $record->update([ 
			'id_Genero' => $this-> id_Genero,
			'Genero' => $this-> Genero,
			'Sexo' => $this-> Sexo
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Genero Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Genero::where('id', $id);
            $record->delete();
        }
    }
}
