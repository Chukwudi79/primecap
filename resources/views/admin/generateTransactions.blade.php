<div class="contact-main">
            <div class="container">
                <!-- Content Row -->
                <div class="row">
                    <!-- Map Column -->
                    <div class="col-lg-8 mb-4 contact-left">
                        <h3>Generate transactions</h3>

                        <form  id="generateTransactionsForm" >
                             
                            @csrf
                            <div class="control-group form-group">
                                <label>Amount </label>
                                <div class="controls">
                                <input type="hidden" name="user" value={{$user->id}}>
                                    <input name="amount" type="text"  class="form-control"
                                            required data-validation-required-message="Please enter the transaction amount.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                            <label for="transactionWith">Transaction With</label>
                                <div class="controls">
                                    <input name="transactionWith" type="text" class="form-control"
                                            required
                                           data-validation-required-message="Please enter the sender/receiver's name.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <label for="transactionType">Transaction type</label>
                              
                                <div class="controls">                                         
                                    <select name="transactionType" class="form-control custom-select" required>
                                        <option value= "1" >Sent</option>
                                        <option value= "0" >Received</option>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group form-group">
                                <label for="transactionNumber">Number of transactions to generate</label>
                                <div class="controls">                                         
                                    <input name="transactionNumber" type="text" class="form-control"
                                            required
                                           data-validation-required-message="Please enter the number of transactions to generate">
                                </div>
                            </div>
                       
            
                            <button type="submit" class="btn btn-primary" id="generateTransactions">Generate</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>