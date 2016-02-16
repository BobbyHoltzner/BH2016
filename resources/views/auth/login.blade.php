@extends('layouts.auth')

@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
    {!! csrf_field() !!}
  <div class="login-form">
    <div class="form-group">
      <div class="input-group"><span class="input-group-addon"><i class="icon s7-user"></i></span>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Your Email">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <div class="input-group"><span class="input-group-addon"><i class="icon s7-lock"></i></span>
        <input type="password" class="form-control" name="password" placeholder="Password">
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <div class="form-group login-submit">
      <button data-dismiss="modal" type="submit" class="btn btn-primary btn-lg">Log me in</button>
    </div>
  </div>
</form>

@endsection
