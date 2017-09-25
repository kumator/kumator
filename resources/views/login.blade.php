@extends('layouts.app')
@include('layouts.header')
@include('layouts.navbar')

<div class="form">
    <form method="post" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="footer-widget contact-widget">
            @if(session('info'))
                <div class="alert alert-danger">{{ session('info') }}</div>
            @endif
            <form action="login.html" class="login-form" id="footer-cf" method="post">
                <input type="text" name="username" placeholder="username" value="{{old('username')}}">
                <input type="password" name="password" placeholder="password">
                <button>Login</button>
            </form>
        </div>
    </form>
</div>
