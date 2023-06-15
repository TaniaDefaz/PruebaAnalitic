<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Responsabilidadsociale;

class Responsabilidadsociales extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_responsabilidad_social, $Servicio, $CursoCapacitacion, $FechaInicio_curso, $FechaFin_curso, $Fecha_nacimiento, $Costo, $Campo;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.responsabilidadsociales.view', [
            'responsabilidadsociales' => Responsabilidadsociale::latest()
						->orWhere('id_responsabilidad_social', 'LIKE', $keyWord)
						->orWhere('Servicio', 'LIKE', $keyWord)
						->orWhere('CursoCapacitacion', 'LIKE', $keyWord)
						->orWhere('FechaInicio_curso', 'LIKE', $keyWord)
						->orWhere('FechaFin_curso', 'LIKE', $keyWord)
						->orWhere('Fecha_nacimiento', 'LIKE', $keyWord)
						->orWhere('Costo', 'LIKE', $keyWord)
						->orWhere('Campo', 'LIKE', $keyWord)
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
		$this->id_responsabilidad_social = null;
		$this->Servicio = null;
		$this->CursoCapacitacion = null;
		$this->FechaInicio_curso = null;
		$this->FechaFin_curso = null;
		$this->Fecha_nacimiento = null;
		$this->Costo = null;
		$this->Campo = null;
    }

    public function store()
    {
        $this->validate([
		'id_responsabilidad_social' => 'required',
		'Servicio' => 'required',
		'CursoCapacitacion' => 'required',
		'FechaInicio_curso' => 'required',
		'FechaFin_curso' => 'required',
		'Fecha_nacimiento' => 'required',
		'Costo' => 'required',
		'Campo' => 'required',
        ]);

        Responsabilidadsociale::create([ 
			'id_responsabilidad_social' => $this-> id_responsabilidad_social,
			'Servicio' => $this-> Servicio,
			'CursoCapacitacion' => $this-> CursoCapacitacion,
			'FechaInicio_curso' => $this-> FechaInicio_curso,
			'FechaFin_curso' => $this-> FechaFin_curso,
			'Fecha_nacimiento' => $this-> Fecha_nacimiento,
			'Costo' => $this-> Costo,
			'Campo' => $this-> Campo
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Responsabilidadsociale Successfully created.');
    }

    public function edit($id)
    {
        $record = Responsabilidadsociale::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_responsabilidad_social = $record-> id_responsabilidad_social;
		$this->Servicio = $record-> Servicio;
		$this->CursoCapacitacion = $record-> CursoCapacitacion;
		$this->FechaInicio_curso = $record-> FechaInicio_curso;
		$this->FechaFin_curso = $record-> FechaFin_curso;
		$this->Fecha_nacimiento = $record-> Fecha_nacimiento;
		$this->Costo = $record-> Costo;
		$this->Campo = $record-> Campo;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_responsabilidad_social' => 'required',
		'Servicio' => 'required',
		'CursoCapacitacion' => 'required',
		'FechaInicio_curso' => 'required',
		'FechaFin_curso' => 'required',
		'Fecha_nacimiento' => 'required',
		'Costo' => 'required',
		'Campo' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Responsabilidadsociale::find($this->selected_id);
            $record->update([ 
			'id_responsabilidad_social' => $this-> id_responsabilidad_social,
			'Servicio' => $this-> Servicio,
			'CursoCapacitacion' => $this-> CursoCapacitacion,
			'FechaInicio_curso' => $this-> FechaInicio_curso,
			'FechaFin_curso' => $this-> FechaFin_curso,
			'Fecha_nacimiento' => $this-> Fecha_nacimiento,
			'Costo' => $this-> Costo,
			'Campo' => $this-> Campo
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Responsabilidadsociale Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Responsabilidadsociale::where('id', $id);
            $record->delete();
        }
    }
}
