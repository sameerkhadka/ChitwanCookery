@extends('layouts.app')
@section('content')

        <div class="banner" >
            <div class="overlay banner-overlay"></div>

            <video autoplay muted loop  class="banner-video">
                <source src="{{asset('images/banner.mp4')}}" type="video/mp4">
            </video>
            <div class="banner-text">
                <p class="small-heading">Courses</p>
                <h2>{{$data->title}}</h2>

                <div class="text dwnld">
                    <a href="" target="_blank">Download course brochure</a>
                </div>

                @if($data->status == 1)
                    <div class="text if-active">
                        <p>{{$data->date}}</p>
                        <a href="{{$data->Link ? $data->Link : "#" }}" @if($data->Link) target="blank" @endif>Apply Now</a>
                    </div>
                @endif
            </div>
        </div>

        @if($data->introduction)
            <div class="course-overview">
                {!!$data->introduction!!}
            </div>
        @endif

        @if($data->details)
            <div class="course-content ">
            
                <div class="block-content">
                        {!!$data->details!!}
                </div>
            </div>
        @endif
        
        @if($data->method_title)
            <div class="detail-list">
                <h4>{{$data->method_title}}</h4> 
                {!!$data->description!!}
            </div>
        @endif
  
        @if($data->table)
            <div class="course-structure">
                {!!$data->table!!}
            </div>
        @endif

@endsection