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
}

