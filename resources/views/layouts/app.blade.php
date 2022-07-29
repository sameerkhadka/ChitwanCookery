<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{setting('site.title')}}</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/fonts/canela/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/stilu/style.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
<body>
    <div class="site-menu">
        <div class="bar">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>

        <div class="menu">
            
            <div class="wrap">
                <div class="menu-det">
                    @php $item = \App\Page::where('id','1')->first(); @endphp
                    <div class="menu-head">
                        <img src="{{Voyager::image(setting('site.menulogo'))}}" alt="">

                        <div class="menu-text">
                            <h2>{{$item->title}}</h2>
                            <h6>{{$item->subtitle}}</h6>

                            <p>{{$item->description}}</p>
                        </div>

                        <div class="menu-contact">
                            <div class="phone">
                                <a href="tel:{{setting('contact-us.number')}}">{{setting('contact-us.number')}}</a>

                            </div>

                            <div class="socail">
                                <a href="{{setting('social-media.facebook') ? setting('social-media.facebook') : "#"}}" @if(setting('social-media.instagram')) target="blank" @endif><i class="fab fa-facebook-f"></i></a>
                                <a href="{{setting('social-media.instagram') ? setting('social-media.instagram') : "#"}}" @if(setting('social-media.instagram')) target="blank" @endif><i class="fab fa-instagram"></i></a>
                                <a href="{{setting('social-media.twitter') ? setting('social-media.twitter') : "#"}}" @if(setting('social-media.twitter')) target="blank" @endif><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>

                    

                    <div class="menu-bg" style="background-image: url({{Voyager::image($item->image)}})"></div>
                </div>

                <div class="menu-list">
                    <span class="menu-close"><i class="fas fa-times"></i></span>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a> </li>
                        <li><a href="{{route('about')}}">About</a> </li>
                        <li>
                            <a href="#" class="has-sub">
                                Affiliation Partners

                                <figure>
                                    <i class="fas fa-angle-down"></i>
                                </figure> 
                            </a>
                        
                            <ul class='sub-menu'>
                                @foreach($nav_partner as $partner)
                                <li><a href="{{route('partner', $partner->slug)}}">{{$partner->title}}</a></li>
                                @endforeach
                                {{-- <li><a href="">Global Institute of Professional Training</a></li> --}}
                            </ul>
                        </li>

                        <li>
                            <a href="" class="has-sub">Courses 
                                <figure>
                                    <i class="fas fa-angle-down"></i>
                                </figure> 
                            </a>   
                            <ul class="sub-menu">
                                @foreach($subjects as $subject)
                                <li><a href="{{route('course.detail', $subject->slug)}}">{{$subject->title}}</a></li>
                                @endforeach
                                {{-- <li><a href="">Barista</a></li>
                                <li><a href="">Bakery</a></li> --}}
                            </ul>
                        </li>

                        <li>
                            <a href="" class="has-sub">Gallery 
                                <figure>
                                    <i class="fas fa-angle-down"></i>
                                </figure> 
                            </a>   
                            <ul class="sub-menu">
                                @if($photos)
                                    @foreach($photos as $photo)
                                        <li><a href="{{route('gallery', $photo->slug)}}">{{$photo->title}}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>

                        <li>
                            <a href="{{route('apply')}}">How to apply</a>
                        </li>

                        <li>
                            <a href="{{route('contact')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="site-container">
        <header>
            <div class="logo">
                <a href="{{route('index')}}">
                    <img src="{{Voyager::image(setting('site.logo'))}}" alt="">
                </a>
            </div>

            <div class="call-btn">
                <a href="tel:{{setting('contact-us.number')}}"><i class="fas fa-phone"></i> {{setting('contact-us.number')}} </a>
            </div>
        </header>

    @yield('content')

        <footer>
            <div class="fl-equal">
                <div class="ft-card">
                    <div class="footer-logo">

                        <img src="{{Voyager::image(setting('site.logo'))}}" alt="">
                    </div>
                </div>

                <div class="ft-card">
                    <div class="footer-contact">
                        <a href="tel:{{setting('contact-us.number')}}">{{setting('contact-us.number')}}</a>
                        <a href="mailto:{{setting('contact-us.email')}}">{{setting('contact-us.email')}}</a>
                    </div>

                    <div class="talk">
                        <a href="{{ Request::segment(1) == "contact-us" ? "#" : route('contact') }}">Talk with us</a>
                    </div>
                </div>

                <div class="ft-card">
                    <div class="socail">
                        <a href="{{setting('social-media.facebook') ? setting('social-media.facebook') : "#"}}" @if(setting('social-media.instagram')) target="blank" @endif><i class="fab fa-facebook-f"></i></a>
                        <a href="{{setting('social-media.instagram') ? setting('social-media.instagram') : "#"}}" @if(setting('social-media.instagram')) target="blank" @endif><i class="fab fa-instagram"></i></a>
                        <a href="{{setting('social-media.twitter') ? setting('social-media.twitter') : "#"}}" @if(setting('social-media.twitter')) target="blank" @endif><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p> ©{{ now()->year }} Chitwan College of Cookery </p>

                <p>Powered by <a href="https://hueshine.com/" target="_blank">Hue Shine</a> </p>
            </div>
        </footer>
    </div>



    <script src='{{asset('js/jquery.min.js')}}'></script>
    @yield('toastr')
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>
</html>