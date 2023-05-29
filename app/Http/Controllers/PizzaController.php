<?php

namespace App\Http\Controllers;

use App\Models\pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = pizza::all();
        
         return view('index',['pizza'=>$pizzas,
                                'name'=>Request('name'),
                            'age'=>request('age')]);

    }

    public function info(){
        $name=request('name');

        return  view('info',['name'=>$name]);
    }

    public function id($id){
        $pizzas = pizza::find($id);
        return view('show',['id'=>$pizzas]);
    }

    public function create(){

    }
}
