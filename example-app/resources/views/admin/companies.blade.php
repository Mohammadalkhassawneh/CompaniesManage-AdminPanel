@extends('admin.layout.master')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Manage Companies</h3>
                    <div class="table-data__tool">
                        <form action="" method="get">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select2" name="user">
                                    <option selected="selected">All companies</option>
                                   <option>User</option>
                                   <option>Guide</option>
                                   <option>Admin</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <button class="btn btn-primary" type="submit">Filter</button>
                             </form>
                        </div>
                        <div class="table-data__tool-right">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i><a class="color-white" href="{{route('company.create')}}">Add Company</a></button>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>

                                    <th>id</th>
                                    <th>name</th>
                                    <th>email</th>                       
                                    <th>Logo</th>
                                    <th>Website</th>
                                    <th>date-created</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                    
                                <td style="line-height: 100px">{{$company->id}}</td>
                                <td>{{$company->name}}</td>
                                <td>{{$company->email}} </td>     
                                <td><img src="{{asset('images/'. $company->logo)}}"></td>
                                <td>{{$company->website}} </td>
                                <td>{{$company->created_at}}</td>
                                <td>


                                  

                                        <div class="table-data-feature">
                                            <form action="{{route('company.destroy', $company->id)}}" method="POST">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" class="item mr-2" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                            </form>
                                            <a href="{{route('company.edit', $company->id)}}">
                                            <button class="item mr-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                @endforeach
                             
                            </tbody>
                        </table>
                      
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center ">
        {!! $companies->links() !!}
    </div>
</div>


@endsection