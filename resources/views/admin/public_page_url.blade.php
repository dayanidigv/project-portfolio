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

        @if(!empty($pageData))
            <div class="form-style-2 mb-5">
                <div class="wg-box">
                    <div class="left">
                        <h5 class="mb-4">URL Published</h5>
                    </div>
                    <div class="right flex-grow">
                        @foreach ( $pageData as $data )
                            <div class="block-success type-main w-full mb-24">
                                <i class="icon-chevrons-right"></i>
                                <div class="body-title-2">
                                    {{ route('index') }}/{{ $data->public_name }}
                                    <a href="{{ route('index') }}/{{ $data->public_name }}" target="_blank">
                                        <i class="icon-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        

        <form class="form-style-2" action="{{ route('admin.public_page_url.store', ['id' => $userId]) }}" method="POST">
            @csrf
            <div class="wg-box">
                <div class="left">
                    <div class="body-text"><h5 class="mb-4">Public</h5></div>
                    <div class="body-text">Fill in the fields below to create a new public page</div>
                </div>
                <div class="right flex-grow">
                    <fieldset class="name mb-24">
                        <div class="body-title mb-10">URL</div>
                        <input class="flex-grow" id="public_url" type="text" placeholder="Username" tabindex="0" value="{{route('index')}}/" aria-required="true" required="" disabled>
                    </fieldset>
                    <fieldset class="email mb-24">
                        <div class="body-title mb-10">Public name</div>
                        <input class="flex-grow" id="public_name" type="text" placeholder="Enter name for public page" name="public_name" tabindex="0" value="{{ old('public_name') }}" aria-required="true" required="">
                        <div class="text-tiny mt-1">Public name should be 255 characters long, without any whitespace or symbols.</div>
                        @error('public_name')
                            <div class="text-tiny text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </fieldset>
                    <button class="tf-button w208" type="submit">
                        Public Page
                    </button>
                </div>
                </div>
            </div>
        </form>

        

        @section("script")
             <script>
                document.getElementById('public_name').addEventListener("input",(e)=>{
                    document.getElementById("public_url").value = "{{route('index')}}/" + e.target.value;
                });
             </script>
        @endsection

    </div>
    <!-- /main-content-wrap -->

@endsection

