@extends('layouts.backend')

@section('content')

            
            <!-- /.row -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">


                        <div class="card-header bg-primary text-white">

                            <p> Drugs List</p>
                        </div>

                        <div class="card-body">
                            <div class="panel-body">

                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                                    <thead>
                                        <tr>
                                            <th>Generic Name</th>
                                            <th>Category</th>
                                            <th>Brand</th>
                                            <th>Buying Price</th>
                                            <th>Selling Price</th>
                                            <th>Stock Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
    
    
                                       @foreach ($drugs as $drug)

                                       <tr>
                                        
                                        <td>{{ strtoupper($drug->generic_name) }}</td>


                                        <td>

                                           <label class="badge badge-pill bg-success text-white">
                                            @php
                                            $categoryName = \App\Models\Categories::find($drug->drug_category);
                                          
                                            echo $categoryName? strtoupper($categoryName->name) : "Not found";
                                        @endphp
                                           </label>
                                           
                                        </td>

                                        <td>

                                            <label class="badge badge-pill bg-success text-white">
                                             @php
                                             $brandName = \App\Models\Brands::find($drug->drug_brand);
                                           
                                             echo $brandName? strtoupper($brandName->name) : "Not found";
                                             @endphp
                                            </label>
                                            
                                         </td>

                                        <td>
                                          TZS  {{ number_format($drug->buying_price) }}
                                        </td>

                                        <td>
                                          TZS  {{ number_format($drug->selling_price) }}
                                        </td>

                                        <td>
                                            {{ number_format($drug->stock_quantity)}}
                                        </td>

                                        <td>
                                            <a href="{{ route('drugs.view', ['id' => $drug->id]) }}">
                                            <button class="btn btn-primary btn-sm">View</button>
                                            </a>

                                            <a href="{{ route('drugs.edit', ['id' => $drug->id]) }}">
                                            <button class="btn btn-primary btn-sm">Edit</button>
                                            </a>

                                            <a href="{{ route('drugs.delete', ['id' => $drug->id]) }}"> 
                                            <button class="btn btn-primary btn-sm">Delete</button>
                                             </a> 

            
                                            </td>
                                       </tr>
                                           
                                       @endforeach
    
                                    </tbody>
    
                                </table>
                             
                            </div>
                        </div>

                    </div>

                   
                </div>
                <!-- /.col-lg-12 -->
            </div>


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   
@endsection