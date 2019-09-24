@extends('layout.login')

@section('content')
<form method="POST" action="{{ route('login') }}">
 {{ csrf_field() }}
  <div class="form-group">
    <label>E-Mail Address</label>
      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

      @if ($errors->has('email'))
          <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
  </div>
  <div class="form-group">
     <label>Password</label>
     <input id="password" type="password" class="form-control" name="password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
  </div>
  <div class="form-group">
            
        <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
        </label>
                
    </div>
    <button type="submit" class="btn btn-black">
        Login
    </button>

    <a class="btn btn-link" href="{{ route('password.request') }}">
        Forgot Your Password?
    </a>
   
  
</form>
@endsection
            