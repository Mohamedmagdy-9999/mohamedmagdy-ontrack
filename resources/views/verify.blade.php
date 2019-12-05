@extends('website.header') <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="text-center"> <strong style="font-size:18px;">{{ __('Please Verify Code') }}</strong></div> <br> <br>

                <div class="">
                    <form method="POST" action="{{ route('verify') }}">
                        @csrf

                       

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('code') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" required>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ 'code' }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('verify') }}
                                </button>

                              
                            </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="text-center">
                    <a href="">Resend Code</a>
                </div> --}}
            </div>
        </div>
    </div>
</div> <br> <br> <br> <br> <br> <br> <br> <br>

@extends('website.footer')