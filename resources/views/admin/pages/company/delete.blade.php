 <div class="modal fade" id="delete-company{{ $company->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </button>
         </div>
         <div class="modal-body">
            Are you sure you want to delete this Company?
            <form method="POST" action="{{ route('admin.company.delete', $company->id) }}">
                @csrf
                @method("DELETE")
            </div>
         <div class="modal-footer">
             <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
             <button type="submit" class="btn btn-primary">Delete</button>
            </form>
         </div>
     </div>
 </div>
</div>
