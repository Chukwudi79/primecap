<form id="addToAuthorizedAccountForm">
    @csrf
    <div class="card ">
        <div class="card-header">
            <h3 class="card-title">Add Authorized Accounts to user: {{$user->name}} {{$user->surname}}</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Amount to add</label>
                <input type="text" name="account" class="form-control" required>
                <input type="hidden" name="user" class="form-control" value="{{$user->id}}">
                <input type="hidden" name="operation" class="form-control" value="{{$operation}}">
            </div>
            <div class="btn btn-danger float-left" type="reset">
                Cancel
            </div>
            <div class="btn btn-info float-right" id="addToAccountsSubmit">
                Submit
            </div>
        </div>
    </div>
</form>
<ol class="list-group list-group-numbered">

    <p style="margin-top: 20px"> Bellow are the list of authorized account</p>
    @forelse($user->account->authorizeReceivers as $account)
        <li class="list-group-item">{{$account->authorize_receivers}}</li>
    @empty
        No Authorize Accounts Found.
    @endforelse
</ol>
