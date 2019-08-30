<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspirant;
class AspirantController extends Controller
{
    public function index()
    {
    	$aspirat = Aspirant::paginate(3);
    	return view('admin.aspirantes.index')->with(compact('aspirant'));
    }
    public function store(Request $request)
    {
    	$aspirant = new Aspirant();
    	$aspirant->nameFull =  $request->input('nameFull');
    	$aspirant->email = $request->input('email');
    	$aspirant->phone = $request->input('phone');
    	$aspirant->oficio = $request->input('oficio');
        dd($aspirant);
    	$aspirant->save();

    	return redirect('/admin/aspirantes');
    }

    public function destroy($id)
    {

    }
}
