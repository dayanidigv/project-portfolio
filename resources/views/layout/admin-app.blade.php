@extends('layout.app')
@section('body')

<div id="wrapper"> 
    <div id="page" class="">
        <div class="layout-wrap">
            <!-- preload -->
            <div id="preload" class="preload-container">
                <div class="preloading">
                    <span></span>
                </div>
            </div>
            <!-- /preload -->
            <div class="section-menu-left">
                <div class="box-logo">
                    <a href="/admin" id="site-logo-inner"><h3> Portfolio </h3></a>
                    <div class="button-show-hide">
                        <i class="icon-menu-left"></i>
                    </div>
                </div>
                <div class="center">
                    <div class="center-item">
                        <ul class="menu-list">
                            <li class="menu-item active mb-5 text-center">
                                <a href="{{ route('admin.public_page_url') }}" class="">
                                    <h1 class="text">Public Page URL</h1>
                                </a>
                            </li>
                            <li class="menu-item has-children {{ $title == 'Home' ? 'active' :  '' }}">
                                <a href="javascript:void(0);" class="menu-item-button">
                                    <div class="icon"><i class="icon-grid"></i></div>
                                    <div class="text">Home</div>
                                </a>
                                <ul class="sub-menu">
                                    <li class="sub-menu-item">
                                        <a href="{{ route('admin.basic-details') }}"
                                            class="{{ $sectionName == 'Basic Details' ? 'active' : '' }}">
                                            <div class="text">Basic Details</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item has-children {{ $title == 'About' ? 'active' :  '' }}">
                                <a href="javascript:void(0);" class="menu-item-button">
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                    <div class="text">About</div>
                                </a>
                                <ul class="sub-menu">
                                    <li class="sub-menu-item">
                                        <a href="{{ route('admin.skills') }}"
                                            class="{{ $sectionName == 'Skills' ? 'active' : '' }}">
                                            <div class="text">Skills</div>
                                        </a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <a href="{{ route('admin.achievements') }}"
                                            class="{{ $sectionName == 'Achievements' ? 'active' : '' }}">
                                            <div class="text">Achievements</div>
                                        </a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <a href="{{ route('admin.testimonial') }}"
                                            class="{{ $sectionName == 'Testimonial' ? 'active' : '' }}">
                                            <div class="text">Testimonial</div>
                                        </a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <a href="{{ route('admin.awards') }}"
                                            class="{{ $sectionName == 'Awards' ? 'active' : '' }}">
                                            <div class="text">Awards</div>
                                        </a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <a href="{{ route('admin.publications') }}"
                                            class="{{ $sectionName == 'Publications' ? 'active' : '' }}">
                                            <div class="text">Publications</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item has-children {{ $title == 'Messages' ? 'active' :  '' }}">
                                <a href="javascript:void(0);" class="menu-item-button">
                                    <div class="icon">
                                    <i class="icon-message-square"></i>
                                    </div>
                                    <div class="text">Messages</div>
                                </a>
                                <ul class="sub-menu">
                                    <li class="sub-menu-item">
                                        <a href="{{ route('admin.messages.inbox') }}"
                                            class="{{ $sectionName == 'Inbox Messages' ? 'active' : '' }}">
                                            <div class="text">Inbox</div>
                                        </a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <a href="{{ route('admin.messages.archived') }}"
                                            class="{{ $sectionName == 'Archived Messages' ? 'active' : '' }}">
                                            <div class="text">Archived</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item {{ $sectionName == 'FAQs' ? 'active' : '' }}">
                                <a href="{{ route('admin.faqs') }}" class="">
                                    <div class="icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.7727 4.27031C15.025 3.51514 14.1357 2.91486 13.1558 2.50383C12.1758 2.09281 11.1244 1.87912 10.0617 1.875H10C7.84512 1.875 5.77849 2.73102 4.25476 4.25476C2.73102 5.77849 1.875 7.84512 1.875 10V14.375C1.875 14.8723 2.07254 15.3492 2.42417 15.7008C2.77581 16.0525 3.25272 16.25 3.75 16.25H5C5.49728 16.25 5.9742 16.0525 6.32583 15.7008C6.67746 15.3492 6.875 14.8723 6.875 14.375V11.25C6.875 10.7527 6.67746 10.2758 6.32583 9.92417C5.9742 9.57254 5.49728 9.375 5 9.375H3.15313C3.27366 8.07182 3.76315 6.83 4.56424 5.79508C5.36532 4.76016 6.44481 3.97502 7.67617 3.53169C8.90753 3.08836 10.2398 3.0052 11.5167 3.29196C12.7936 3.57872 13.9624 4.22352 14.8859 5.15078C16.0148 6.28539 16.7091 7.78052 16.8477 9.375H15C14.5027 9.375 14.0258 9.57254 13.6742 9.92417C13.3225 10.2758 13.125 10.7527 13.125 11.25V14.375C13.125 14.8723 13.3225 15.3492 13.6742 15.7008C14.0258 16.0525 14.5027 16.25 15 16.25H16.875C16.875 16.7473 16.6775 17.2242 16.3258 17.5758C15.9742 17.9275 15.4973 18.125 15 18.125H10.625C10.4592 18.125 10.3003 18.1908 10.1831 18.3081C10.0658 18.4253 10 18.5842 10 18.75C10 18.9158 10.0658 19.0747 10.1831 19.1919C10.3003 19.3092 10.4592 19.375 10.625 19.375H15C15.8288 19.375 16.6237 19.0458 17.2097 18.4597C17.7958 17.8737 18.125 17.0788 18.125 16.25V10C18.1291 8.93717 17.9234 7.88398 17.5197 6.90077C17.1161 5.91757 16.5224 5.02368 15.7727 4.27031ZM5 10.625C5.16576 10.625 5.32473 10.6908 5.44194 10.8081C5.55915 10.9253 5.625 11.0842 5.625 11.25V14.375C5.625 14.5408 5.55915 14.6997 5.44194 14.8169C5.32473 14.9342 5.16576 15 5 15H3.75C3.58424 15 3.42527 14.9342 3.30806 14.8169C3.19085 14.6997 3.125 14.5408 3.125 14.375V10.625H5ZM15 15C14.8342 15 14.6753 14.9342 14.5581 14.8169C14.4408 14.6997 14.375 14.5408 14.375 14.375V11.25C14.375 11.0842 14.4408 10.9253 14.5581 10.8081C14.6753 10.6908 14.8342 10.625 15 10.625H16.875V15H15Z"
                                                fill="#111111" />
                                        </svg>
                                    </div>
                                    <div class="text">FAQs</div>
                                </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="#" class="">
                                    <div class="icon"><i class="icon-log-out"></i></div>
                                    <div class="text">
                                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="logout-button" style="background:none; border:none; padding:0; margin:0; color:inherit; cursor:pointer;">Logout</button>
                                        </form>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-content-right">
                <div class="header-dashboard">
                    <div class="wrap">
                        <div class="header-left">
                            <a href="/admin">
                                <h3> Portfolio </h3>
                            </a>
                            <div class="button-show-hide">
                                <i class="icon-menu-left"></i>
                            </div>
                        </div>
                        <div class="header-grid ">
                            <div class="header-item button-dark-light">
                                <i class="icon-moon"></i>
                            </div>
                            <div class="header-item button-zoom-maximize">
                                <div class="">
                                    <i class="icon-maximize"></i>
                                </div>
                            </div>
                            <div class="cursor-pointer popup-wrap noti type-header" data-bs-toggle="offcanvas">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                @if(!empty($unReadMessages))
                                                    <span class="text-tiny">{{count($unReadMessages)}}</span>
                                                @endif
                                                <i class="icon-message-square"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton1" >
                                            <li>
                                                <h6>Message</h6>
                                            </li>
                                            @if (!empty($unReadMessages))
                                                @foreach ( $unReadMessages as $message)
                                                <li>
                                                    <div class="noti-item w-full wg-user active">
                                                        <div class="flex-grow">
                                                            <div class="flex items-center justify-between">
                                                                <a href="{{route('admin.messages.inbox')}}?option=view&id={{$message->id}}" class="body-title">{{$message->subject}}</a>
                                                                <div class="time">{{ \Carbon\Carbon::parse($message->received_at)->format('M d, Y, h:i A') }}</div>
                                                            </div>
                                                            <div class="text-tiny">{{$message->message}}</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                                <li><a href="{{route('admin.messages.inbox')}}" class="tf-button w-full">View all</a></li>
                                            @else
                                                <li>
                                                    <div class="noti-item w-full wg-user active">
                                                        <div class="flex-grow">
                                                            <div class="flex items-center justify-between">
                                                                <div  class="body-title">No new messages available.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                            </div>
                            <div class="popup-wrap user type-header">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="header-user wg-user">
                                            <span class="header-item">
                                                <i class="icon-user"></i>
                                            </span>
                                            <span class="flex flex-column">
                                                    <span class="body-title mb-2">{{$userName}}</span>
                                                    <span class="text-tiny">Admin</span>
                                                </span>
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end has-content"
                                        aria-labelledby="dropdownMenuButton3">
                                        <li>
                                            <a href="#" class="user-item">
                                                <div class="icon">
                                                    <i class="icon-log-out"></i>
                                                </div>
                                                <form action="{{ route('logout') }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    <button type="submit" style="background:none; border:none; padding:0; margin:0; color:inherit; cursor:pointer;">Logout</button>
                                                </form>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="main-content-inner ">
                        @yield('adminContent')
                    </div>
                    @section('style')
                    <style>
                        .bottom-page {
                            display: flex;
                            flex-direction: column;
                            justify-content: space-between;

                        }

                        .body-text {
                            margin: 5px 0;
                        }

                        .logo-container {
                            display: flex;
                            justify-content: center;
                            margin-top: 10px;
                        }

                        .logo {
                            max-width: 100px;
                            height: auto;
                        }

                        /* Responsive adjustments */
                        @media (min-width: 576px) {
                            .bottom-page {
                                flex-direction: row;
                                justify-content: space-between;
                            }

                            .body-text {
                                margin: 5px 20px;
                            }

                            .logo-container {
                                margin-top: 0;
                            }
                        }
                    </style>
                    @endsection
                    <div class="bottom-page">
                        <div class="body-text">
                            Design & Developed by <b class="ml-1"><a
                                    href="https://innak-crew.github.io/links?redirect=linkedin" target="_blank"
                                    rel="noopener noreferrer">innak</a></b>
                        </div>
                        <div class="body-text logo-container">
                            <a href="https://innak-crew.github.io/links?redirect=linkedin" target="_blank"
                                rel="noopener noreferrer">
                                <img src="https://innak-crew.github.io/innak-logo/rec/Innak-Transprent.png" alt="innak"
                                    class="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('wrapper')
</div>
<!-- /#wrapper -->
@endsection
@section('script')
<script src="{{ asset('js/zoom.js') }}"></script>
<script src="{{ asset('js/apexcharts/apexcharts.js') }}"></script>
<!-- <script src="{{ asset('js/switcher.js') }}"></script> -->
<script src="{{ asset('js/theme-settings.js') }}"></script>
@endsection