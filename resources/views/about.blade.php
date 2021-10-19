@extends('layouts.app')
@section('content')
        @php $item = \App\Page::where('id','2')->first(); @endphp
        <div class="banner" style="background: url({{asset('storage/pages/October2021/' . $item->image)}});">
            <div class="overlay banner-overlay"></div>

            <div class="banner-text">
                <p class="small-heading">{{$item->title}}</p>
                <h2>{{$item->description}}</h2>
            </div>
        </div>

        <div class="abt-alt">
            @foreach($data as $item)
                <div class="intro fl-equal">
                    <div class="block-content">
                        <div class="text">
                        
                            <h4>{{$item->title}}</h4>
                            {!!$item->description!!}
        
                            
        
                        </div>
                    </div>
        
                    <div class="block-content">
                        <div class="block-img" style="background: url({{Voyager::image($item->image)}})"></div>
                    </div>
                </div>
            @endforeach
    
            {{-- <div class="intro fl-equal">
                <div class="block-content">
                    <div class="text">
                       
                        <h4>Our Vision</h4>
                        <p>
                            To address the growing requirement of young professional in culinary world and be
                            internationally recognized for our excellence backed by extraordinary faculty and facilities at our
                            school.
                        </p>
    
                    </div>
                </div>
    
                <div class="block-content">
                    <div class="block-img" style="background: url(./images/vision.JPG)"></div>
                </div>
            </div>
    
            <div class="intro fl-equal">
                <div class="block-content">
                    <div class="text">
                       
                        <h4>Brand Promise</h4>
                        <p>
                            Our professional and experienced educators are committed to ensuring the
                            best outcomes for students. To provide flexible delivery modes, developing industry
                            accredited resources to meet students and employer expectations
                        </p>
    
                    </div>
                </div>
    
                <div class="block-content">
                    <div class="block-img" style="background: url(./images/promise.jpg)"></div>
                </div>
            </div>

            <div class="intro fl-equal">
                <div class="block-content">
                    <div class="text">
                       
                        <h4>Core Values</h4>
                        <ul>
                            <li>
                                <h4>Integrity</h4>
                                <p>We conduct ourselves ethically, equitably and for mutual benefit</p>
                            </li>

                            <li>
                                <h4>Integrity</h4>
                                <p>We conduct ourselves ethically, equitably and for mutual benefit
                                    Mutual respect and diversity - We promote diversity through our people, ideas and
                                    culture creating an inclusive environment.
                                </p>
                            </li>

                            <li>
                                <h4>Customer Service</h4>
                                <p>Deliver through service</p>
                            </li>

                            <li>
                                <h4>Accountability </h4>
                                <p>For actions and conduct in the workplace</p>
                            </li>
                        </ul>
    
                    </div>
                </div>
    
                <div class="block-content">
                    <div class="block-img" style="background: url(./images/intro.jpg)"></div>
                </div>
            </div> --}}
        </div>
@endsection