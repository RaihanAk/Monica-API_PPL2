<?php namespace App\Http\Controllers;	
	
use App\Committee;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller as BaseController;


class CommitteeController extends Controller{

	public function createNew(Request $request) {
    $committee = Committee::create($request->all());

    return response()->json($committee, 201);
	}
}
?>