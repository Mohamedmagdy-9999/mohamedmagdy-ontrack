<footer class="footer-area section-padding-80-0 fixed-bottom" id="contact" style="background:#e7f2fd; padding-bottom:0px;">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Contact Us</h4>

                        <!-- Footer Content -->
                        <div class="footer-content mb-15">
                            <h3>(+65) 1234 5678</h3>
                            <p>40 Baria Sreet 13/2 NY City, US <br> hello.colorlib@gmail.com</p>
                        </div>
                        <p class="mb-0">Mon - Fri: 9:00 - 19:00 <br>
                            Closed on Weekends</p>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Quick Link</h4>

                        <!-- Nav -->
                        <nav>
                            <ul class="our-link">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Form Registeration</a></li>
                                <li><a href="#">Form Sign In</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Resources</h4>

                        <!-- Nav -->
                        <nav>
                            <ul class="our-link">
                                <li><a href="#">Customer Support</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Media &amp; Press</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">About Us</h4>
                        <p>Integer vehicula mauris libero, at molestie eros imperdiet sit amet.</p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text mb-30">
                            <p>&copy; Copyright 2018 <a href="http://www.tiewrap.net">Tiewrap</a>.</p>
                        </div>

                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="https://www.facebook.com/" target="_blank" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.twitter.com" target="_blank" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            
                            <a href="https://www.instagram.com" target="_blank" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com" target="_blank" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>

            </div>

 <div class="row" style="padding-bottom:30px">
                
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by  
  <a href="http://www.tiewrap.net" target="_blank">Tiewrap</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>

        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="js/default-assets/active.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}
    <script src="extensions/export/bootstrap-table-export.js"></script>
    <script type="text/javascript" >
        $(document).on('click', 'a[href^="#"]', function (event) {
          event.preventDefault();
      
          $('html, body').animate({
              scrollTop: $($.attr(this, 'href')).offset().top
          }, 2000);
        });
      </script>
      <script>
   $(document).ready(function(){
        $("#one").click(function(){
            $(".one").toggle();
        });
    });
   
   </script>
   
<script>
   $(document).ready(function(){
        $("#two").click(function(){
            $(".two").toggle();
        });
    });
   
   </script>

<script>
   $(document).ready(function(){
        $("#three").click(function(){
            $(".three").toggle();
        });
    });
   
   </script>

<script>
   $(document).ready(function(){
        $("#four").click(function(){
            $(".four").toggle();
        });
    });
   
   </script>
  <script>
      
      $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
      
  </script>
  <script>
            const button = document.querySelector('#button');
            const magdy = document.querySelector('#magdy');
           

        loadAllEventListeners();
           
        function loadAllEventListeners(){

        }
            
            // const div2 = document.createElement('div');
            // div2.className = 'col-md-12';
            // magdy.appendChild(div2);
           
            
            // div2.appendChild(input);
            
            
            // const myInputs = document.querySelector(".newInput");
            button.addEventListener('click', function(){
                const input = document.createElement('input');
                input.setAttribute('type', 'file');
                for(var i = 0 ; i <= document.querySelectorAll(".newInput").length; i++){
                    input.setAttribute('name', 'image' + i);
                }
                
                input.className = 'form-control newInput';
                if(document.querySelectorAll(".newInput").length < 4)
                {
                magdy.append(input);
                }else{
                    alert("Cannot upload more than 4 images");
                }
            });
                
            
  </script>
      
