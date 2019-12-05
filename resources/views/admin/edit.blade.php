@extends('admin.master')

@section('content')


<form action="{{'company_edit'.$company['id']}}" method="POST" enctype="multipart/form-data">
    @csrf
    @mrthod(PUT)
@foreach($company as $aaa)
    <div class="row">
        <div class="col-md-12">
            <label for=""> <strong>Company Name</strong></label>
            <input type="text" class="form-control" name="name" value="{{$aaa->name}}">
        </div>
    </div> <br>
    <div class="row">
        <div class="col-md-12">
            <label for=""> <strong>Company Logo</strong></label>
            <input type="file" name='logo' class="form-control" value="{{$aaa->logo}}">
        </div>
    </div> <br>
    <div class="row">
        <div class="col-md-12">
            <label for=""> <strong>Company Address</strong></label>
            <input type="text" class="form-control" name="address" value="{{$aaa->address}}>
        </div>
    </div> <br>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Add">
    </div>
@endforeach
</form>
</div>



@endsection

















