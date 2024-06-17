<!-- Modal trigger button -->
<button
    type="button"
    class="btn btn btn-sm btn-outline-secondary white-text"
    data-bs-toggle="modal"
    data-bs-target="#modal-{{$photo->id}}"
>
   Delete
</button>

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div
    class="modal fade"
    id="modal-{{$photo->id}}"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    
    role="dialog"
    aria-labelledby="modal-{{$photo->id}}"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-{{$photo->id}}">
                    Bon Voyage awesome <span class="text-primary">{{$photo->name}}</span>!
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body"> You are about to delete this beautiful memory forever and ever, are you really sure? </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    no...
                </button>
                
                <form action="{{route('admin.photos.destroy', $photo)}}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Yes, bye bye!
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
</div>



