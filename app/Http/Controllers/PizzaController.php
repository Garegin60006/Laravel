<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {

     $pizzas = Pizza::all();

        return view('pizzas.index', [
            'pizzas' => $pizzas
        ]);
    }

    public function  show ($id) {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function  create () {
        return view('pizzas.create');
    }

    public function store (Request $request) {

//        \Log::info($request->all());

//        error_log($request->name);

        $pizzas = new Pizza();

        $pizzas->name = $request->name;
        $pizzas->type = $request->type;
        $pizzas->base = $request->base;
        $pizzas->price = $request->price;
        $pizzas->toppings = $request->toppings;

        $pizzas->save();

        return redirect('/')->with('message', 'product created successfully');

    }

    public  function  destroy ($id) {
        $pizza = Pizza::findOrFail($id);

        $pizza->delete();

        return redirect('/pizzas');


    }


}
