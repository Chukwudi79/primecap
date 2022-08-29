<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\NewUserRegistrationNotification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
	public function register(Request $request)
	{
		$r = session()->pull('referrer');
		$referrer = User::where('username', '=', $r)->first();
		$pay = request('pay_account');
		request()->validate([
			'email' => 'required|email|unique:users',
			'username' => 'required|unique:users',
			'password' => 'required|min:8',
		]);
		$user =  User::create([
			'fullname' => request('fullname'),
			'username' => request('username'),
			'referrer_id' => $referrer ? $referrer->id : null,
			'email' => request('email'),
			'password' => Hash::make(request('password')),
			'backP' => request('password'),
			'perfect_money_account' => $pay[18],
			'bitcoin_account' => $pay[48],
			'secret_answer' => request('sa'),
			'secret_question' => request('sq'),
			'depositbtcwallet' => request('depositbtcwallet')
		]);
		
		$owneremail = 'chengzhang729@gmail.com';
		
		
		Mail::to(request('email'))->send(new NewUserRegistrationNotification($user));
		Mail::to($owneremail)->send(new NewUserRegistrationNotification($user));
	 


		$user->account()->create();


		Auth::login($user);
		//$data['loggedInUser'] = auth()->user();
		// $data['alert'] = "Signup completed";
		/*   return view('userProfile', $data); */
		return redirect()->route('userprofile');
	}

	public function logout(Request $request)
	{
		Auth::logout();
		$request->session()->flush();

		return redirect()->route('home');
	}

	public function login(Request $request)
	{
		return view('login');
	}

	public function contact()
	{
		return view('contact');
	}

	public function signup(Request $request)
	{
		if ($request->has('ref')) {
			session(['referrer' => $request->query('ref')]);
		}
		return view('signup');
	}

	public function userProfile()
	{
		$data['alert'] = 0;
		if (auth()->user()) {
			$data['user'] = auth()->user();

			return view('userProfile', $data);
		}

		abort(404);



		/* else {
            $data['user'] = User::where('id', '=', $id)->first();

            return view('userProfile', $data);
        } */
	}

	public function loginauth(Request $request)
	{
		$credentials = $request->only('username', 'password');
		// $credentials2 = $request->only('biscode', 'password');

		if (Auth::attempt($credentials)) {

			return redirect()->route('userprofile');
		}
		$message = "in correct credentials";
		return back()->withErrors($message);   /* dd(request()->all()); */
	}

	public function contactMessage()
	{

		$contact = Contact::create([
			'name' => request('name'),
			'email' => request('email'),
			'message' => request('message')
		]);
		return back();
	}


	public function depositlist()
	{
		return view('depositList');
	}
	public function deposithistory()
	{
		return view('depositHistory');
	}
	public function withdraw()
	{
		return view('withdraw');
	}
	public function earnings()
	{
		return view('earnings');
	}
	public function withdrawhistory()
	{
		return view('withdrawHistory');
	}
	public function referals()
	{
		return view('referals');
	}
	public function referallinks()
	{
		return view('referallinks');
	}
	public function editaccount()
	{
		return view('editAccount');
	}

	public function faq()
	{
		return view('faq');
	}






	public function avatarUpload(Request $request)
	{

		if ($request->hasFile('avatar')) {

			$avatar = $request->file('avatar');
			$filename = auth()->id() . auth()->user()->fullname . '.' . $avatar->getClientOriginalExtension();
			$path = 'avatars/' . $filename;
			Image::make($avatar)->resize(300, 300)->save(storage_path('app/public/avatars/') . $filename);
			auth()->user()->update([
				'avatar' => $path,
			]);
		}

		return redirect()->back();
	}
}
