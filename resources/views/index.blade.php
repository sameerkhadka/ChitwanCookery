@extends('layouts.app')
@section('content')
        <div class="banner" >
            <div class="overlay banner-overlay"></div>

            @foreach(json_decode($data->image) as $video)
                <video autoplay muted loop  class="banner-video">
                    <source src="{{asset('storage/' . $video->download_link)}}" type="video/mp4">
                </video>
                @break;
            @endforeach

            <div class="banner-text">
                <p class="small-heading">{{$data->title}}</p>
                <h2>{{$data->heading}}</h2>
            </div>
        </div>

        <div class="intro fl-equal">
            <div class="block-content">
                <div class="text">
                    <p class='small-heading'>{{$data->action_title}}</p>
                    <h4>{{$data->action_subtitle}}</h4>
                    <p>{{$data->action_description}}</p>

                    <a href="{{route('about')}}">Learn More</a>

                </div>
            </div>

            <div class="block-content">
                <div class="block-img" style="background: url({{Voyager::image($data->action_image)}})"></div>
            </div>
        </div>

        <div class="courses fl-equal">
            @foreach($courses as $course)
                <div class="content flex-fill">
                    <div class="wrap" style='background: url({{Voyager::image($course->homepage_image)}})'>
                        <div class="text">
                            <h4>{{$course->title}}</h4>
                            <p>{!! substr($course->introduction,0,233) !!}</p>

                            <a href="{{route('course.detail', $course->slug)}}">Learn More</a>   
                        </div>
                    </div>
                    <div class="overlay culinary"></div>                

                </div>
            @endforeach
        </div>

        <div class="partner">
            <div class="partner-head">
                <h2>{{$data->partner_title}}</h2>

                <p>{{$data->partner_description}}</p>
            </div>

            <div class="wrap fl-equal">
                @foreach($partners as $partner)
                    <div class="content">
                        <div class="text">
                            <h5>{{$partner->title}}</h5>
                        </div>

                        <img src="{{Voyager::image($partner->homepage_image)}}" alt="">

                        <div class="text">
                            <p>
                               {{$partner->introduction}}
                            </p>

                            <a href="{{route('partner', $partner->slug)}}">Learn More</a>
                        </div>
                    </div> 
                @endforeach

                {{-- <div class="content">
                    <div class="text">
                        <h5>Global Institute of Professional Training</h5>
                    </div>

                    <img src="./images/gipt.jpg" alt="">

                    <div class="text">
                        <p>
                            Global Institute of Professional Training (GIPT) runs under the ownership of the
                            renowned educational brand Global College International (GCI). The college offers
                            general and professional management education in affiliation different Australian and
                            international domicile.
                        </p>

                        <a href="">Learn More</a>
                    </div>
                </div>  --}}
            </div>
        </div>

        <div class="testimonial">
            <div class="overlay test-bg" style='background:url({{asset('images/cookery-detail.jpg')}}) ;'></div>
            <div class="message-box owl-carousel">
                    <div class="item">
                        <div class="msg-content">
                            <img src="{{asset('images/Message-Sachin P. KC.jpg')}}" alt="">
                            <div class="text">
                                <p>“Hospitality Industry has provided me all that I am now. And though I might not be able to
                                    contribute all that I have received, but that does not stop me from being innovative and be a door
                                    opener for the future generation. With CCC I would like to try to give back to the hospitality
                                    industry of Nepal”
                                </p>
                                <h4>Mr. Sachin Pratap KC</h4>
                                <h6>Managing Director</h6>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                  

                        <div class="msg-content">
                            <img src="./images/Message-Chef Kumar Chalise.jpg" alt="">
                            <div class="text">
                                <p>“It gives me immense pleasure in inviting you to begin a career in culinary and
                                    hospitality industry with endless job opportunities through the CCC.  Here, we focus on overall
                                    life skill development of the individual, which is attained through perfect teaching
                                    methodologies adopted by the culinary trainer and soft skills faculties.”
                                </p>
                                <h4>Chef. Kumar Chalise</h4>
                                <h6>Culinary Head</h6>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="visit fl-equal">
            <div class="content">
                <div class="img-wrap">
                    <img src="{{Voyager::image($data->location_image)}}" alt="" class="img-top">
                    <img src="{{Voyager::image($data->location_qr)}}" alt="" class="qr-locaton">
                </div>
            </div>

            <div class="content">
                <div class="text">
                    <p class='small-heading'>{{$data->location_title}}</p>
                    <h4>{{$data->location_subtitle}}</h4>

                    {!! $data->location_description !!}

                    <img src="{{Voyager::image($data->location_qr)}}" alt="" class="qr-mb">

                    <a href="{{route('contact')}}">See Location</a>
                </div>
            </div>
        </div>

        <div class="join" style='background:url({{asset('images/bg.jpg')}}) ;'>
            <div class="overlay join-overlay"></div>
            <div class="text">
                <p class='small-heading'>{{$data->enrollment_title}}</p>
                <h4>{{$data->enrollment_subtitle}}</h4>
                <p>{{$data->enrollment_description}}</p>

                <a href="{{url('/how-to-apply/#section-intake')}}">Upcoming Intakes</a>

            </div>
        </div>

     @endsection