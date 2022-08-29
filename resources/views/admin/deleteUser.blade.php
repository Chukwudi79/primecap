<!-- Button trigger modal -->
<button style="display: none" type="button" id="block2" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop2">
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel2">Delete User: {{$user->name}} {{$user->surname}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are You sure you want to delete this user?
            </div>
            <form id="deleteUserForm">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="user" class="form-control" value="{{$user->id}}">
                </div>
            </form>

            <div class="modal-footer">
                <div type="button" class="btn btn-secondary float-left" data-bs-dismiss="modal">Cancel</div>
                <div type="button" id="submitDeleteUser" class="btn btn-primary float-right">Yes</div>
            </div>
        </div>
    </div>
</div>





 