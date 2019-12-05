@extends('website.header') <br> <br> <br> <br> <br> <br>

  <style>
*{
    padding:0px;
    margin:0px;
    text-decoration:none;
    box-sizing: border-box;
}
body{
    background-color: #f1f2f3!important;
}
.sales2{
    background-color: aqua;
    width:100%;
    height:100px;
}
.sales{
    background-color: white;
    width:100%;
    height:50px;
   margin:2px;
  
}
.openerp_enterprise_pricing_app {
    display: block;
    padding-bottom: 8px;
    cursor: pointer;
    box-shadow: none;
}
.img-fluid, .img-responsive {
    max-width: 100%;
    height: auto;
}
img {
    vertical-align: middle;
    border-style: none;
    height:20px;
    width:20%;
}
.header{
    margin-left:3vh;
}
.spans{
margin-top:30px;
margin-left: -7vh;
font-size: 16px;
font-weight: 400;
}
input[type=checkbox], input[type=radio] {
    margin: 4px 100px 0!important;
    margin-top: 1px\9;
    line-height: normal;
}
.sales3{
    background-color:white;
    width:100%;
    height:500px;
    
}
.line{
    width:100%;
    height:1px;
    background-color:#dee2e6;
}
.btn1{
    background-color: #875a7b;
    border: #875a7b;
    color:white;
    width:80%;
    height:50px;
    margin-top:10px;
    font-size:13px;
  
}
.btn2{
    background-color: #2cbb70;
    border: #2cbb70;
    color:white;
    width:80%;
    height:30px;
    margin-top:10px;
    font-size:13px;
}
h5{
    font-size:14px;
}



</style>

<div class="section">
    <div class="container">
        <div class="row">
          <form action="package" method="POST">
@csrf
        
            <div class="col-md-12">
                <h3><strong>Choose the number of user</strong></h3> 
                <input type="number" name="number_users" class="form-control" required>
            </div>
        </div>
    </div>
</div>


<!------------------------->
   <div class="section">
     <div class="container">
       <div class="row" style="margin-top:10px;">
            <div class="col-12" style="margin-bottom:10px;"><h3>Choose your App</h3></div>
            <div class="row">
              <div class="col-md-12 d-flex ">
                  <div class="col-md-9 ">
                          <div class="col-12 d-flex ">

                                  <div class="col-md-6 d-flex sales">
                                      <img src="img/icon.png" class="img-fluid" >
                                      <div class="header"><h4>Safety</h4></div>
                                      <div class="spans d-flex">
                                        <span>$8.00</span>
                                        <span>USD</span>
                                        <span>/Month</span>
                                      </div>
                                      <div>
                                          <input type="checkbox" class="check" id="check1">
                                          <input type="hidden" name="type"  id="hidden1">
                                          <input type="hidden" name="price"  id="hidden2">
                                      </div>
                                  </div>

                                <div class="col-md-6 d-flex sales">
                                    <img src="img/icon (3).png" class="img-fluid" >
                                    <div class="header"><h4>Security</h4></div>
                                    <div class="spans d-flex">
                                      <span>$8.00</span>
                                      <span>USD</span>
                                      <span>/Month</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="check" id="check2">
                                        <input type="hidden" name="type"  id="hidden3">
                                        <input type="hidden" name="price"  id="hidden4">
                                    </div>
                                </div>
                          </div>

                          <div class="col-12 d-flex" style="margin-top:5px;">
                              <div class="col-md-6 d-flex sales">
                                  <img src="img/icon.png" class="img-fluid" >
                                  <div class="header"><h4>MEP</h4></div>
                                  <div class="spans d-flex">
                                    <span>$8.00</span>
                                    <span>USD</span>
                                    <span>/Month</span>
                                  </div>
                                   <div>
                                        <input type="checkbox" class="check" id="check3">
                                        <input type="hidden" name="type"  id="hidden5">
                                        <input type="hidden" name="price"  id="hidden6">
                                    </div>
                                  
                              </div>
        
                              <div class="col-md-6 d-flex sales">
                                  <img src="img/icon (3).png" class="img-fluid" >
                                  <div class="header"><h4>H.K</h4></div>
                                  <div class="spans d-flex">
                                    <span>$8.00</span>
                                    <span>USD</span>
                                    <span>/Month</span>
                                  </div>
                                  <div>
                                        <input type="checkbox" class="check" id="check4">
                                        <input type="hidden" name="type"  id="hidden7">
                                        <input type="hidden" name="price"  id="hidden8">
                                    </div>
                              </div>
                          </div>

                  </div>

                  <div class="col-md-3  sales3 text-center">
                        <div class="row" style="padding:10px;">
                            <div class="col-md-6">
                                <h5>Annualy<h5>
                            </div>
                            <div class="col-md-6">
                                <h5>Monthly</h5>
                            </div>
                        </div>

                <div class="row " style="padding:3px;">
                        <div class="col-md-6">
                            <h5>3 Users</h5>
                        </div>
                        <div class="col-md-6">
                            <p>$24.00 USD</p>
                        </div>
                </div>

                    <div class="line"></div>
                          
                  <div class="row">
                      <div class="col-md-6">
                        <h5>User Discount (1)</h5>
                      </div>
                      <div class="col-md-6">
                        <p>$24.00 USD</p>
                      </div>
                  </div>

                    <div class="line"></div>
                          
                    <div class="row">
                        <div class="col-md-6">
                          <h5>0 Apps</h5>
                        </div>
                      <div class="col-md-6">
                          <span>$24.00 USD</span>
                      </div>
                    </div>

                    <div class="line"></div>
                        

                      <div class="row">
                                <div class="col-md-6">
                                  <h5>Total / month (2)</h5>
                                </div>
                                <div class="col-md-6">
                                  <p >$6.00 USD</p>
                                </div>
                       </div>
                              <div class="line"></div>

                              <div class="row">
                                  <div class="col-md-12">
                                    <button class="btn1">TRY NOW <span>15 Days Free Trial<br></span></button>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-12">
                                    <button class="btn2" type="submit">BUY NOW</button>
                                  </div>
                              </div>
                            </form>
                              <div class="row" style="padding:5px;">
                                  <div class="col-md-12">
                                  <p>(1) New customers get a discount on the initial number of users purchased. ($6.00 USD instead of $8.00 USD).</p>
                                  </div>
                              </div>
                              

                  </div>
              </div>
        </div>
       </div>
     </div>
   </div>

<div class="section" style="margin-top:40px; background-color:#e9ecef;">
  <div class="container">
    <div class="row">

    <div class="row">
      <div class="col-12" style="margin-top:20px;">
        <h1 >ANY QUESTIONS</h1>
        <P style="font-size: 20px;">If the answer to your question is not on this page, please contact our account managers</p>
      </div>
    </div>

        <div class="col-9">
          <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" style="font-size:22px;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                      What does the subscription include?
                    </button>
                  </h2>
                </div>
            
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body" style="font-size: 13px;">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" style="font-size:22px;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Collapsible Group Item #2
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body" style="font-size: 13px;">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" style="font-size:22px;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Collapsible Group Item #3
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body" style="font-size: 13px;">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" style="font-size:22px;" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Collapsible Group Item #3
                      </button>
                    </h2>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body" style="font-size: 13px;">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
            </div>
        </div>
      <div class="col-md-3"></div>
      </div>
    </div>
  </div>






   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  @extends('website.footer')