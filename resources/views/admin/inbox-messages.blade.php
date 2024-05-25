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
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <form action="{{ route('admin.achievements.destroy', ['id' => $data->id]) }}" method="POST" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn" onclick="return confirmDelete()" style="background:none; border:none; padding:0; margin:0; color:red; cursor:pointer;">
                                        <div class="item">
                                            <i class="icon-trash-2"></i>
                                            </div>
                                        </button>
                                    </form>
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