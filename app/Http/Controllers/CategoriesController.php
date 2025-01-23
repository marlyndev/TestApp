<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoriesController extends Controller
{

    public function create(){

        return view('categories.create');
    }
    
    //

    public function index(){

        $categories = Categories::latest()->get();

        return view('categories.index', compact('categories'));

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

           $categories = new categories();
           $categories->name = $request->name;
           $categories->description = $request->description;

           $categories->save();


           
           DB::commit();

           Log::info('categories Data' .$categories);

           return response()->json([

            'success' => true,
            'categories' => $categories

           ], 200);
       }


       catch(expection $e){

           DB::rollBack();

           Log::info($e->getMessage());

           return response()->json([

            'success' => false,
            'message' => $e->getMessage()

           ], 419);

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

           $categories = new categories();
           $categories->name = $request->name;
           $categories->description = $request->description;

           $categories->save();


           
           DB::commit();

           Log::info('categories Data' .$categories);

           return redirect()->route('categories.index');
       }


       catch(expection $e){

           DB::rollBack();

           Log::info($e->getMessage());
           return redirect ()->back();

       }
}
   public function show($id)
    {
        //
        $categories =Categories::findOrFail($id);

        if($categories)
        {
            return view('categories.view', compact('categories'));
        }

        return response()->json([
            'message' => 'Category Not found'
        ]);
    }


   public function edit($id){
    //
    $categories = Categories::findOrFail($id);

    if($categories){
        return view('categories.edit', compact('categories'));
    }

}

    public function update(Request $request){
        //
        $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string'
        ]);


        $categories = Categories::findOrFail($request->id);

        if($categories){

            $categories->update($request->all());

            return redirect()->route('categories.index');
        }
        }

        public function destroy($id){

            $categories = Categories::findOrFail($id);

            if($categories){

                $categories->delete();

                return redirect()->back();
            }
        }


}

