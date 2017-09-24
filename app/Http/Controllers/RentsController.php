<?php

namespace Kidiloc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kidiloc\Rent;

class RentsController extends Controller
{
  public function index(){

    $rents = Rent::latest('updated_at')->get();

    return view('rents.index', compact('rents'));
  }

  public function store(Request $request){

    $this->validate($request, [
      'model' => 'required',
      'brand' => 'required',
      'daily_rate' => 'required',
    ]);

    $input = $request->all();

    Rent::create($input);

    Session::flash('flash_message', 'Rent successfully added!');

    return redirect()->back();
  }
}
