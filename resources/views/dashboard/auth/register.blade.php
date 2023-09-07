@extends('layouts.forntend')
@section('content')
    <div class="content">

        <div class="sign-in Register">
            <img src="{{ asset('frontend/images/file.png') }}" alt="">
            <h2>Register</h2>
            @include('dashboard.parts._error')
            @include('dashboard.parts._success')
            <form action="{{ route('register') }}" method="post">
                @csrf
                <label for="">Name</label>
                <input class="form-control" placeholder="Enter Your Name" value="{{ old('name') }}" type="text" name="name" id="">
                <label for="">Email</label>
                <input class="form-control" placeholder="Enter Your Email" value="{{ old('email') }}" type="email" name="email" id="">
                <label for="">Phone</label>
                <input class="form-control" placeholder="Enter Your Phone" value="{{ old('phone') }}" type="number" name="phone" id="">
                <label for="">Password</label>
                <input class="form-control" placeholder="Enter  Password" type="password" name="password" id="">

                <label for="">Confirm password</label>
                <input class="form-control" placeholder="Enter confirm Password" type="password" name="confirm_password"
                    id="">

                <button type="submit" class="btn">Register</button>

                <p>aleardy have account ?<a href="{{ route('login') }}">SignIn</a></p>

            </form>
        </div>

    </div>
@endsection
