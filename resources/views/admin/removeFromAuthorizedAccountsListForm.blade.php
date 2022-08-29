<form id="removeFromAuthorizedAccountForm">
    @csrf
    <div class="card ">
        <div class="card-header">
            <h4 class="card-title">Remove Authorized Accounts from user: {{$user->name}} {{$user->surname}}</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Account to remove</label>
                <select name="account" class="form-control custom-select" required>
                    <option selected disabled>Select an account to remove</option>
                    @forelse($account->authorizeReceivers as $receiver)
                        <option value="{{$receiver->id}}">{{$receiver->authorize_receivers}}</option>
                    @empty
                        <span>No Authorized Accounts yet</span>
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="user" class="form-control" value="{{$user->id}}">
            </div>
            <div class="btn btn-danger float-left" type="reset">
                Cancel
            </div>
            <div class="btn btn-info float-right" id="removeFromAccountsSubmit">
                Submit
            </div>
        </div>
    </div>
</form>
