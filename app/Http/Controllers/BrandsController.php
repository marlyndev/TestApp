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

    
    public function storeApi(Request $request){

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

         return response()->json([

            'success' => true,
            'brand' => $brands
         ], 200);
       }


       catch(expection $e){

           DB::rollBack();

           Log::info($e->getMessage());
          
           return response()->json([

            'success' => false,
            'message' => $e->getMessage()

           ],419);

       }
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

    public function show($id){
        //

        $brands =Brands::findOrFail($id);

        if($brands)
        {
            return view('brands.view', compact('brands'));
        }

        return response()->json([
            'message' => 'Brand Not found'
        ]);
    }


    public function edit($id){
        //

        $brands = Brands::findOrFail($id);

    if($brands){
        return view('brands.edit', compact('brands'));
    }
    }


    public function update(Request $request){
        //
        $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string'
        ]);


        $brands = Brands::findOrFail($request->id);

        if($brands){

            $brands->update($request->all());

            return redirect()->route('brands.index');
        }
    }


    public function destroy($id){
        //
        $brands = Brands::findOrFail($id);

            if($brands){

                $brands->delete();

                return redirect()->back();
            }
    }
}
