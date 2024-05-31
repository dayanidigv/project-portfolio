@extends('layout.portfolio')
@section('main')
<section class="content-box-area mt-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-4">
                <div class="card profile-card">
                    <div class="card-body">
                        <div class="image text-center">
                            <!-- <img src="img/images/profile.png" alt="profile"> -->
                            @if($user->publicName == "dayanidi")
                             <img src="/profile/dayanidi.png" alt="profile" height="250px">
                            @endif
                        </div>
                        <div class="text">
                            <h3 class="card-title">{{ $user->name }} 👋</h3>
                            <p>{{$user->Short_bio}}</p>
                            <div class="common-button-groups">
                                @if ($user->phone_no != null)
                                <a class="btn btn-call" href="tel:{{$user->phone_no}}">
                                    <svg class="icon" width="25" height="24" viewBox="0 0 25 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.5 4H9.5L11.5 9L9 10.5C10.071 12.6715 11.8285 14.429 14 15.5L15.5 13L20.5 15V19C20.5 19.5304 20.2893 20.0391 19.9142 20.4142C19.5391 20.7893 19.0304 21 18.5 21C14.5993 20.763 10.9202 19.1065 8.15683 16.3432C5.3935 13.5798 3.73705 9.90074 3.5 6C3.5 5.46957 3.71071 4.96086 4.08579 4.58579C4.46086 4.21071 4.96957 4 5.5 4Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M15.5 7C16.0304 7 16.5391 7.21071 16.9142 7.58579C17.2893 7.96086 17.5 8.46957 17.5 9"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M15.5 3C17.0913 3 18.6174 3.63214 19.7426 4.75736C20.8679 5.88258 21.5 7.4087 21.5 9"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    Make A call
                                </a>
                                @endif

                                <button class="btn btn-copy" data-clipboard-text="{{ $user->email }}">
                                    <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 10C8 9.46957 8.21071 8.96086 8.58579 8.58579C8.96086 8.21071 9.46957 8 10 8H18C18.5304 8 19.0391 8.21071 19.4142 8.58579C19.7893 8.96086 20 9.46957 20 10V18C20 18.5304 19.7893 19.0391 19.4142 19.4142C19.0391 19.7893 18.5304 20 18 20H10C9.46957 20 8.96086 19.7893 8.58579 19.4142C8.21071 19.0391 8 18.5304 8 18V10Z"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M16 8V6C16 5.46957 15.7893 4.96086 15.4142 4.58579C15.0391 4.21071 14.5304 4 14 4H6C5.46957 4 4.96086 4.21071 4.58579 4.58579C4.21071 4.96086 4 5.46957 4 6V14C4 14.5304 4.21071 15.0391 4.58579 15.4142C4.96086 15.7893 5.46957 16 6 16H8"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Copy Email
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card content-box-card">
                    <div class="card-body">
                        <div class="top-info">
                            <div class="text">
                                <h1 class="main-title">Hi, This Is <span>{{ $user->name }}</span></h1>
                                <p>{{$user->Short_bio}}</p>
                            </div>
                        </div>

                        
                        <!-- Counter -->
                        <div class="container mt-5">
                            @if(!empty($user->achievements))
                                <div class="row">
                                    @foreach($user->achievements as $data)
                                        <div class="col-6 col-md-4 col-lg-2 col-xl-3 mb-4 gap-4">
                                            <h3 class="achievement-number">{{$data->achievements_value}}+</h3>
                                            <p class="achievement-subtitle">{{$data->achievements_name}}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <!-- Skills -->
                        @if($user->skills != null)
                        <div class="working-with-area">
                            <h2 class="main-common-title">Skills
                            </h2>
                            <div class="working-with-main">
                                @foreach ($user->skills as $skill)
                                    @if ($skill->url != null)
                                        <div class="items">
                                            <img src="{{$skill->url}}" alt="notion">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- work together slider -->
                        <div class="work-together-slider">
                            <div class="slider-main d-flex gap-4 align-items-center">
                                <div class="slider-item">
                                    <a href="contact.html">{{$user->cta}}</a>
                                    <a href="contact.html">{{$user->cta}}</a>
                                </div>
                                <div class="slider-item">
                                    <a href="contact.html">{{$user->cta}}</a>
                                    <a href="contact.html">{{$user->cta}}</a>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection