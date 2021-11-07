@extends('layouts.app')
@section('content')
        <!-- <div class="banner" style="background: url(./images/about-banner.jpg);">
            <div class="overlay banner-overlay"></div>

            <div class="banner-text">
                <p class="small-heading">Gallery</p>
                <h2>Soft Opening</h2>
            </div>
        </div> -->

        <div class="gallery-banner">
            <div class="banner-text">
                <p class="small-heading">Gallery</p>
                <h2>Soft Opening</h2>
            </div>
            <div class="overlay banner-overlay"></div>
            <div class="banner-slider owl-carousel" >
                @foreach(json_decode($data->images) as $img)
                    <div class="item">
                        <img src="{{asset('storage/' . $img)}}" alt="">
                    </div>
                @endforeach
    
                <!-- <div class="item">
                    <img src="./images/cookery-banner.jpg" alt="">
                </div>
    
                <div class="item">
                    <img src="./images/cookery-detail.jpg" alt="">
                </div>
    
                <div class="item">
                    <img src="./images/join-banner.jpg" alt="">
                </div> -->
            </div>


        </div>


        <section class="gallery-img">
        @foreach(json_decode($data->images) as $img)
            <figure>
                <a href="{{asset('storage/' . $img)}}" data-lightbox="soft-opening"><img src="{{asset('storage/' . $img)}}" alt=""></a>
            </figure>
        @endforeach
        </section>

@endsection