@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1>Sign in</h1>

                @include('partials._form-errors')

                <form role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="email" class="control-label">E-Mail Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                    </div>

                    <div class="form-group">
                            <button type="submit" class="btn btn-primary">Sign in</button>

                            <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
