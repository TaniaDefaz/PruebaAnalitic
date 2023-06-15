<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Curso;

class Cursos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_Cursos, $Nombre_curso, $Descripcion_curso, $Duracion_curso, $Fecha_curso, $Fecha_Fin_curso, $Instructor_curso, $Lugar_curso, $Precio_curso, $CuposMaximos_curso, $CuposDisponibles_curso;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.cursos.view', [
            'cursos' => Curso::latest()
						->orWhere('id_Cursos', 'LIKE', $keyWord)
						->orWhere('Nombre_curso', 'LIKE', $keyWord)
						->orWhere('Descripcion_curso', 'LIKE', $keyWord)
						->orWhere('Duracion_curso', 'LIKE', $keyWord)
						->orWhere('Fecha_curso', 'LIKE', $keyWord)
						->orWhere('Fecha_Fin_curso', 'LIKE', $keyWord)
						->orWhere('Instructor_curso', 'LIKE', $keyWord)
						->orWhere('Lugar_curso', 'LIKE', $keyWord)
						->orWhere('Precio_curso', 'LIKE', $keyWord)
						->orWhere('CuposMaximos_curso', 'LIKE', $keyWord)
						->orWhere('CuposDisponibles_curso', 'LIKE', $keyWord)
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
		$this->id_Cursos = null;
		$this->Nombre_curso = null;
		$this->Descripcion_curso = null;
		$this->Duracion_curso = null;
		$this->Fecha_curso = null;
		$this->Fecha_Fin_curso = null;
		$this->Instructor_curso = null;
		$this->Lugar_curso = null;
		$this->Precio_curso = null;
		$this->CuposMaximos_curso = null;
		$this->CuposDisponibles_curso = null;
    }

    public function store()
    {
        $this->validate([
		'id_Cursos' => 'required',
		'Nombre_curso' => 'required',
		'Descripcion_curso' => 'required',
		'Duracion_curso' => 'required',
		'Fecha_curso' => 'required',
		'Fecha_Fin_curso' => 'required',
		'Instructor_curso' => 'required',
		'Lugar_curso' => 'required',
		'Precio_curso' => 'required',
		'CuposMaximos_curso' => 'required',
		'CuposDisponibles_curso' => 'required',
        ]);

        Curso::create([ 
			'id_Cursos' => $this-> id_Cursos,
			'Nombre_curso' => $this-> Nombre_curso,
			'Descripcion_curso' => $this-> Descripcion_curso,
			'Duracion_curso' => $this-> Duracion_curso,
			'Fecha_curso' => $this-> Fecha_curso,
			'Fecha_Fin_curso' => $this-> Fecha_Fin_curso,
			'Instructor_curso' => $this-> Instructor_curso,
			'Lugar_curso' => $this-> Lugar_curso,
			'Precio_curso' => $this-> Precio_curso,
			'CuposMaximos_curso' => $this-> CuposMaximos_curso,
			'CuposDisponibles_curso' => $this-> CuposDisponibles_curso
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Curso Successfully created.');
    }

    public function edit($id)
    {
        $record = Curso::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_Cursos = $record-> id_Cursos;
		$this->Nombre_curso = $record-> Nombre_curso;
		$this->Descripcion_curso = $record-> Descripcion_curso;
		$this->Duracion_curso = $record-> Duracion_curso;
		$this->Fecha_curso = $record-> Fecha_curso;
		$this->Fecha_Fin_curso = $record-> Fecha_Fin_curso;
		$this->Instructor_curso = $record-> Instructor_curso;
		$this->Lugar_curso = $record-> Lugar_curso;
		$this->Precio_curso = $record-> Precio_curso;
		$this->CuposMaximos_curso = $record-> CuposMaximos_curso;
		$this->CuposDisponibles_curso = $record-> CuposDisponibles_curso;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_Cursos' => 'required',
		'Nombre_curso' => 'required',
		'Descripcion_curso' => 'required',
		'Duracion_curso' => 'required',
		'Fecha_curso' => 'required',
		'Fecha_Fin_curso' => 'required',
		'Instructor_curso' => 'required',
		'Lugar_curso' => 'required',
		'Precio_curso' => 'required',
		'CuposMaximos_curso' => 'required',
		'CuposDisponibles_curso' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Curso::find($this->selected_id);
            $record->update([ 
			'id_Cursos' => $this-> id_Cursos,
			'Nombre_curso' => $this-> Nombre_curso,
			'Descripcion_curso' => $this-> Descripcion_curso,
			'Duracion_curso' => $this-> Duracion_curso,
			'Fecha_curso' => $this-> Fecha_curso,
			'Fecha_Fin_curso' => $this-> Fecha_Fin_curso,
			'Instructor_curso' => $this-> Instructor_curso,
			'Lugar_curso' => $this-> Lugar_curso,
			'Precio_curso' => $this-> Precio_curso,
			'CuposMaximos_curso' => $this-> CuposMaximos_curso,
			'CuposDisponibles_curso' => $this-> CuposDisponibles_curso
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Curso Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Curso::where('id', $id);
            $record->delete();
        }
    }
}
