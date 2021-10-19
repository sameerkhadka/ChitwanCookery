@extends('layouts.app')
@section('content')
        <div class="banner" style="background: url({{Voyager::image($data->image)}});">
            <div class="overlay banner-overlay"></div>

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

        <div class="join" style='background:url({{asset('images/bg.jpg')}}) ;'>
            <div class="overlay join-overlay"></div>
            <div class="text">
                <p class='small-heading'>{{$data->enrollment_title}}</p>
                <h4>{{$data->enrollment_subtitle}}</h4>
                <p>{{$data->enrollment_description}}</p>

                <a href="{{url('/how-to-apply/#section-intake')}}">Upcoming Intakes</a>

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

     @endsection