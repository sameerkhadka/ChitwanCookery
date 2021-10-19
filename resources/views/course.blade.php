@extends('layouts.app')
@section('content')

        <div class="banner" style="background: url({{Voyager::image($data->image)}});">
            <div class="overlay banner-overlay"></div>

            <div class="banner-text">
                <p class="small-heading">Courses</p>
                <h2>{{$data->title}}</h2>

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