@extends('layouts.app')
@section('content')

        <div class="banner" style="background: url({{Voyager::image($data->banner_image)}});">
            <div class="overlay banner-overlay"></div>

            <div class="banner-text">
                <p class="small-heading">{{$data->title}}</p>
                <h2>{{$data->subtitle}}</h2>
            </div>
        </div>

        <div class="abt-alt join-inner">
            <div class="intro fl-equal">
                <div class="block-content">
                    <div class="text">
                       
                        <h4>{{$data->process_title}}</h4>
                        {!!$data->process_description!!}

                        <a href="{{$data->button_link ? $data->button_link : "#"}}" @if($data->button_link) target="blank" @endif>{{$data->button_text}}</a>
    
                        
    
                    </div>
                </div>
    
                <div class="block-content">
                    <div class="block-img" style="background: url({{Voyager::image($data->process_image)}})"></div>
                </div>
            </div>
    
            <div class="intro fl-equal">
                <div class="block-content join-block">
                    <div class="text">
                       
                        <h4>Fee & Intake</h4>
                        <p>
                            Please fill out the form down below or directly contact the administration section to receive the
                            more fee details with suitable payment option
                        </p>
    
                    </div>

                    <div class="join-form">
                       
                        <div class="join-card">
                            <input type="text" placeholder="Full Name">
                        </div>
                    
                        <div class="join-card">
                            <input type="text" placeholder="Address">
                        </div>
                    

                        <div class="join-card">
                            <input type="email" placeholder="Email">
                        </div>

                        <div class="join-card">
                            <input type="number" placeholder="Phone">
                        </div>

                        <div class="join-card">
                            <textarea placeholder="Queries"></textarea>
                        </div>

                        <div class="join-card">
                            <div class="text">
                                <a href="">Send</a>
                            </div>
                        </div>
                     
                    </div>
                </div>
    
                <div class="block-content">
                    <div class="block-img" style="background: url({{Voyager::image($data->fee_image)}})"></div>
                </div>
            </div>

            <section id="section-intake">
                <div class="partner " id="intake">
                    <div class="partner-head">
                        <h2>Upcoming Intakes</h2>
                    </div>

                    <div class="intakes">
                        <div class="row">
                        @foreach($courses as $course)
                            <div class="col-md-3">
                                <div class="intake-card">
                                    <img src="{{Voyager::image($course->homepage_image)}}" alt="">
                                    <div class="text">
                                        <h5>{{$course->title}}</h5>
                                        {!! substr($course->introduction,0,233) !!}

                                            <div class="intake-time">
                                                <p>{{$course->date}}</p>
                                            </div>

                                        <a href="{{route('course.detail', $course->slug)}}">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                            {{-- <div class="col-md-3">
                                <div class="intake-card">
                                    <img src="{{asset('images/bakery.jpg')}}" alt="">
                                    
                                    <div class="text">
                                        <h5>Bakery</h5>
                                        <p>Bakery Course is designed to teach you the skills and requirements of preparing and serving bread and
                                            patisserie items for real customers in a live retail environment. This includes practical and theory training
                                            within a simulated cafe environment.</p>

                                            <div class="intake-time">
                                                <p>December 2021 - July 2022</p>
                                            </div>

                                            <a href="">Learn More</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>
    
        </div>


@endsection