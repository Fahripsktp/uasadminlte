@extends('layouts.main')

@section('container')
<br>
<div class="row justify-content-center">
    <div class="col-md-4">

        @if(session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

          @if(session()->has('loginErorr'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginErorr') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif



        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Login Now</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                    <input type="email" class="form-control @error('email')is-invalid @enderror" id="floatinginput" placeholder="Email address" name="email" autofocus required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingpassword" placeholder="Password" name="password" required>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>
            </form>
            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now</a> </small>
        </main>

    </div>
</div>

    
@endsection