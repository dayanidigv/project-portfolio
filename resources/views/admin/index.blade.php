@extends('layout.admin-app')
@section('adminContent')

    <!-- main-content-wrap -->
    <div class="main-content-wrap ">

        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>{{ $sectionName }}</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="/admin"><div class="text-tiny">Admin</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">{{ $sectionName }}</div>
                    </li>
                </ul>
        </div>
        <div class="wg-box mb-20">
            <div>
                <h6 class="mb-10">Roadmap</h6>
                <div class="body-text">Please complete the following steps:</div>
            </div>
            <div class="road-map">
                <div class="road-map-item {{$pageData->BasicDetails != null ? 'active' : ''}}">
                    <div class="icon"><i class="icon-check"></i></div>
                    <h6>Basic Details</h6>
                    @if($pageData->BasicDetails != null )
                    <div class="body-text">Completed</div>
                    @else
                    <a class="body-text text-primary" href="{{route('admin.basic-details')}}">Click here to complete</a>
                    @endif
                </div>
                <div class="road-map-item {{$pageData->BasicDetails != null ? 'active' : ''}}">
                    <div class="icon"><i class="icon-check"></i></div>
                    <h6>Select Template</h6>
                    @if($pageData->BasicDetails != null )
                    <div class="body-text">Default</div>
                    @else
                    <div class="body-text">Not Selected</div> 
                    @endif
                    
                    
                </div>
                <div class="road-map-item {{$pageData->BasicDetails != null ? ($pageData->BasicDetails != null ? 'active' : '') : ''}}">
                    <div class="icon"><i class="icon-check"></i></div>
                    <h6>Page Publish</h6>
                    @if($pageData->BasicDetails != null )
                        @if($pageData->publishPage != null )
                            <div class="body-text">Published</div>
                            <a class="body-text text-primary" href="{{route('index')}}/{{$pageData->publishPage->public_name}}" target="_blank">Click here to view Page</a>
                        @else
                            <a class="body-text text-primary" href="{{route('admin.basic-details')}}">Click here to Publish</a>
                        @endif
                    @else
                        <div class="body-text">Pending</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

