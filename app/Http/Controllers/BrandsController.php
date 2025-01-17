<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BrandsController extends Controller
{
    //


    public function create(){

        return view('brands.create');
    
    }

    public function index(){

        $brands = Brands::latest()->get();

        return view('brands.index', compact('brands'));

    }

    public function store(Request $request){

        //validation
        $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string'
           
        ]);

        //transaction
        DB::beginTransaction();

        try {

           $brands = new brands();
           $brands->name = $request->name;
           $brands->description = $request->description;

           $brands->save();


           
           DB::commit();

           Log::info('brands Data' .$brands);

           return redirect()->route('brands.index');
       }


       catch(expection $e){

           DB::rollBack();

           Log::info($e->getMessage());
           return redirect ()->back();

       }
}
}
