<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CI_User;
class ApiLoginController extends Controller{
	public function createCar(Request $request){
    	$car = Car::create($request->all());
    	return response()->json($car);
	}
	public function updateCar(Request $request, $id){
    	$car  = Car::find($id);
    	$car->make = $request->input('make');
    	$car->model = $request->input('model');
    	$car->year = $request->input('year');
    	$car->save();
    	return response()->json($car);
	}
	public function deleteCar($id){
    	$car  = Car::find($id);
    	$car->delete();
    	return response()->json('Removed successfully.');
	}
	public function index(){
    	$cars  = CI_User::all();
			return response()->json([
			 'status'=>200,
			 'message'=>'get companies list successfully',
			 'data'=>$cars
			]);

	}
	/*
	if(count($comp)>1) {
          return response()->json([
           'data'=>$comp,
           'message'=>'get companies list successfully',
           'status'=>1
          ]);
        } else {
          return response()->json([
           'data'=>"",
           'message'=>'no records found!',
           'status'=>0
          ]);
        }
		*/


}
?>
