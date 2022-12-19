@extends('admin.admin')
@section('adminlte')

<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <main class="form-registration">
            <h1 class="w-100 btn btn-lg btn-primary mt-3 text-dark">REGISTRASI FORM</h1>
            <form action="#" method="">
                @csrf
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top" name="name" placeholder="Name">
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="username" placeholder="username">
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" placeholder="Email address">
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom" name="password" placeholder="Password">
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3 text-dark" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="#" class="text-primary">Login</a> </small>
        
        </main>
    </div>
</div>
<br>
<br>
<br>
<br>
    
@endsection