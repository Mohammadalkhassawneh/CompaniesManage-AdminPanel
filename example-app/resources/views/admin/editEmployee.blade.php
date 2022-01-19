@extends('admin.layout.master')
@section('content')

<!-- MAIN CONTENT-->
<div class="main-content" style="margin-left:300px;">
    <div class="section__content section__content--p30" >
        <div class="container-fluid" >
            <div class="row" >
                <div class="col-lg-8">
                    <div class="card" >
                        @if ($errors->any())

                        @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                    @endif
                        <div class="card-header">Employee</div>
                        <div class="card-body" style="margin:auto;">
                            <div class="card-title">
                                <h3 class="text-center title-2">Add Employee</h3>
                            </div>
                            <hr>
                            <form action="{{route('employee.update', $employee->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")


                                <div class="form-group">
                                    <label  class="control-label mb-1">employee first Name</label>
                                    <input  name="first_name" type="text" class="form-control cc-name valid" >
                       

                                </div>
                                <div class="form-group has-success">
                                    <label  class="control-label mb-1">employee last Name</label>
                                    <input name="last_name" type="text" class="form-control cc-name valid">
                                    
                                </div>
                                <div class="form-group has-success">
                                    <label  class="control-label mb-1">employee company</label>

                                    <select class="form-select w-100 mb-3 py-1 px-2" name="exam_id" aria-label="Default select example" placeholder="employee company">
                                        @foreach($companies as $company)
                                        <option value="{{$company->id}}">{{$company->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label  class="control-label mb-1">employee Email</label>
                                    <input  name="email" type="email" class="form-control cc-number identified visa">
                                </div>
                                <div class="form-group">
                                    <label  class="control-label mb-1">employee Phone</label>
                                    <input  name="phone" type="text" class="form-control cc-number identified visa">
                                </div>
                            
                                </div>
                                <div style="margin:0 0 10px 100px;">
                                <button type="submit" class="btn btn-primary" >Add employee</button>
                                </div>
                          
                            </form>
                        </div>
                    </div>
                </div>
</div>
</div>
</div>


@endsection