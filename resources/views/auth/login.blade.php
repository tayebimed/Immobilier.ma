@extends('layouts.master')
@section('content')
    <div id="login1">
        <div class="continer">
            <div class="test">
                <form class="col-md-5" method="POST" action="{{ route('login')}}">
                   @csrf
                    <h5 class="mb-1"> <a href=""><i class="fas fa-angle-left"></i></a>  Immoblier.<span class="text-danger">ma</span></h5>
                    <h6>Se connecter</h6>
                    <p>Connectez-vous à l'aide de votre compte Immobilier.com et accédez à nos services.</p>
                    <div class="form-group">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelp" placeholder="Adresse email" name="email" value="{{ old('email') }}" required
                 autocomplete="email" autofocus />
                     @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                       <input id="password" type="password" placeholder="Mot de passe" class="form-control  @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password">
                        
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>

                    <button type="submit" class="btn btn-danger btn-block mt-3">
                        Commencer
                    </button>
                              @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{
                                    route('password.request') }}">
                                    {{ __('réinitialisez votre mot de passe') }}
                                    </a>
@endif
                    <h6 class="text-center mt-3">ou connectez-vous en un clic</h6>
                     <div class="text-center">
                    <a href="#"><img src="{{asset('images/pictos/facebook.png')}}" class="icon" /></a>
                     <a href="#"><img src="{{asset('images/pictos/google.png')}}" class="icon" /></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
