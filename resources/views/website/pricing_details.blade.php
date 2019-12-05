@extends('website.header')
    <br> <br> <br> <br> <br> <br> <br> <br> <br>
 <section id="details">

    <div class="container">
        <h1 class="text-center">Pricing Details</h1> <br> <br> <br> <br>
        <table class="table table-bordered">
                <thead>
                    <th>Number Of Users</th>
                    <th>Company Name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                </thead>
                <tbody>
                    @foreach($pricing as $pricings)
                    <tr>
                       <td>{{$pricings->numbers}}</td>
                        <td>{{$pricings->company}}</td>
                        <td>{{$pricings->email}}</td>
                        <td>{{$pricings->phone}}</td> 
                    </tr>
                </tbody>
                @endforeach
        </table>
    </div>

 </section> <br> <br> <br> <br> <br> <br> <br>
 
   
   @extends('website.footer')

 