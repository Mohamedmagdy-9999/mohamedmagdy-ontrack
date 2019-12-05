@extends('website.header')

<br> <br> <br> <br> <br> <br> <br> <br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="text-center"> <strong style="font-size:18px;">{{ __('Register') }}</strong></div> <br> <br> <br> 

                <div class="">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class=" row">
                           

                            <div class="col-md-6">
                            <label for="first_name">{{ __('First Name') }}</label>
                                <input id="name" type="text" class="form-control " name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                           <label for="name">{{ __('Last Name') }}</label>
                               <input  type="text" class="form-control " name="last_name"  required  autofocus>

                           </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Company Name</label>
                                <input type="text" class="form-control" name="company" required>
                            </div>
                            <div class="col-md-6">
                            <label for="phone">Phone Number</label>
                                <input id="phone" type="phone" class="form-control" name="phone" required>
                            </div>
                        </div> <br>
                           

                        
                       

                        <div class="row">
                           
                            <div class="col-md-6">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="">Country</label>
                                <select name="country" id="" class="form-control" required>
                                    <option disabled selected>Select Country</option>
                                    <option value="italy">Italy</option>
                                    <option value="spain">Spain</option>
                                    <option value="uae">UAE</option>
                                    <option value="egypt">Egypt</option>
                                </select>
                            </div>
                        </div> <br>

                        <div class="row">
                            

                            <div class="col-md-6">
                            <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <p>The password must be at least 8 characters</p>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <span id="message"></span>
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-md-12">
                                    <label for="">Comments</label>
                                    <textarea name="comment" id="" cols="25" rows="8" class="form-control"></textarea>
                            </div>
                           
                        </div> <br>

                     
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 <br> <br> <br>

@extends('website.footer')