<script>
    const button1 = document.querySelector('#magdy1');
    const input1 = document.querySelector('#input1');

    button1 .addEventListener('click', function(){
        input1.setAttribute('require', 'required');
        input1.setAttribute('name', 'numbers');
    });

    
 </script>
 <script>
        const button2 = document.querySelector('#magdy2');
        const input2 = document.querySelector('#input2');
    
        button2 .addEventListener('click', function(){
            input2.setAttribute('require', 'required');
            input2.setAttribute('name', 'numbers');
        });
    
        
     </script>
     <script>
            const button3 = document.querySelector('#magdy3');
            const input3 = document.querySelector('#input3');
        
            button3 .addEventListener('click', function(){
                input3.setAttribute('require', 'required');
                input3.setAttribute('name', 'numbers');
            });
        
            
         </script>
         <script>
                const button4 = document.querySelector('#magdy4');
                const input4 = document.querySelector('#input4');
            
                button4 .addEventListener('click', function(){
                    input4.setAttribute('require', 'required');
                    input4.setAttribute('name', 'numbers');
                });
            
                
             </script>
             <script>
                    const button5 = document.querySelector('#magdy5');
                    const input5 = document.querySelector('#input5');
                
                    button5 .addEventListener('click', function(){
                        input5.setAttribute('require', 'required');
                        input5.setAttribute('name', 'numbers');
                    });
                
                    
                 </script>
                 <script>
                        const button6 = document.querySelector('#magdy6');
                        const input6 = document.querySelector('#input6');
                    
                        button6 .addEventListener('click', function(){
                            input6.setAttribute('require', 'required');
                            input6.setAttribute('name', 'numbers');
                        });
                    
                        
                     </script>
                     <script>
                            const button7 = document.querySelector('#magdy7');
                            const input7 = document.querySelector('#input7');
                        
                            button7 .addEventListener('click', function(){
                                input7.setAttribute('require', 'required');
                                input7.setAttribute('name', 'numbers');
                            });
                        
                            
                         </script>
                         <script>
                                const button8 = document.querySelector('#magdy8');
                                const input8 = document.querySelector('#input8');
                            
                                button8 .addEventListener('click', function(){
                                    input8.setAttribute('require', 'required');
                                    input8.setAttribute('name', 'numbers');
                                });
                            
                                
                             </script>

                             <script>
                                 const m1 = document.querySelector('#m1');
                                 const n1 = document.querySelector('#n1');
                                 const r1 = document.querySelector('#r1');
                                 m1.addEventListener('click', function(){
                                    //  m1.setAttribute('name', 'type');
                                     n1.setAttribute('require', 'required');
                                     n1.setAttribute('name', 'numbers');
                                     r1.setAttribute('value', '10 Elements  10 Check List 400 Le Per User');
                                    
                                 })
                             
                             </script>
                            
                            <script>
                                    const m2 = document.querySelector('#m2');
                                    const n2 = document.querySelector('#n2');
                                    m2.addEventListener('click', function(){
                                        n2.setAttribute('require', 'required');
                                        n2.setAttribute('name', 'numbers');
                                    })
                                
                            </script>
                            
                            <script>
                                    const m3 = document.querySelector('#m3');
                                    const n3 = document.querySelector('#n3');
                                    m3.addEventListener('click', function(){
                                        n3.setAttribute('require', 'required');
                                        n3.setAttribute('name', 'numbers');
                                    })
                                
                            </script>

                        <script>
                                const m4 = document.querySelector('#m4');
                                const n4 = document.querySelector('#n4');
                                m4.addEventListener('click', function(){
                                    n4.setAttribute('require', 'required');
                                    n4.setAttribute('name', 'numbers');
                                })
                            
                        </script>

                        <script>
                                const m5 = document.querySelector('#m5');
                                const n5 = document.querySelector('#n5');
                                m5.addEventListener('click', function(){
                                    n5.setAttribute('require', 'required');
                                    n5.setAttribute('name', 'numbers');
                                })
                            
                        </script>

                        <script>
                                const m6 = document.querySelector('#m6');
                                const n6 = document.querySelector('#n6');
                                m6.addEventListener('click', function(){
                                    n6.setAttribute('require', 'required');
                                    n6.setAttribute('name', 'numbers');
                                })
                            
                        </script>

                        <script>
                                const m7 = document.querySelector('#m7');
                                const n7 = document.querySelector('#n7');
                                m7.addEventListener('click', function(){
                                    n7.setAttribute('require', 'required');
                                    n7.setAttribute('name', 'numbers');
                                })
                            
                            </script>

                        <script>
                                const m8 = document.querySelector('#m8');
                                const n8 = document.querySelector('#n8');
                                m8.addEventListener('click', function(){
                                    n8.setAttribute('require', 'required');
                                    n8.setAttribute('name', 'numbers');
                                })
                            
                        </script>

                        <script>
                            const ckeck1 = document.querySelector('#check1');
                            const hidden1 = document.querySelector('#hidden1');
                            const hidden2 = document.querySelector('#hidden2');
                            check1.addEventListener('click', function(){
                                hidden1.setAttribute('value', 'Safety');
                                hidden2.setAttribute('value', ' $8.00/Month');
                            })
                        </script>

                        <script>
                            const check2 = document.querySelector('#check2');
                            const hidden3 = document.querySelector('#hidden3');
                            const hidden4 = document.querySelector('#hidden4');
                        check2.addEventListener('click', function(){
                            hidden3.setAttribute('value', 'sequrity');
                            hidden4.setAttribute('value', '$8.00');
                        })
                        </script>

                        <script>
                                const check3 = document.querySelector('#check3');
                                const hidden5 = document.querySelector('#hidden5');
                                const hidden6 = document.querySelector('#hidden6');
                            check3.addEventListener('click', function(){
                                hidden5.setAttribute('value', 'MEP');
                                hidden6.setAttribute('value', '$8.00');
                            })
                            </script>

                             <script>
                                const check4 = document.querySelector('#check4');
                                const hidden7 = document.querySelector('#hidden7');
                                const hidden8 = document.querySelector('#hidden8');
                            check4.addEventListener('click', function(){
                                hidden7.setAttribute('value', 'H.k');
                                hidden8.setAttribute('value', '$8.00');
                            })
                            </script>

    <script>
        $(".buttonsClass").click(function(){
            $("#typeInput2").val(" ");
            $("#typeInput2").val($(this).text());
        });
    </script>
</body>

</html>