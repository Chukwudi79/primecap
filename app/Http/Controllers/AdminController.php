<?php

namespace App\Http\Controllers;

use App\Events\DepositConfirmed;
use App\Models\Account;
use Carbon\Carbon;
use App\Models\Deposit;
use App\Models\Transaction;
use App\Models\Authorizereceiver;
use App\Models\User;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{

	public function dashboard()
	{
		return view('admin.dashboard');
	}

	public function operationVerify()
	{
		$data['user'] = request('user');
		$data['operation'] = request('operation');
		$operation = request('operation');
		if ($operation == 1 or $operation == 2) { // 1 = Increase Balance is selected, 2 = decrease Balance is selected
			return view('admin.increaseOrDecreaseBalanceForm', $data);
		}

		if ($operation == 3 or $operation == 4) { // 3 = Block User is selected, 4 = Unblock is selected
			$id = request('user');
			$data['user'] = User::find($id);
			return view('admin.blockOrUnblockUserForm', $data);
		}

		if ($operation == 5) { // 5 = to add authorized account to the list
			$id = request('user');
			$data['user'] = User::find($id);
			return view('admin.addToAuthorizedAccountsListForm', $data);
			//return view('admin.try', $data);
		}

		if ($operation == 6) { // 6 = to add authorized account to the list
			$id = request('user');
			$data['user'] = User::find($id);
			$user = User::find($id);
			$id2 = $user->account->id;
			$data['account'] = Account::find($id2);
			return view('admin.removeFromAuthorizedAccountsListForm', $data);
			// return view('admin.try', $data);
		}

		if ($operation == 7) { // 7 = to modify/delete usere's transaction history

			$id = request('user');
			$data['user'] = User::find($id);
			return view('admin.transactionHistory', $data);
		}

		if ($operation == 8) { // 8 = to delete user account
			$id = request('user');
			$data['user'] = User::find($id);

			return view('admin.deleteUser', $data);
		}

		if ($operation == 9) { // 5 = to add authorized account to the list
			$id = request('user');
			$data['user'] = User::find($id);
			return view('admin.generateTransactions', $data);
		}

		if ($operation == 11) { // 11 = to add daily earning and increase account balance
			// $user = User::find(request(user)); //where('id', '=', request('user'));
			//return "User= " . request('user') . " Operation= " . request('operation') . " amount= " . request('amount');

			$id = request('user');
			$user = User::find($id);

			if ($user->account->active_deposit < 1000000000) {
				$activeDep = $user->account->active_deposit;
				$percent = $activeDep * 0.01;

				$user->account()->update([
					'earned_total' => $user->account->earned_total +  $percent,
					'account_balance' => $user->account->account_balance + $percent
				]);

				/* $msg = $percent . " was successfully added"; */
			} /* elseif (request('operation') == 2) {
				$user->account->update([
					'active_deposit' => $user->account->active_deposit - request('amount')
				]);
				$msg = request('amount') . " was successfully deducted";
			} */
			/* return $msg; */
			return ($percent . "  was successfully added");
		}


		if ($operation == 12) { // 7 = to modify/delete usere's transaction history

			$id = request('user');
			$data['user'] = User::find($id);
			//	return("ok");
			return view('admin.modifyStatus', $data);
		}

		if ($operation == 13) { // 1 = Increase Balance is selected, 2 = decrease Balance is selected
			return view('admin.modifyDepositBitcoinWalletForm', $data);
		}
	}

	

	public function submitBalance()
	{
		// $user = User::find(request(user)); //where('id', '=', request('user'));
		//return "User= " . request('user') . " Operation= " . request('operation') . " amount= " . request('amount');

		$id = request('user');
		$user = User::find($id);
		if (request('operation') == 1) {
			$user->account()->update([
				'active_deposit' => $user->account->active_deposit + request('amount')
			]);
			$msg = request('amount') . " was successfully added";
		} elseif (request('operation') == 2) {
			$user->account->update([
				'active_deposit' => $user->account->active_deposit - request('amount')
			]);
			$msg = request('amount') . " was successfully deducted";
		}
		return $msg;
	}

	/* 	public function submitBlock()
	{
		//return "User= " . request('user') . " Operation= " . request('operation');
		// dd();
		$id = request('user');
		$operation = request('operation');
		$user = User::find($id);
		if ($operation == 3) {
			$user->account->update([
				'locked' => 1
			]);
			$msg = $user->name . " " . $user->surname . " has been blocked";
		} elseif ($operation == 4) {
			$user->account->update([
				'locked' => 0
			]);
			$msg = $user->name . " " . $user->surname . " has been Unblocked";
		}
		return $msg;
	} */



	

	public function modifyDepositBitcoinWallet()
	{
		// $user = User::find(request(user)); //where('id', '=', request('user'));
		//return "User= " . request('user') . " Operation= " . request('operation') . " amount= " . request('amount');

		$id = request('user');
		$user = User::find($id);
		if (request('operation') == 13) {
			$user->update([
				'depositbtcwallet' => request('bitcoinwallet')
			]);
			$msg = request('amount') . "Bitcoin wallet address was added successfully ";
		} 
		return $msg;
	}

	public function deleteUser()
	{
		$id = request('user');
		$user = User::find($id);
		$user->delete();
		$msg = $user->name . " " . $user->surname . "account has been deleted.";
		return $msg;
	}

	/* 	public function addToAccountsList()
	{
		$id = request('user');
		$accountToAdd = request('account');
		$user = User::find($id);
		$id2 = $user->account->id;
		$ok = Account::find($id2)->authorizeReceivers()->create([
			'authorize_receivers' => $accountToAdd
		]);
		$msg = "Account added to " . $user->fullname . " " . " successfully";
		return $msg;
	} */


/* 
	public function removeFromAuthorizeAccounts()
	{
		// return "User= " . request('user') . " Operation= " . request('operation') . " account= " . request('account');
		$id = request('account');
		$accountToRemove = Authorizereceiver::find($id);
		$accountToRemove->delete();
		$msg = "Account Removed successfully";
		return $msg;
	} */

	public function modifyOrDeleteTransaction()
	{

		$depositId = request('deposit');
		$operation2 = request('operation2');
		if ($operation2 == 9) {
			$data['user'] = request('user');
			$data['operation2'] = 9; ///the selected operation is delete so the returned value will be alerted
			$data['deposit'] = Deposit::find($depositId);
			return view('admin.modifyTransaction', $data);
		} elseif ($operation2 == 10) {
			$data['operation2'] = 10; ///the selected operation is modify so the retured value will be displayed as form
			$data['deposit'] = Deposit::find($depositId);
			return view('admin.modifyTransaction', $data);
		}elseif ($operation2 == 11) {
			$id = request('deposit');
			$deposit = Deposit::find($id);
			$deposit->delete();
		;
			return "Deposit deleted successfully";
		}

	}



	public function modifyTransactionStatus()
	{

		$transactionId = request('transaction');
		$transaction = Transaction::find($transactionId);
		$operation2 = request('operation2');
		if ($operation2 == 10) {
			$transaction->update([
				'is_sent' => true,
			]);
			/* return view('admin.modifyStatus', $data); */
		} elseif ($operation2 == 9) {
			$transaction->update([
				'is_sent' => false,

			]);
		}
		return "Modified";
	}

/* 	public function deleteTransaction()
	{
		$id = request('deposit');
		$deposit = Deposit::find($id);
		$deposit->delete();
		$msg = "Deposit deleted successfully";
		return $msg;
	}
 */
	public function modifyTransaction()
	{
		$id = request('depositId');
		$deposit = Deposit::find($id);
		$type = request('depositType');
		$operation2 = request('operation2');
		$idUser = request('user');
	 	$user = User::find($idUser);
		if ($type == 1 ) {
			$deposit->update([
				'confirmed' => true,
			]);
			$user->account()->update([
				'active_deposit' => $user->account->active_deposit + request('depositAmount')
			]);
		//	$msg = request('amount') . " was successfully added";

			/* event(new DepositConfirmed($deposit)); */
			return "Deposit is confirmed successfully";
		}elseif($type == 0) {
			$deposit->update([
				'confirmed' => false,
			]);
			$user->account()->update([
				'active_deposit' => $user->account->active_deposit - request('depositAmount')
			]);
			return "Deposit has successfully set to not confirmed  ";
		} 
	}
	/* 
	public function generateTransactions()
	{
		$id = request('user');
		$num = request('transactionNumber');
		$user = User::find($id);
		for ($i = 0; $i < $num; $i++) {
			$user->transactions()->create([
				'amount' => request('amount'),
				'is_sent' => request('transactionType'),
				'transaction_with' => request('transactionWith'),
				'date_time' => "yguguigug"
			]);
		}
		$msg = "Transactions Generated successfuly";
		return $msg;
	} */
}
