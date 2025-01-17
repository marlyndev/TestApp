<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CustomersController extends Controller
{
    //

    public function create(){

        return view('customers.create');
    }

    public function index(){

        $customers = Customers::latest()->get();
        return view('customers.index', compact('customers'));

    }

    public function store(Request $request){

        //data validation
        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|string',
            'phone' => 'required|string|min:10',
            'address' => 'required|string',
        ]);

        DB::beginTransaction();

        try
        {
            //insert data
            $customers= new customers();
            $customers->name= $request->name;
            $customers->email= $request->email;
            $customers->phone= $request->phone;
            $customers->address= $request->address;

            $customers->save();

            DB::commit();

            Log::info('customers Data' .$customers);

            return redirect()->route('customers.index');
        }


        catch(expection $e){

            DB::rollBack();

            Log::info($e->getMessage());
            return redirect ()->back();

        }
    }

    public function show(){

        $customer = customer::findOrFail($id);

        if($customer)
        {
            return view('customer.view', compact('customer'));
        }

        return response()->json([
            'message' => 'Customer not found'
        ]);
        
    }
}
