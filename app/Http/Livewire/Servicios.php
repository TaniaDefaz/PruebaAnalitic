<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Servicio;

class Servicios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_Servicios, $NombreServicio, $DescripcionServicio;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.servicios.view', [
            'servicios' => Servicio::latest()
						->orWhere('id_Servicios', 'LIKE', $keyWord)
						->orWhere('NombreServicio', 'LIKE', $keyWord)
						->orWhere('DescripcionServicio', 'LIKE', $keyWord)
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
		$this->id_Servicios = null;
		$this->NombreServicio = null;
		$this->DescripcionServicio = null;
    }

    public function store()
    {
        $this->validate([
		'id_Servicios' => 'required',
		'NombreServicio' => 'required',
		'DescripcionServicio' => 'required',
        ]);

        Servicio::create([ 
			'id_Servicios' => $this-> id_Servicios,
			'NombreServicio' => $this-> NombreServicio,
			'DescripcionServicio' => $this-> DescripcionServicio
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Servicio Successfully created.');
    }

    public function edit($id)
    {
        $record = Servicio::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_Servicios = $record-> id_Servicios;
		$this->NombreServicio = $record-> NombreServicio;
		$this->DescripcionServicio = $record-> DescripcionServicio;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_Servicios' => 'required',
		'NombreServicio' => 'required',
		'DescripcionServicio' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Servicio::find($this->selected_id);
            $record->update([ 
			'id_Servicios' => $this-> id_Servicios,
			'NombreServicio' => $this-> NombreServicio,
			'DescripcionServicio' => $this-> DescripcionServicio
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Servicio Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Servicio::where('id', $id);
            $record->delete();
        }
    }
}
