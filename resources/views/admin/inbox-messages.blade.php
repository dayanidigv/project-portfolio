@extends('layout.admin-app')
@section('adminContent')

<div class="main-content-wrap ">

<div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>{{ $sectionName }}</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="{{ route('admin.dashboard') }}"><div class="text-tiny">Admin</div></a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                @if ($title != "Index")
                    <li>
                        <a href="#"><div class="text-tiny">{{$title}}</div></a>
                    </li>
                    <li> 
                        <i class="icon-chevron-right"></i>
                    </li>
                @endif
                <li>
                    <div class="text-tiny">{{ $sectionName }}</div>
                </li>
            </ul>
        </div>

        <?php
                $option = request()->query('option');
                $id = request()->query('id');
        ?>


    <div class="tf-section-1 ">
        <div class="wg-box">
            <div class="wg-table table-all-attribute">
                <ul class="table-title flex gap20 mb-14">
                    <li>
                        <div class="body-title">Name</div>
                    </li>
                    <li>
                        <div class="body-title">Subject</div>
                    </li>
                    <li>
                        <div class="body-title">Messages</div>
                    </li>
                    <li>
                        <div class="body-title">Action</div>
                    </li>
                </ul>
                <ul class="flex flex-column">
                    @if (!empty($unReadMessages))
                        @foreach ($unReadMessages as $data)
                            <li class="attribute-item flex items-center justify-between gap20">
                                <div class="body-text">{{ $data->name }}</div>
                                <div class="body-text">{{ $data->subject }}</div>
                                <div class="body-text">{{ $data->message }}</div>
                                <div class="list-icon-function">
                                <a href="?&option=view&id={{ $data->id }}">
                                    <div class="item eye">
                                        <div class="cursor-pointer">
                                            <i class="icon-eye"></i>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            </li>
                        @endforeach
                    @else
                    <li class="attribute-item flex items-center justify-between gap20">
                        <div class="body-text">No Messages Available</div>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection


@section('wrapper')

@if ($option == "view")
<div class="show offcanvas offcanvas-end" tabindex="-1" id="offcanvasUpdate">
    <div class="offcanvas-header">
        <h6 id="offcanvasRightLabel">View Message</h6>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        
        <form action="{{route('admin.inbox.make-as-read', ['messageID' => $id]) }}"
            method="POST" class="delete-form">
            @csrf
            <button type="submit" class="delete-btn btn-danger" >
                <div class="item">
                    Make as read 
                </div>
            </button>
        </form>
        <form class="tf-section-1 ">
            <div class="wg-box">
                @if (!empty($unReadMessages))
                @foreach ($unReadMessages as $data)
                @if ( $data->id == $id)
                <div class="body-title mb-10">Message received at {{ \Carbon\Carbon::parse($data->received_at)->format('F j, Y, g:i a') }}</div>
                <fieldset class="name">   
                    <div class="body-title mb-10">Name</div>
                    <input class="flex-grow" type="text"  
                        tabindex="0" value="{{ $data->name }}"
                        aria-required="true" disabled>
                </fieldset>
                <fieldset class="value">
                    <div class="body-title mb-10">Email</div>
                    <input class="flex-grow" type="email" 
                        tabindex="0" value="{{ $data->email }} "
                        aria-required="true" disabled>
                </fieldset>
                <fieldset class="value">
                    <div class="body-title mb-10">Subject</div>
                    <input class="flex-grow" type="text" 
                        tabindex="0" value="{{ $data->subject }} "
                        aria-required="true" disabled>
                </fieldset>
                <fieldset class="message">
                    <div class="body-title mb-10">Messages</div>
                    <textarea class="mb-10"  tabindex="0" aria-required="true" disabled>{{ $data->message }}</textarea>
                </fieldset>
                @endif
                @endforeach
                @endif
            </div>
        </form>
    </div>
</div>
@endif


@endsection