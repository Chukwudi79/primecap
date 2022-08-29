<form id="modif">
    @csrf
    <div class="card ">
        <div class="card-header">
            <h4 class="card-title">User: {{$user->fullname}}</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Select the deposit</label>
                <select name="deposit" class="form-control custom-select" required>
                    <option selected disabled>Select a deposit</option>
                    @forelse ($user->deposits as $depo)
                        <option value="{{$depo->id}}">
                             {{ $depo->created_at }}
                             {{ $depo->amount }}
                             {{ $depo->confirmed }}
                             {{ $depo->deposit_request_id }}
                        </option>
                    @empty
                        <span>No deposit request </span>
                    @endforelse
                </select>
            </div>

            <div class="form-group">
                <label>Select the operation</label>
                <select name="operation2" class="form-control custom-select" required>
                    <option selected disabled>Select an operation</option>
                     <option value="9">Modify this deposit</option>
                     
										 <option value="11">Delete deposit</option> </option>
                </select>
            </div>

            <div class="form-group">
                <input type="hidden" name="user" class="form-control" value="{{$user->id}}">
            </div>
            <div class="btn btn-danger float-left" type="reset">
                Cancel
            </div>
            <div class="btn btn-info float-right" id="transactionHistory">
                Submit
            </div>
        </div>
    </div>
</form>






<!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->

<table class="table" style ="color:#fff">
<thead>
    <tr style="color:aqua">
	
        <th scope="col">Deposit request date</th>
        <th scope="col">Amount</th>
        <th scope="col">Deposit status</th>
        <th scope="col">Deposit ID</th>
    </tr>
		</thead>

		<tbody>
    @foreach ($user->deposits as $depo)
		
        <tr scope="row">
            <td>
                {{ $depo->created_at }}
            </td>

            <td>
                {{ $depo->amount }}
            </td>
            <td>
                @if ($depo->confirmed)
                    Confirmed
                @else
                    Not Confirmed
                @endif
            </td>

            <td>
                {{ $depo->deposit_request_id }}
            </td>
        </tr>
    @endforeach
		<tbody>
</table>
