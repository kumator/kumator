@extends('layouts.app')

@include('layouts.header')

@include('layouts.navbar')
<!-- /.mainmenu-area -->

<div class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sec-title colored text-center">
                <h2>Contact Us</h2>
                <span class="decor"><span class="inner"></span></span>
            </div>
        </div>
    </div>
</div>
<div class="contact-content sec-padding">
    <div class="container">

        <!-- <div class="google-map" id="contact-page-google-map" data-icon-path="" data-map-lat="41.85" data-map-lng=" -87.65" data-map-zoom="10" data-map-title="Envato HQ"></div> -->
        <div class="row">
            <div class="col-md-4">
                <h2>Address</h2>
                <ul class="contact-info">
                    <li>
                        <div class="icon-box">
                            <div class="inner">
                                <i class="fa fa-map-marker"></i>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4>Address</h4>
                            <p>4th Avenue Federal Housing Gonin/Gora,Kaduna. <br /> </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-box">
                            <div class="inner">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4>Phone</h4>
                            <p><br>Mobile: 08037023889</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-box">
                            <div class="inner">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4>Email</h4>
                            <p>vs@yahoo.com <br></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <h2>Contact Form</h2>
                <form action="{{url('/messages')}}" class="contact-form row" method="post">
                    {{ csrf_field() }}
                    @if(session('message'))
                        <div class="alert alert-info">{{ session('message')}}</div>
                    @endif
                    <div class="col-md-6">
                        <input type="text" name="fullname" placeholder="Full Name">
                        <input type="text" name="email_address" placeholder="Email">
                        <input type="text" name="phone_number" placeholder="Phone">
                    </div>
                    <div class="col-md-6">
                        <textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button class="thm-btn" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
