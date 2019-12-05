@extends('admin.master')

@section('content')

    <div class="container">
   <div class="row">
   </div>
        <table class="table table-bordered" id="issue_data">
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>E-mail</th>
                <th>Issue</th>
                <th>Details</th>
            </thead>
            <tbody>
        
           @foreach($issues as $issue)
                <tr>
                    <td>{{$issue->first_name}}</td>
                    <td>{{$issue->last_name}}</td>
                    <td>{{$issue->email}}</td>
                    <td>{{$issue->issue}}</td>
                    <td>{{$issue->details}}</td>
                
                </tr>
          
            @endforeach
            </tbody>
        </table>
    
    </div>

@endsection

