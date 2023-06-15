<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Curso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="id_Cursos"></label>
                <input wire:model="id_Cursos" type="text" class="form-control" id="id_Cursos" placeholder="Id Cursos">@error('id_Cursos') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Nombre_curso"></label>
                <input wire:model="Nombre_curso" type="text" class="form-control" id="Nombre_curso" placeholder="Nombre Curso">@error('Nombre_curso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Descripcion_curso"></label>
                <input wire:model="Descripcion_curso" type="text" class="form-control" id="Descripcion_curso" placeholder="Descripcion Curso">@error('Descripcion_curso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Duracion_curso"></label>
                <input wire:model="Duracion_curso" type="text" class="form-control" id="Duracion_curso" placeholder="Duracion Curso">@error('Duracion_curso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fecha_curso"></label>
                <input wire:model="Fecha_curso" type="text" class="form-control" id="Fecha_curso" placeholder="Fecha Curso">@error('Fecha_curso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fecha_Fin_curso"></label>
                <input wire:model="Fecha_Fin_curso" type="text" class="form-control" id="Fecha_Fin_curso" placeholder="Fecha Fin Curso">@error('Fecha_Fin_curso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Instructor_curso"></label>
                <input wire:model="Instructor_curso" type="text" class="form-control" id="Instructor_curso" placeholder="Instructor Curso">@error('Instructor_curso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Lugar_curso"></label>
                <input wire:model="Lugar_curso" type="text" class="form-control" id="Lugar_curso" placeholder="Lugar Curso">@error('Lugar_curso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Precio_curso"></label>
                <input wire:model="Precio_curso" type="text" class="form-control" id="Precio_curso" placeholder="Precio Curso">@error('Precio_curso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="CuposMaximos_curso"></label>
                <input wire:model="CuposMaximos_curso" type="text" class="form-control" id="CuposMaximos_curso" placeholder="Cuposmaximos Curso">@error('CuposMaximos_curso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="CuposDisponibles_curso"></label>
                <input wire:model="CuposDisponibles_curso" type="text" class="form-control" id="CuposDisponibles_curso" placeholder="Cuposdisponibles Curso">@error('CuposDisponibles_curso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
