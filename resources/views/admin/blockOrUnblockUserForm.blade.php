<!-- Button trigger modal -->
<button style="display: none" type="button" id="block" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Block User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if($operation == 3)
                Are You sure you want to lock this user's account: {{$user->name}} {{$user->surname}}?
                @else
                Are You sure you want to unlock this user's account: {{$user->name}} {{$user->surname}}?
            @endif
            </div>
            <form id="blockForm">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="user" class="form-control" value="{{$user->id}}">
                    <input type="hidden" name="operation" class="form-control" value="{{$operation}}">
                </div>
            </form>

            <div class="modal-footer">
                <div type="button" class="btn btn-secondary float-left" data-bs-dismiss="modal">Cancel</div>
                <div type="button" id="submitBlock" class="btn btn-primary float-right">Yes</div>
            </div>
        </div>
    </div>
</div>
