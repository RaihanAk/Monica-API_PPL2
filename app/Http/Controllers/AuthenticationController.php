<?php namespace App\Http\Controllers;	
	
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller as BaseController;


class AuthenticationController extends Controller{
		
	public function authenticate(Request $request) {
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required'
		]);
		
		$user = User::where('email', $request->input('email'))->first();

		// echo Hash::make($request->input('password')); //! Password Hashing
		if (Hash::check($request->input('password'), optional($user)->password)){
			
			// $apikey = base64_encode(str_random(40));
			User::where('email', $request->input('email'));
			return response()->json([
				'status' => 'success',
				'id' => $user->id_user,
				'url_foto' => $user->foto,
				'username' => $user->username,
				'email' => $user->email,
			]);
		} else {
			return response()->json(['status' => 'fail'],401);
		}
	}

	public function signup(Request $request) {

		$this->validate($request, [
			'email' => 'required|email|unique:tbl_user',
			'password' => 'required'
			//Todo: Add more later
		]);

		$request["password"] = Hash::make($request->input('password'));
		
		$user = User::create($request->all());

		return response()->json($user, 201);
	}
}
?>