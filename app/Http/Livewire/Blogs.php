<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;

class Blogs extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_Blog, $Titulo, $Contenido, $Fecha_publicacion, $Autor;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.blogs.view', [
            'blogs' => Blog::latest()
						->orWhere('id_Blog', 'LIKE', $keyWord)
						->orWhere('Titulo', 'LIKE', $keyWord)
						->orWhere('Contenido', 'LIKE', $keyWord)
						->orWhere('Fecha_publicacion', 'LIKE', $keyWord)
						->orWhere('Autor', 'LIKE', $keyWord)
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
		$this->id_Blog = null;
		$this->Titulo = null;
		$this->Contenido = null;
		$this->Fecha_publicacion = null;
		$this->Autor = null;
    }

    public function store()
    {
        $this->validate([
		'id_Blog' => 'required',
		'Titulo' => 'required',
		'Contenido' => 'required',
		'Fecha_publicacion' => 'required',
		'Autor' => 'required',
        ]);

        Blog::create([ 
			'id_Blog' => $this-> id_Blog,
			'Titulo' => $this-> Titulo,
			'Contenido' => $this-> Contenido,
			'Fecha_publicacion' => $this-> Fecha_publicacion,
			'Autor' => $this-> Autor
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Blog Successfully created.');
    }

    public function edit($id)
    {
        $record = Blog::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_Blog = $record-> id_Blog;
		$this->Titulo = $record-> Titulo;
		$this->Contenido = $record-> Contenido;
		$this->Fecha_publicacion = $record-> Fecha_publicacion;
		$this->Autor = $record-> Autor;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_Blog' => 'required',
		'Titulo' => 'required',
		'Contenido' => 'required',
		'Fecha_publicacion' => 'required',
		'Autor' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Blog::find($this->selected_id);
            $record->update([ 
			'id_Blog' => $this-> id_Blog,
			'Titulo' => $this-> Titulo,
			'Contenido' => $this-> Contenido,
			'Fecha_publicacion' => $this-> Fecha_publicacion,
			'Autor' => $this-> Autor
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Blog Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Blog::where('id', $id);
            $record->delete();
        }
    }
}
