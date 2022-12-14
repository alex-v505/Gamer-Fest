<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Inscripcion Equ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="id_equ"></label>
                <input wire:model="id_equ" type="text" class="form-control" id="id_equ" placeholder="Id Equ">@error('id_equ') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="id_jue"></label>
                <input wire:model="id_jue" type="text" class="form-control" id="id_jue" placeholder="Id Jue">@error('id_jue') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="precio_ins_equ"></label>
                <input wire:model="precio_ins_equ" type="text" class="form-control" id="precio_ins_equ" placeholder="Precio Ins Equ">@error('precio_ins_equ') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="pago_ins_equ"></label>
                <input wire:model="pago_ins_equ" type="text" class="form-control" id="pago_ins_equ" placeholder="Pago Ins Equ">@error('pago_ins_equ') <span class="error text-danger">{{ $message }}</span> @enderror
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
