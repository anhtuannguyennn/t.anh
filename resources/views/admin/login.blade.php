@extends('masterForm')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Login</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="/login">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label class="small mb-1" for="inputEmailAddress">username</label>
                        <input class="form-control py-4" id="inputEmailAddress" type="text" name="username" placeholder="Enter email address" />
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="inputPassword">Password</label>
                        <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" />
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <div class="small"><a href="/register">Need an account? Sign up!</a></div>
            </div>
        </div>
    </div>
</div>
@endsection