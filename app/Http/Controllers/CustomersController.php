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

    public function customerApi(Request $request){

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

            return response()->json([

            'success' => true,
            'customers' => $customers
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

    public function show($id){

        $customers = Customers::findOrFail($id);

        if($customers)
        {
            return view('customers.view', compact('customers'));
        }

        return response()->json([
            'message' => 'Customer not found'
        ]);
        
    }

    public function edit($id){

        $customers = Customers::findOrFail($id);

        if($customers){
            
            return view('customers.edit', compact('customers'));
        }
    }

    public function update(Request $request){

        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|string',
            'phone' => 'required|string|min:10',
            'address' => 'required'
        ]);

        $customers = Customers::findOrFail($request->id);

        if($customers){

        $customers->update($request->all());

        return redirect()->route('customers.index');
    }
}

     public function destroy($id){

        $customers = Customers::findOrFail($id);

        if($student){

            $student->delete();

            return redirect()->back();
        }

     }
}
