@extends('admin.master')

@section('content')

    <section>
        <div class="container">


            <form action="company" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <label for=""> <strong>Company Name</strong></label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-md-12">
                        <label for=""> <strong>Company Logo</strong></label>
                        <input type="file" name='logo' class="form-control">
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-md-12">
                        <label for=""> <strong>Company Address</strong></label>
                        <input type="text" class="form-control" name="address">
                    </div>
                </div> <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Add">
                </div>

            </form>
        </div>


    </section> <br>  <br> <br> <br>

    <table class="table table-bordered">
        <thead class="">
            <th>Company Name</th>
            <th>Company Logo</th>
            <th>Company Address</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($company as $com)
            <tr>
              <td>{{$com->name}}</td>
              <td><img src="{{asset('storage/coverImages/'. $com->logo)}}" style="width:150px; height:100px;" alt=""></td>
              <td>{{$com->address}}</td>  
              <td>
                  <a href="{{'edit'.$com->id}}"><button clas="btn btn-danger"> <i class="fa fa-edit"></i> </button></a>
            </td>
            </tr>
        </tbody>
        @endforeach
    </table>

@endsection