@extends('admin.master')

@section('content')


<section id="security">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6 col-xs-12">
                <label for=""> <strong>Access Management</strong></label> <br>
                <select name="management" id="" class="form-control">
                    <option disabled selected>Select Features</option>
                    <option value="">Visitors</option>
                    <option value="">Labor</option>
                    <option value="">material Management</option>
                    <option value="">Final Products</option>
                    <option value=""></option>
                </select>
            </div>       
            <div class="col-md-6 col-xs-12">
                <label for=""><strong>Patrolling Inspection</strong></label> <br>
                <select name="inspection" id="" class="form-control">

                    <option disabled selected>Select Features</option>
                    <option value="">Fences</option>
                    <option value="">Security Post</option>
                    <option value="">Customer Property</option>
                    <option value="">Admin Building</option>
                    <option value="">Inventory</option>
                    <option value="">Accommoditions</option>
                </select>
            </div>  
            
        </div> <br> <br>
        <div class="form-group">
                <input type="submit" class="btn btn-primary" value="submit" name="submit">
            </div>
    </div>

</section>



@endsection










