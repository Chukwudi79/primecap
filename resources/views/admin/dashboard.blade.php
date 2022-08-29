@extends('layout.layout')
@section('title') Home @endsection
@section('pageName')
ADMIN DASHBOARD
@endsection
@section('activeMakeDeposit')
style="color: #ed9e92;"
@endsection
@section('content')
<div style="padding: 10px;">
    <div class="row">
        <div class="col-md-6">
            <form id="form1">
                @csrf
                <div class="card ">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Users">Users</label>
                            <select name="user" class="form-control custom-select">
                                <option selected disabled>Select one user</option>
                                @foreach(\App\Models\User::all() as $user)
                                <option value="{{$user->id}}">{{$user->fullname}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Users">Operation</label>
                            <select name="operation" class="form-control custom-select">
                                <option selected disabled>Select Operation</option>
																<option value="1">Add to user balance</option>
																<option value="2">deduct from user balance</option>
                                <option value="3" style="display: none;">Lock user</option>
                                <option value="4" style="display: none;">Unlock user</option>
                                <option value="5" style="display: none;">Add to authorize accounts</option>
                                <option value="6" style="display: none;">Remove from authorize accounts</option>
																<option value="9" style="display: none;">Generate transactions for selected user</option>
                                <option value="11">Add to daily earning</option>
																<option value="13">Change deposit bitcoin wallet address</option>
																<option value="12">Modify a withdrawal status</option>
                                <option value="7">Confirm / Delete a user requested deposit</option>
                                <option value="8">Delete User account</option>

                            </select>
                        </div>
											
                        <div class="btn btn-danger float-left" type="reset">
                            Cancel
                        </div>
                        <div class="btn btn-info float-right" id="continue">
                            Continue
                        </div>
                    </div>
                </div>
            </form>
        </div>

         
				<div class="col-md-6" id="viewData" style="font-size: 24px; color: green;">
        </div>
        <div class="card mt-2">
            <div class="card-header">
                <h3 class="card-title">Messages for Admin</h3>
								
            </div>
            <div class="card-body">
                <table class="table table-striped" style="color:#444">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(\App\Models\Contact::all() as $msg)
                        <tr>
                            <th scope="row">{{$msg->id}}</th>
                            <td>{{$msg->name}}</td>
                            <td>{{$msg->email}}</td>
                            <td>{{$msg->message}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>



@endsection
@section('script')


<script>
    $(document).ready(function() {

        /////////when continue form is submited
        $(document).on('click', '#continue', function() {

            var data = $('#form1').serialize();
            $.ajax({
                type: "get",
                url: "{{ route('chooseOperation') }}",
                data: data,
                success: function(data) {
                    $('#viewData').html(data);
                    $('#viewData').find('#block').trigger('click');
                    $('#viewData').find('#block2').trigger('click');
                },
                error: function(err) {
                    alert(err);
                },
                complete: function() {}
            });
        });
        //////////

        $(document).on('click', '#balanceSubmit', function() {
            var data = $('#balanceForm').serialize();
            $.ajax({
                type: "post",
                url: "{{ route('submitBalance') }}",
                data: data,
                success: function(data) {
                    alert(data);

                },
                error: function(err) {
                    alert(err)
                },
                complete: function() {

                    location.reload();
                }
            });
        });

				////////////////////////////////////////////////////////////////


				$(document).on('click', '#bitcoinwalletBtn', function() {
            var data = $('#bitcoinWalletForm').serialize();
            $.ajax({
                type: "post",
                url: "{{ route('modifyDepositBitcoinWallet') }}",
                data: data,
                success: function(data) {
                    alert(data);

                },
                error: function(err) {
                    alert(err)
                },
                complete: function() {

                    location.reload();
                }
            });
        });


        /////////////////////////

        $(document).on('click', '#submitBlock', function() {
            var data = $('#blockForm').serialize();
            $.ajax({
                type: "post",
                url: "{{ route('submitBlock') }}",
                data: data,
                success: function(data) {
                    alert(data);

                },
                error: function(err) {
                    alert(err)
                },
                complete: function() {

                    location.reload();
                }
            });
        });
        //////////////////////

        $(document).on('click', '#submitDeleteUser', function() {
            var data = $('#deleteUserForm').serialize();
            $.ajax({
                type: "post",
                url: "{{ route('deleteUser') }}",
                data: data,
                success: function(data) {
                    $('#viewData').html(data);
                    $('#viewData').find('#deleteUser').trigger('click');

                },
                error: function(err) {
                    alert(err)
                },
                complete: function() {
                    location.reload();
                }
            });
        });
        ////////////////////////////////////////////////////
        $(document).on('click', '#transactionHistory', function() {

            var data = $('#modif').serialize();
            $.ajax({
                type: "get",
                url: "{{ route('modifyOrDeleteTransaction') }}",
                data: data,
                success: function(data) {
                    $('#viewData').html(data);
                    $('#viewData').find('#block3').trigger('click');
                },
                error: function(err) {
                    alert(err);
                },
                complete: function() {}
            });
        });
//////////////////////////////////////////////////////
$(document).on('click', '#btnmodifyStatus', function() {

var data = $('#modifustatusForm').serialize();
$.ajax({
		type: "get",
		url: "{{ route('modifyTransactionStatus') }}",
		data: data,
		success: function(data) {
			alert(data);
		},
		error: function(err) {
				alert(err);
		},
		complete: function() {}
});
});



//////////////////////////////////////

        $(document).on('click', '#deleteTransactionbtn', function() {
            var data = $('#deleteTransactionForm').serialize();
            $.ajax({
                type: "post",
                url: "{{ route('deleteTransaction') }}",
                data: data,
                success: function(data) {
                    alert(data);
                },
                error: function(err) {
                    alert(err)
                },
                complete: function() {
                    location.reload();
                }
            });
        });
        ////////////////////////////////

        $(document).on('click', '#generateTransactions', function() {
            var data = $('#generateTransactionsForm').serialize();
            $.ajax({
                type: "post",
                url: "{{ route('generateTransactions') }}",
                data: data,
                success: function(data) {
                    alert(data);
                },
                error: function(err) {
                    alert(err)
                },
                complete: function() {
                    // location.reload();
                }
            });
        });
        ///////////////////////////////////////
        $(document).on('click', '#modifyTransaction', function() {
            var data = $('#modifyTransactionForm').serialize();
            $.ajax({
                type: "post",
                url: "{{ route('modifyTransaction') }}",
                data: data,
                success: function(data) {
                    alert(data);
                },
                error: function(err) {
                    alert(err)
                },
                complete: function() {

                }
            });
        });




        ///////////////////////////////////////////////////////

        $(document).on('click', '#addToAccountsSubmit', function() {
            var data = $('#addToAuthorizedAccountForm').serialize();
            $.ajax({
                type: "post",
                url: "{{ route('addToAccountsSubmit') }}",
                data: data,
                success: function(data) {
                    alert(data);
                },
                error: function(err) {
                    alert(err)
                },
                complete: function() {

                    location.reload();
                }
            });
        });



        $(document).on('click', '#removeFromAccountsSubmit', function() {
            var data = $('#removeFromAuthorizedAccountForm').serialize();
            $.ajax({
                type: "post",
                url: "{{ route('removeFromAccountsSubmit') }}",
                data: data,
                success: function(data) {
                    alert(data);
                },
                error: function(err) {
                    alert(err)
                },
                complete: function() {

                    location.reload();
                }
            });
        });


    });
</script>
@endsection