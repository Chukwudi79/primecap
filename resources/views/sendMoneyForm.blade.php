<form id='transactionForm' >
    @csrf
    <h2>Receiver Information  </h2> 
    <script>
        $(document).ready(function() {
  $('#closeTransactionForm').click(function (){
    document.getElementById('transactionForm').style.display = "none";
  });
});
    </script>

    <div>
			  
        <label style="display: none;" for="firstname">Receiver's firstame</label>
            
				   <input style="display: none;" name="firstname" id='firstname' type="text">
        
        <label style="display: none;" for="surname">Receiver's surame</label>
      
        <input style="display: none;" name="surname" id='surname' type="text">
         
        <label  for="account number">Bitcoin Wallet</label>
        <br>
        <input  name="accountNumber" id='accountNumber' type="text">
        <br>
        <label for="amount">Amount</label>
        <br>
        <input name="amount" id='amount' type="text">
       <br>
       <br>
			 <button type="button" id="confirm-transaction" class="btn btn-success">Confirm</button>
			 <button type="button" id="closeTransactionForm" class="btn btn-warning">Close</button>

      <!--   <div  id="confirm-transaction-status" style="background-color:green;" > </div> -->
    </div>
</form>
