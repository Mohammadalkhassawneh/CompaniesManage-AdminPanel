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
                        <div class="card-header">Company</div>
                        <div class="card-body" style="margin:auto;">
                            <div class="card-title">
                                <h3 class="text-center title-2">Add Company</h3>
                            </div>
                            <hr>
                            <form action="{{route('company.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                                <div class="form-group">
                                    <label  class="control-label mb-1">Company Name</label>
                                    <input  name="name" type="text" class="form-control" >
                       

                                </div>
                                <div class="form-group has-success">
                                    <label  class="control-label mb-1">Company Email</label>
                                    <input name="email" type="email" class="form-control cc-name valid">
                                    
                                </div>
                                <div class="form-group has-success">
                                    <label  class="control-label mb-1">Company Website</label>
                                    <input name="website" type="text" class="form-control cc-name valid">
                                </div>
                                <div class="form-group">
                                    <label  class="control-label mb-1">Company Logo</label>
                                    <input  name="logo" type="file" class="form-control cc-number identified visa">
                                </div>
                            
                                </div>
                                <div style="margin:0 0 10px 100px;">
                                <button type="submit" class="btn btn-primary" >Add company</button>
                                </div>
                          
                            </form>
                        </div>
                    </div>
                </div>
</div>
</div>
</div>


@endsection