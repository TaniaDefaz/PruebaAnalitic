<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Informacionempresa;

class Informacionempresas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_InfEmpresa, $Descripcion, $Mision, $Vision, $CulturaOrganizacional;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.informacionempresas.view', [
            'informacionempresas' => Informacionempresa::latest()
						->orWhere('id_InfEmpresa', 'LIKE', $keyWord)
						->orWhere('Descripcion', 'LIKE', $keyWord)
						->orWhere('Mision', 'LIKE', $keyWord)
						->orWhere('Vision', 'LIKE', $keyWord)
						->orWhere('CulturaOrganizacional', 'LIKE', $keyWord)
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
		$this->id_InfEmpresa = null;
		$this->Descripcion = null;
		$this->Mision = null;
		$this->Vision = null;
		$this->CulturaOrganizacional = null;
    }

    public function store()
    {
        $this->validate([
		'id_InfEmpresa' => 'required',
		'Descripcion' => 'required',
		'Mision' => 'required',
		'Vision' => 'required',
		'CulturaOrganizacional' => 'required',
        ]);

        Informacionempresa::create([ 
			'id_InfEmpresa' => $this-> id_InfEmpresa,
			'Descripcion' => $this-> Descripcion,
			'Mision' => $this-> Mision,
			'Vision' => $this-> Vision,
			'CulturaOrganizacional' => $this-> CulturaOrganizacional
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Informacionempresa Successfully created.');
    }

    public function edit($id)
    {
        $record = Informacionempresa::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_InfEmpresa = $record-> id_InfEmpresa;
		$this->Descripcion = $record-> Descripcion;
		$this->Mision = $record-> Mision;
		$this->Vision = $record-> Vision;
		$this->CulturaOrganizacional = $record-> CulturaOrganizacional;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_InfEmpresa' => 'required',
		'Descripcion' => 'required',
		'Mision' => 'required',
		'Vision' => 'required',
		'CulturaOrganizacional' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Informacionempresa::find($this->selected_id);
            $record->update([ 
			'id_InfEmpresa' => $this-> id_InfEmpresa,
			'Descripcion' => $this-> Descripcion,
			'Mision' => $this-> Mision,
			'Vision' => $this-> Vision,
			'CulturaOrganizacional' => $this-> CulturaOrganizacional
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Informacionempresa Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Informacionempresa::where('id', $id);
            $record->delete();
        }
    }
}
