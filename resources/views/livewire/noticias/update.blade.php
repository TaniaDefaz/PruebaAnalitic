<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Noticia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="id_Noticias"></label>
                <input wire:model="id_Noticias" type="text" class="form-control" id="id_Noticias" placeholder="Id Noticias">@error('id_Noticias') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Novedades"></label>
                <input wire:model="Novedades" type="text" class="form-control" id="Novedades" placeholder="Novedades">@error('Novedades') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Empleo_red_profesional"></label>
                <input wire:model="Empleo_red_profesional" type="text" class="form-control" id="Empleo_red_profesional" placeholder="Empleo Red Profesional">@error('Empleo_red_profesional') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Figback_testimonios"></label>
                <input wire:model="Figback_testimonios" type="text" class="form-control" id="Figback_testimonios" placeholder="Figback Testimonios">@error('Figback_testimonios') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Opciones"></label>
                <input wire:model="Opciones" type="text" class="form-control" id="Opciones" placeholder="Opciones">@error('Opciones') <span class="error text-danger">{{ $message }}</span> @enderror
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
