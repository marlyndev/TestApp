@extends('layouts.backend')

@section('content')

            
            <!-- /.row -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">


                        <div class="card-header bg-primary text-white">

                            <p> Category List</p>
                        </div>

                        <div class="card-body">
                            <div class="panel-body">

                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
    

                                     @foreach ($categories as $data) 
    
                                        <tr>
    
                                            <td>
                                                {{ strtoupper($data->name) }}
                                            </td>
    
                                            <td>
                                               {{ $data->description }}
                                            </td>

                                            <td> 
                                                <a href="{{ route('categories.view', ['id' => $data->id]) }}">
                                                <button class="btn btn-primary btn-sm">View</button> 

                                                <a href="{{ route('categories.edit', ['id' => $data->id]) }}">
                                                <button class="btn btn-primary btn-sm">Edit</button> 

                                                <a href="{{ route('categories.delete', ['id' => $data->id]) }}">
                                                <button class="btn btn-primary btn-sm">Delete</button> 

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