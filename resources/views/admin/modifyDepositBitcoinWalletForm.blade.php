<form id="bitcoinWalletForm">
    @csrf
    <div class="card ">
        <div class="card-header">
          
                <h3 class="card-title">Add Your Bitcoin address</h3> 
           
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Bitcoin Wallet Address</label>
                <input type="text" name="bitcoinwallet" class="form-control" required>
                <input type="hidden" name="user" class="form-control" value="{{$user}}">
                <input type="hidden" name="operation" class="form-control" value="{{$operation}}">
            </div>
            <div class="btn btn-danger float-left" type="reset">
                Cancel
            </div>
            <div class="btn btn-info float-right" id="bitcoinwalletBtn">
                Submit
            </div>
        </div>
    </div>
</form>
