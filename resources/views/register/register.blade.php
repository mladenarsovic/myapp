@extends('layout.master')

@section('content')

<h2>Register user</h2>

    <hr>

    <form method="POST" action="/register">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name">
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name">
        </div>

        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control" id="company" name="company">
        </div>

        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password confirmation</label>
            <input class="form-control" type="password" name="password_confirmation">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

    @if (count($errors->all()) > 0)
        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach
    @endif



    @endsection