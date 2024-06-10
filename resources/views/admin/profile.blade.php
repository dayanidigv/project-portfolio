@extends('layout.admin-app')
@section('adminContent')

    <!-- main-content-wrap -->
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

        
        <div class="row">
            <div class="col-12 col-md-6 mx-auto">
                <div class="wg-box">
                    <div>
                        <div class="body-title mb-10">Profile Picture</div>
                            @if (isset($pageData->BasicDetails))
                                @if (!empty($pageData->BasicDetails->profile_picture))
                                    <div class="upload-image style-1 mb-16">
                                        <div class="item mx-auto">
                                            <img src="{{$pageData->BasicDetails->profile_picture}}" alt="" id="profile">
                                        </div>
                                    </div>
                                    <div class="upload-image style-1 mb-16">
                                        <div class="item up-load mx-auto">
                                            <label class="uploadfile" for="myFile">
                                                <div class="icon">
                                                    <i class="icon-upload-cloud"></i>
                                                </div>
                                                <div class="text-tiny">
                                                    <!-- Drop your images here or select  -->
                                                    <span class="tf-color">click to browse</span></div>
                                                <form action="{{route('admin.profile.update',["encodeId" => base64_encode($pageData->BasicDetails->id)])}}" method="post" enctype="multipart/form-data">  
                                                    @csrf
                                                    <input type="file" id="myFile" name="image">
                                                    @error('image')
                                                    <p class="text-tiny mt-1 text-danger">{{ $message }}</p>
                                                    @enderror
                                                </form>
                                            </label>
                                        </div>
                                    </div>
                                @else
                                    <div class="upload-image style-1 mb-16">
                                        <div class="item up-load mx-auto">
                                            <label class="uploadfile" for="myFile">
                                                <div class="icon">
                                                    <i class="icon-upload-cloud"></i>
                                                </div>
                                                <div class="text-tiny">
                                                    <!-- Drop your images here or select  -->
                                                    <span class="tf-color">click to browse</span></div>
                                                <form action="{{route('admin.profile.update',["encodeId" => base64_encode($pageData->BasicDetails->id)])}}" method="post" enctype="multipart/form-data">  
                                                    @csrf
                                                    <input type="file" id="myFile" name="image">
                                                    @error('image')
                                                    <p class="text-tiny mt-1 text-danger">{{ $message }}</p>
                                                    @enderror
                                                </form>
                                            </label>
                                        </div>
                                    </div>
                                @endif
                            @else
                            <div class="road-map">
                                <div class="road-map-item {{$pageData->BasicDetails != null ? 'active' : ''}}">
                                    <div class="icon"><i class="icon-check"></i></div>
                                    <h6>Basic Details</h6>
                                    <div class="body-text">Pending</div>
                                    <a class="body-text text-primary" href="{{route('admin.basic-details')}}">Click here to complete</a>
                                </div>
                                <div class="road-map-item">
                                    <div class="icon"><i class="icon-check"></i></div>
                                    <h6>Profile</h6>
                                    <div class="body-text">Pending</div>
                                </div>
                            </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /main-content-wrap -->


@endsection


@push('script')
    <script>
    document.getElementById("myFile").addEventListener('change', (e) => {
        const fileInput = e.target;
        const file = fileInput.files[0];
        if (file) {
            fileInput.closest('form').submit();
        }
    });
    </script>
@endpush

