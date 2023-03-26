<div wire:ignore.selt class="modal fade" id="deleteStudentModal" tabindex="-1" arialabelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="exampleModalLabel">Delete Producto</h5>
 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 </div>
 <div class="modal-body">
 <form>
 <input type="hidden" name="id" wire:model="ids" />
 <label>Desea eliminar el producto?</label>
 </form>
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
 <button type="button" class="btn btnprimary" wire:click.prevent="delete()" data-bs-dismiss="modal">Delete</button>
 </div>
 </div>
 </div>
</div>