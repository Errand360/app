@extends('layouts.landing.app')

@section('title','Landing Page | '.\App\Models\BusinessSetting::where(['key'=>'business_name'])->first()->value??'Stack Food')

@section('content')

    <main>
        <div class="main-body-div">
            <!-- Top Start -->
            <section class="top-start">
                <div class="container ">
                    <div class="row">
                        <div class="row col-lg-7 top-content">
                            <div>
                                <h3 class="d-flex justify-content-center justify-content-md-start text-center text-md-left">
                                    {{__('messages.header_title_1')}}
                                </h3>
                                <span
                                    class="d-flex justify-content-center justify-content-md-start text-center text-md-left">
                                     {{__('messages.header_title_2')}}
                                </span>
                                <h4 class="d-flex justify-content-center justify-content-md-start text-center text-md-left">
                                    {{__('messages.header_title_3')}}
                                </h4>
                            </div>

                            <div class="download-buttons">
                                <div class="play-store">
                                    <a href="https://play.google.com">
                                        <img src="{{asset('public/assets/landing')}}/image/play_store.png">
                                    </a>
                                </div>

                                <div class="apple-store">
                                    <a href="https://www.apple.com/app-store">
                                        <img src="{{asset('public/assets/landing')}}/image/apple_store.png">
                                    </a>
                                </div>

                                <div class="apple-store">
                                    <a href="#">
                                        <img src="{{asset('public/assets/landing')}}/image/browse.png">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div
                            class="col-lg-5 d-flex justify-content-center justify-content-md-end text-center text-md-right top-image">
                            <img src="{{asset('public/assets/landing')}}/image/double_screen_image.png">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Top End -->

         
            <!-- Trusted Customers Ends -->
        </div>
    </main>

@endsection
