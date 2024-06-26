
@extends('layouts.guest',['title'=>'register'])

@section('content')

<div class="container">
        <div class="row">
          <div class="col-md-10 ml-auto mr-auto">
            <div class="card card-signup">
              <h2 class="card-title text-center">Register</h2>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 ml-auto">
                    <div class="info info-horizontal">
                      <div class="icon icon-rose">
                        <i class="material-icons">timeline</i>
                      </div>
                      <div class="description">
                        <h4 class="info-title">Marketing</h4>
                        <p class="description">
                          We've created the marketing campaign of the website. It was a very interesting collaboration.
                        </p>
                      </div>
                    </div>
                    <div class="info info-horizontal">
                      <div class="icon icon-primary">
                        <i class="material-icons">code</i>
                      </div>
                      <div class="description">
                        <h4 class="info-title">Fully Coded in HTML5</h4>
                        <p class="description">
                          We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                        </p>
                      </div>
                    </div>
                    <div class="info info-horizontal">
                      <div class="icon icon-info">
                        <i class="material-icons">group</i>
                      </div>
                      <div class="description">
                        <h4 class="info-title">Built Audience</h4>
                        <p class="description">
                          There is also a Fully Customizable CMS Admin Dashboard for this product.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5 mr-auto">
                    <div class="social text-center">
                      <button class="btn btn-just-icon btn-round btn-twitter">
                        <i class="fa fa-twitter"></i>
                      </button>
                      <button class="btn btn-just-icon btn-round btn-dribbble">
                        <i class="fa fa-dribbble"></i>
                      </button>
                      <button class="btn btn-just-icon btn-round btn-facebook">
                        <i class="fa fa-facebook"> </i>
                      </button>
                      <h4 class="mt-3"> or be classical </h4>
                    </div>
                    <form  class="form"  method="POST" action="{{ route('register') }}">
                        @csrf
                      <div class="form-group has-default">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">face</i>
                            </span>
                          </div>
                          <input  class="form-control" placeholder="First Name..." type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" required  autocomplete="name" autofocus>
					  	
                        @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group has-default">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">mail</i>
                            </span>
                          </div>
                          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" placeholder="email">
						
            @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                        </div>
                      </div>
                      <div class="form-group has-default">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">lock_outline</i>
                            </span>
                          </div>
                          <input  placeholder="Password..."  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="Password">
						 
             @error('password')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                        </div>
                      </div>

                      <div class="form-group has-default">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">lock_outline</i>
                            </span>
                          </div>
                          <input  placeholder="Password..." class="form-control" type="password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                        </div>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" checked="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          I agree to the
                          <a href="#something">terms and conditions</a>.
                        </label>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-round mt-4">Get Started</button>
                      </div>
                      
                    </form>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection
