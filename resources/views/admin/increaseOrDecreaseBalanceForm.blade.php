<form id="balanceForm">
    @csrf
    <div class="card ">
        <div class="card-header">
            @if($operation == 1)
                <h3 class="card-title">Increase Balance</h3>
            @else
                <h3 class="card-title">Deduct From Balance</h3>
            @endif
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Amount</label>
                <input type="text" name="amount" class="form-control" required>
                <input type="hidden" name="user" class="form-control" value="{{$user}}">
                <input type="hidden" name="operation" class="form-control" value="{{$operation}}">
            </div>
            <div class="btn btn-danger float-left" type="reset">
                Cancel
            </div>
            <div class="btn btn-info float-right" id="balanceSubmit">
                Submit
            </div>
        </div>
    </div>
</form>
