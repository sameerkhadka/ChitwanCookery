@extends('layouts.app')
@section('content')
        <div class="contact">
            <div class="contact-head">
                <h2>Contact Us</h2>
            </div>

            <div class="contact-wrap fl-equal">
                <div class="block-content">
                    <div class="wrap">
                        <div class="contact-text fl-equal">
                            <div class="c-wrap flex-fill">
                                <h5>Office</h5>
                                <p>{{setting('contact-us.address')}}</p>
                            </div>

                            <div class="c-wrap flex-fill">
                                <h5>Contact</h5>
                                <p>
                                    <a href="tel:{{setting('contact-us.number')}}">{{setting('contact-us.number')}}</a>
                                    <a href="mailto:{{setting('contact-us.email')}}">{{setting('contact-us.email')}}</a>
                                </p>
                            </div>

                            <div class="c-wrap flex-fill">
                                <h5>Follow Us</h5>
                                <a href="{{setting('social-media.facebook') ? setting('social-media.facebook') : "#"}}" @if(setting('social-media.instagram')) target="blank" @endif><i class="fab fa-facebook-f"></i></a>
                                <a href="{{setting('social-media.instagram') ? setting('social-media.instagram') : "#"}}" @if(setting('social-media.instagram')) target="blank" @endif><i class="fab fa-instagram"></i></a>
                                <a href="{{setting('social-media.twitter') ? setting('social-media.twitter') : "#"}}" @if(setting('social-media.twitter')) target="blank" @endif><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>

                        <div class="contact-form">
                            <h5>Write to us</h5>
                            
                            <input type="text" placeholder="Full Name *">

                            <input type="email" placeholder="Email *">

                            <input type="number" placeholder="Contact Number *">

                            <textarea name="" placeholder="Comment *"></textarea>

                            <button>Send</button>

                        </div>
                    </div>
                </div>

                <div class="block-content">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2971.6053775050877!2d84.42611682283396!3d27.659980498171763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fbf5a7d95ae9%3A0x8ad472f415f7d183!2sChitwan%20College%20of%20Cookery!5e0!3m2!1sen!2snp!4v1633583320989!5m2!1sen!2snp"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>


@endsection