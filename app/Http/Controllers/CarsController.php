<?php

namespace Kidiloc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kidiloc\Car;
use Kidiloc\Category;

class CarsController extends Controller
{
  public function index(){

    $cars = Car::latest('updated_at')->get();

    return view('cars.index', compact('cars'));
  }

  public function create(){
    $categories = Category::all();

    $names = [];

    foreach ($categories as $category) {
      $names[$category->id] = $category->name;
    }

    return view('cars.create')->with('categories', $names);
  }


  public function rent($carId){
    return view('rents.create')->with('car', $carId);
  }


  public function store(Request $request){

    $this->validate($request, [
      'model' => 'required',
      'brand' => 'required',
      'daily_rate' => 'required',
    ]);

    $input = $request->all();

    Car::create($input);

    Session::flash('flash_message', 'Car successfully added!');

    return redirect()->back();
  }

}
