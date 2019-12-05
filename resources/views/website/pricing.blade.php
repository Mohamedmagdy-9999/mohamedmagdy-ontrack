@extends('website.header')
    <br> <br> <br> <br> <br> <br>
  <section id="request"> 
    <div class="container">
    <h1 class="text-center" style="color:#095876">Ontrack Cloud Server</h1>
    <p style="font-size:18px;">All OnTrack software on the Cloud subscriptions include unlimited customer support, online appointment booking, <br>  remote access, and online data backups</p>
        <div class="row">
          <table class="table table-bordered">
            <thead class="thead-dark">
                
                <th class="text-center" colspan=2>SECURITY</th>
                <th class="text-center" colspan=2>SAFETY</th>
                <th class="text-center" colspan=2>MEP</th>
                <th class="text-center" colspan=2>H.K</th>
            </thead>
            <tbody>
                <tr>
                   
                    <th scope="col">Full Version</th>
                    <th scope="col">Enterprise</th>
                    <th scope="col">Full Version</th>
                    <th scope="col">Enterprise</th>
                    <th scope="col">Full Version</th>
                    <th scope="col">Enterprise</th>
                    <th scope="col">Full Version</th>
                    <th scope="col">Enterprise</th>
                </tr>
                <tr>
                    
                    <td><button id="magdy1" type="button" class="btn btn-primary">10 Elements <hr> 10 Check List <hr>400 Le Per User</button>
                        

                    </td>
                    <td style="width:80px; height:40px;"><button id="magdy2" style="width:100%; height:100%" type="button" class="btn btn-success btn-lg">Unlimited <hr> 600 L.E</button>
                        

                    </td>
                    <td><button id="magdy3" type="button" class="btn btn-primary btn-block">10 Elements <hr> 10 Check List <hr>600 L.E</button>
                        

                    </td>
                    <td style="width:80px; height:40px;"><button id="magdy4" style="width:100%; height:100%" type="button" class="btn btn-success btn-lg">Unlimited <hr> 600 L.E</button>
                        

                    </td>
                    <td><button id="magdy5" type="button" class="btn btn-primary">10 Elements <hr> 10 Check List <hr>2000 L.E</button>
                        

                    </td>
                    <td style="width:80px; height:40px;"><button id="magdy6" style="width:100%; height:100%" type="button" class="btn btn-success btn-lg">Unlimited <hr> 800 L.E</button>
                        

                    </td>
                    <td><button id="magdy7" type="button" class="btn btn-primary">10 Elements <hr> 10 Check List <hr> 300 L.E</button>
                        

                    </td>
                    <td style="width:80px; height:40px;"><button id="magdy8" style="width:100%; height:100%" type="button" class="btn btn-success btn-lg">Unlimited <hr>500 L.E</button>
                        

                    </td>
                </tr>
                <tr>
                   
                    
                  <td>
                    <label for=""> Users</label>
                    <input type="number" class="form-control" id="input1"> 
                  </td>
                  <td>
                      <label for=""> Users</label>
                    <input type="number" class="form-control" id="input2"> </td>
                  <td>
                      <label for=""> Users</label>
                    <input type="number" class="form-control" id="input3"> </td>
                  <td>
                      <label for=""> Users</label>
                    <input type="number" class="form-control" id="input4"> </td>
                  <td>
                      <label for=""> Users</label>
                    <input type="number" class="form-control" id="input5"> </td>
                  <td>
                      <label for=""> Users</label>
                    <input type="number" class="form-control" id="input6"> </td>
                  <td>
                      <label for=""> Users</label>
                    <input type="number" class="form-control" id="input7"> </td>
                  <td>
                      <label for=""> Users</label>
                    <input type="number" class="form-control" id="input8"> </td>
               
                   
                   
                  
                    
                </tr>
            </tbody>
        </table> <br> <br> <br> <br> <br>
            <button style="margin:auto;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mido">
                Request
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="mido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="" method="post">
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="">Company Name</label>
                                  <input type="text" class="form-control" name="company" required>
                              </div>
                          </div> <br>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="">E-mail</label>
                                  <input type="email" class="form-control" name="email" required>
                              </div>
                          </div> <br>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="">Phone</label>
                                  <input type="number" class="form-control" name="phone" required>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Submit"> 
                          </div>
                      </form>
                    </div>
                   
                  </div>
                </div>
              </div>
           
        </div>
    </div>

  </section> <br> <br> <br>

  <section id="request"> 
    <div class="container">
    <h1 class="text-center" style="color:#095876">Customer Cloud Server</h1>
    <p style="font-size:18px;">All OnTrack software will be installed on a customer’s local server or cloud server owned by the customer. include 10 customer support visits.</p>
        <div class="row">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    
                    <th class="text-center" colspan=2>SECURITY</th>
                    <th class="text-center" colspan=2>SAFETY</th>
                    <th class="text-center" colspan=2>MEP</th>
                    <th class="text-center" colspan=2>H.K</th>
                </thead>
                <tbody>
                    <tr>
                       
                        <th scope="col">Full Version</th>
                        <th scope="col">Enterprise</th>
                        <th scope="col">Full Version</th>
                        <th scope="col">Enterprise</th>
                        <th scope="col">Full Version</th>
                        <th scope="col">Enterprise</th>
                        <th scope="col">Full Version</th>
                        <th scope="col">Enterprise</th>
                    </tr>
                    <tr>
                      <form action="pricing" method="post">
                        @csrf
                        <td>

                          <input type="hidden" value="10 Elements,10 Check List,400 Le Per User" id="typeInput">
                          <button id="m1" type="button" class="btn btn-primary box-shadow-2dp buttonsClass" style="box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12)
                        }">10 Elements <hr> 10 Check List <hr>400 Le Per User</button>
                        
                            

                        </td>
                        <td style="width:80px; height:40px;"><button id="m2" style="width:100%; height:100%" type="button" class="btn btn-success btn-lg buttonsClass">Unlimited <hr> 600 L.E</button>
                            

                        </td>
                        <td><button id="m3" type="button" class="btn btn-primary btn-block buttonsClass">10 Elements <hr> 10 Check List <hr>600 L.E</button>
                            

                        </td>
                        <td style="width:80px; height:40px;"><button id="m4" style="width:100%; height:100%" type="button" class="btn btn-success btn-lg buttonsClass">Unlimited <hr> 600 L.E</button>
                            

                        </td>
                        <td><button id="m5" type="button" class="btn btn-primary buttonsClass">10 Elements <hr> 10 Check List <hr>2000 L.E</button>
                            

                        </td>
                        <td style="width:80px; height:40px;"><button id="m6" style="width:100%; height:100%" type="button" class="btn btn-success btn-lg buttonsClass">Unlimited <hr> 800 L.E</button>
                            

                        </td>
                        <td><button id="m7" type="button" class="btn btn-primary buttonsClass">10 Elements <hr> 10 Check List <hr> 300 L.E</button>
                            

                        </td>
                        <td style="width:80px; height:40px;"><button id="m8" style="width:100%; height:100%" type="button" class="btn btn-success btn-lg buttonsClass">Unlimited <hr>500 L.E</button>
                            

                        </td>
                    </tr>
                    <tr>
                   
                    
                        <td>
                         
                          <label for=""> Users</label>
                          <input type="number" class="form-control" id="n1"> 
                        </td>
                         <td>
                             <label for=""> Users</label>
                          <input type="number" class="form-control"  id="n2"> </td>
                        <td>
                            <label for=""> Users</label>
                          <input type="number" class="form-control"  id="n3"> </td>
                        <td>
                            <label for=""> Users</label>
                          <input type="number" class="form-control"  id="n4"> </td>
                        <td>
                            <label for=""> Users</label>
                          <input type="number" class="form-control"  id="n5"> </td>
                        <td>
                            <label for=""> Users</label>
                          <input type="number" class="form-control"  id="n6"> </td>
                        <td>
                            <label for=""> Users</label>
                          <input type="number" class="form-control"  id="n7"> </td>
                        <td>
                            <label for=""> Users</label>
                          <input type="number" class="form-control"  id="n8"> </td>
                     
                         
                         
                        
                          
                      </tr>
                </tbody>
            </table> <br> <br> <br> <br> <br>
            <button style="margin:auto;" type="button" class="btn btn-primary" id="requestBtn" data-toggle="modal" data-target="#magdy">
                Request
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="magdy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="POST" action="">
                    <div class="modal-body">
                      
                        <input type="hidden" id="typeInput2" name="type">
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="">Comapny Name</label>
                                  <input type="text" class="form-control" name="company" required>
                              </div>
                          </div> <br>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="">E-mail</label>
                                  <input type="email" class="form-control" name="email" required>
                              </div>
                          </div> <br>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="">Phone</label>
                                  <input type="number" class="form-control" name="phone" required>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Submit">                          
                        </div>
                     
                    </div>
                  </form>
                    
                  </div>
                </div>
              </div>
        </div>
    </div>
    
  </form>
  </section> <br> <br> <br> <br> <br>
 
   
   @extends('website.footer')

