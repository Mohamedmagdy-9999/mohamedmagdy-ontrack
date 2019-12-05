@extends('admin.master')

@section('content')

    <div class="container">
   {{-- <div class="row">
        <div class="col-md-4">
            <div class="input-group mb-2">
                <form action="" method="POST">  
                    
                    <select name="issue" id="filter_issue" class="form-control" required>
                        <option disabled selected>Select Issue</option>
                        <option value="issue 1">issue 1</option>
                        <option value="issue 2">issue 2</option>
                        <option value="issue 3">issue 3</option>
                    </select>
                    <div class="input-group-btn">
                        <button type="submit" name="filter" id="filter" class="btn btn-info">Filter</button>
                    </div>
                </form>
                
                
            </div>
        </div>
   </div> --}}
        <table class="table table-bordered" id="issue_data">
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>E-mail</th>
                <th>Issue</th>
                <th>Details</th>
                <th>screenshot</th>
            </thead>
            <tbody>
        
           @foreach($requests as $result)
                <tr>
                    <td>{{$result->first_name}}</td>
                    <td>{{$result->last_name}}</td>
                    <td>{{$result->email}}</td>
                    <td>{{$result->issue}}</td>
                    <td>{{$result->details}}</td>
                    <td><div id="carouselExampleControls{{$result->id}}" class="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                                <img src="{{asset('coverImages/'. $result->image)}}" class="d-block w-100" style="width:200px; height:150px;" alt="">
                              </div>
                              <div class="carousel-item">
                                {{-- <img src="..." class="d-block w-100" alt="...">
                              </div> --}}
                             <img src="{{asset('coverImages/'. $result->image2)}}" class="d-block w-100" style="width:200px; height:150px;" alt="">
                            </div>
                            <div class="carousel-item">
                                {{-- <img src="..." class="d-block w-100" alt="...">
                              </div> --}}
                             <img src="{{asset('coverImages/'. $result->image3)}}" class="d-block w-100" style="width:200px; height:150px;" alt="">
                            </div>
                            <div class="carousel-item">
                                {{-- <img src="..." class="d-block w-100" alt="...">
                              </div> --}}
                             <img src="{{asset('coverImages/'. $result->image4)}}" class="d-block w-100" style="width:200px; height:150px;" alt="">
                            </div>
                            
                              
                            <a class="carousel-control-prev" href="#carouselExampleControls{{$result->id}}" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls{{$result->id}}" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div></td>
                    
                </tr>
          
            @endforeach
            </tbody>
        </table>
    
    </div>

@endsection

