<?php namespace App\Http\Controllers;	
	
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller as BaseController;


class UserController extends Controller{
		
	public function getUser($id) {
		$user = User::where('id_user', $id)->get();
		return response()->json($user, 200);
  }

  public function getUserAll() {
		$user = User::all();
		return response()->json($user, 200);
  }
}
?>