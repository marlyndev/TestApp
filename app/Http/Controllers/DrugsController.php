<?php

namespace App\Http\Controllers;

use App\Models\Drugs;
use App\Models\Categories;
use App\Models\Brands;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DrugsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drugs = Drugs::latest()->get();
        return view('drugs.index', compact('drugs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $categories = Categories::latest()->get();
       $brands = Brands::latest()->get();
        return view('drugs.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        //validation
        $request->validate([
            'generic_name' => 'required|string|min:3',
            'buying_price' => 'required|numeric|min:2',
            'selling_price' => 'required|numeric|min:2',
            'stock_quantity' => 'required|numeric|min:1',
            'drug_category' => 'required'
        ]);



        //transanction
        DB::beginTransaction();

        try {


            // $drug = new Drugs();
            // $drug->generic_name = $request->generic_name;
            // $drug->buying_price = $request->buying_price;
            // $drug->selling_price = $request->selling_price;
            // $drug->stock_quantity = $request->stock_quantity;

            // $drug->save();

            //FOR MASS ASSIGNMENT
            Drugs::create([
                'generic_name' => $request->generic_name,
                'buying_price' => $request->buying_price,
                'selling_price' => $request->selling_price,
                'stock_quantity' => $request->stock_quantity,
                'drug_category' => $request->drug_category,
                'drug_brand' => $request->drug_brand
            ]);

            DB::commit();

            return redirect()->route('drugs.index');



         
        } catch (\Throwable $th) {
           
            Log::info($th->getMessage());
            DB::rollBack();
            return redirect()->back();
        }



    }

    /**
     * Display the specified resource.
     */
    public function show(Drugs $drugs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drugs $drugs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Drugs $drugs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drugs $drugs)
    {
        //
    }
}
