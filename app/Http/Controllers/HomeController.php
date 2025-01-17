<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drugs;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $drugs = Drugs::get();

        $drugsCount = $drugs->count();

        $stockValue = $drugs->sum(function($drug){

            return $drug->buying_price * $drug->stock_quantity;
        });

        $stockValueSelling = $drugs->sum(function($drug){
            
            return $drug->selling_price * $drug->stock_quantity;
        });

        $grossProfit =$stockValueSelling - $stockValue;

      

        return view('home', compact('drugsCount','stockValue','stockValueSelling','grossProfit'));
    }
}
