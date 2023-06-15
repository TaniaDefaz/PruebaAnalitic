<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Noticia;

class Noticias extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_Noticias, $Novedades, $Empleo_red_profesional, $Figback_testimonios, $Opciones;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.noticias.view', [
            'noticias' => Noticia::latest()
						->orWhere('id_Noticias', 'LIKE', $keyWord)
						->orWhere('Novedades', 'LIKE', $keyWord)
						->orWhere('Empleo_red_profesional', 'LIKE', $keyWord)
						->orWhere('Figback_testimonios', 'LIKE', $keyWord)
						->orWhere('Opciones', 'LIKE', $keyWord)
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
		$this->id_Noticias = null;
		$this->Novedades = null;
		$this->Empleo_red_profesional = null;
		$this->Figback_testimonios = null;
		$this->Opciones = null;
    }

    public function store()
    {
        $this->validate([
		'id_Noticias' => 'required',
		'Novedades' => 'required',
		'Empleo_red_profesional' => 'required',
		'Figback_testimonios' => 'required',
		'Opciones' => 'required',
        ]);

        Noticia::create([ 
			'id_Noticias' => $this-> id_Noticias,
			'Novedades' => $this-> Novedades,
			'Empleo_red_profesional' => $this-> Empleo_red_profesional,
			'Figback_testimonios' => $this-> Figback_testimonios,
			'Opciones' => $this-> Opciones
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Noticia Successfully created.');
    }

    public function edit($id)
    {
        $record = Noticia::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_Noticias = $record-> id_Noticias;
		$this->Novedades = $record-> Novedades;
		$this->Empleo_red_profesional = $record-> Empleo_red_profesional;
		$this->Figback_testimonios = $record-> Figback_testimonios;
		$this->Opciones = $record-> Opciones;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_Noticias' => 'required',
		'Novedades' => 'required',
		'Empleo_red_profesional' => 'required',
		'Figback_testimonios' => 'required',
		'Opciones' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Noticia::find($this->selected_id);
            $record->update([ 
			'id_Noticias' => $this-> id_Noticias,
			'Novedades' => $this-> Novedades,
			'Empleo_red_profesional' => $this-> Empleo_red_profesional,
			'Figback_testimonios' => $this-> Figback_testimonios,
			'Opciones' => $this-> Opciones
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Noticia Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Noticia::where('id', $id);
            $record->delete();
        }
    }
}
