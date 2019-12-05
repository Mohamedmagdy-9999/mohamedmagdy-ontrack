@extends('website.header')
  
<br> <br> <br> <br> <br> <br> 
  <section id="contact">
    <div class="container">
        <h1 style="color:#095876">Contact Us</h1> <br> <br>
        <form action="request" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="first_name">
                </div>
                <div class="col-md-6">
                    <label for="">last Name</label>
                    <input type="text" class="form-control" name="last_name">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="">E-mail</label>
                    <input type="email" class="form-control" name="email">
                </div>
            </div> <br>
            
            <div class="row">
                <div class="col-md-12">
                    <label for="">Select Issue</label>
                    <select name="issue" id="" class="form-control">
                        <option value="" disabled selected>Select Issue</option>
                        <option value="issue 1">Issue 1</option>
                        <option value="issue 2">Issue 2</option>
                        <option value="issue 3">Issue 3</option>
                    </select>
                </div>
            </div> <br>
            <div class="row">
                <div id="magdy" class="col-md-12">
                    <label for="">Screenshot</label>
                    <input type="file" name="coverImage" id="coverImages" class="form-control newInput"> 
                    
                   
                </div>
            </div>
             <br> <br> <button type="button" class="btn btn-primary btn-sm" id="button"><i class="fa fa-plus"></i></button>
            
              <br> <br> <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="">Details</label>
                    <textarea  id="" cols="30" rows="10" class="form-control" name="details">

                    </textarea>
                </div> 
              
            </div> <br> <br> <br>
            <input type="submit" class="btn btn-primary" value="Submit"> <br> <br> <br>
        </form>

    </div>
  </section>
   
  @extends('website.footer')