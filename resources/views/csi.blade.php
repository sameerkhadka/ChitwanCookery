@extends('layouts.app')
@section('content')

        <div class="banner" style="background: url({{Voyager::image($data->banner_image)}});">
            <div class="overlay banner-overlay"></div>

            <div class="banner-text">
                <p class="small-heading">Affiliation Partners</p>
                <h2>{{$data->title}}</h2>
            </div>
        </div>

            <div class="part-body">
                <div class="main-text">
                    <h4>{{$data->introduction}}</h4>
                </div>
                
            @if($data->image || $data->description)
                <div class="intro csi fl-equal">
                    <div class="block-content">
                        <div class="block-img" style="background: url({{Voyager::image($data->image)}})"></div>
                    </div>

                    <div class="block-content">
                        <div class="text">
                            <p>{{$data->description}}</p>
                        </div>
                    </div>
                </div>
            @endif
         </div>
        
@endsection