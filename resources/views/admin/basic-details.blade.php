@extends('layout.admin-app')
@section('adminContent')

<!-- main-content-wrap -->
<div class="main-content-wrap ">

    <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>{{ $sectionName }}</h3>
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <div class="text-tiny">Admin</div>
                </a>
            </li>
            <li>
                <i class="icon-chevron-right"></i>
            </li>
            @if ($title != "Index")
            <li>
                <a href="#">
                    <div class="text-tiny">{{$title}}</div>
                </a>
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


    <!-- form-basic-details -->
    @if (empty($pageData))
        <form class="tf-section-2 " action="{{ route('admin.basic-details.store', ['id' => $userId])}}" method="POST">
    @else
        <form class="tf-section-2 " action="{{route('admin.basic-details.update', ['id' => $userId])}}" method="POST">
    @endif
    @csrf
        <div class="wg-box">
            <fieldset class="name">
                <div class="body-title mb-10">Full name <span class="tf-color-1">*</span></div>
                <input class="mb-10" type="text" placeholder="Enter your name" name="name" tabindex="0" value="{{ !empty($pageData) ? old('name', $pageData->name) : old('name')}}"
                    aria-required="true" required="">
                @error('name')
                <p class="text-tiny mt-1 text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset class="email">
                <div class="body-title mb-10">Email<span class="tf-color-1">*</span></div>
                <input type="email" name="email" placeholder="Enter your Email" name="email" tabindex="0" value="{{ !empty($pageData) ? old('email', $pageData->email) : old('email')}}"
                    aria-required="true" required="">
                @error('email')
                <p class="text-tiny mt-1 text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset class="phone">
                <div class="body-title mb-10">Phone no. <span class="tf-color-1">*</span></div>
                <input type="text" placeholder="Enter your phone number" name="phone_no" tabindex="0" value="{{ !empty($pageData) ? old('phone_no', $pageData->phone_no) : old('phone_no')}}"
                    aria-required="true" required="">
                @error('phone_no')
                <p class="text-tiny mt-1 text-danger">{{ $message }}</p>
                @enderror
            </fieldset>

            <fieldset class="Bio">
                <div class="body-title mb-10">Short Bio<span class="tf-color-1">*</span></div>
                <textarea class="mb-10" name="short_bio" placeholder="Enter your short bio" tabindex="0" aria-required="true" required>{{ !empty($pageData) ? old('short_bio', $pageData->Short_bio) : old('short_bio') }}</textarea>
                @error('short_bio')
                <p class="text-tiny mt-1 text-danger">{{ $message }}</p>
                @enderror
            </fieldset>

        </div>
        <div class="wg-box">

            <div class="gap22 cols">
            @php
                $dobFormatted = !empty($pageData) ? \Carbon\Carbon::parse($pageData->dob)->format('Y-m-d') : old('dob');
            @endphp

            <fieldset class="category">
                <div class="body-title mb-10">Date of Birth <span class="tf-color-1">*</span></div>
                <div class="select">
                    <input type="date" id="dob" name="dob" value="{{ $dobFormatted }}" tabindex="0" aria-required="true" required="">
                    @error('dob')
                    <p class="text-tiny mt-1 text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </fieldset>

                <fieldset class="male">
                    <div class="body-title mb-10">Gender <span class="tf-color-1">*</span></div>
                    <div class="select">
                        <select class="" name="gender" required>
                            <option value="">-- select gender --</option>
                            <option value="Male" {{ !empty($pageData) && old('gender', $pageData->gender) === 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ !empty($pageData) && old('gender', $pageData->gender) === 'Female' ? 'selected' : '' }}>Female</option>
                            <option value="Other" {{ !empty($pageData) && old('gender', $pageData->gender) === 'Other' ? 'selected' : '' }}>Other</option>
                        </select>

                        @error('gender')
                        <p class="text-tiny mt-1 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
            </div>

            <fieldset class="Address">
                <div class="body-title mb-10">Address <span class="tf-color-1">*</span></div>
                <textarea class="mb-10" name="address" placeholder="Enter your address" tabindex="0" aria-required="true" required>{{ !empty($pageData) ? old('address', $pageData->address) : old('address') }}</textarea>

                @error('address')
                <p class="text-tiny mt-1 text-danger">{{ $message }}</p>
                @enderror
            </fieldset>

            <fieldset class="cta">
                <div class="body-title mb-10"> Call to Action<span class="tf-color-1">*</span></div>
                <input class="mb-10" type="text" placeholder="Enter your call to action" name="cta" tabindex="0"
                    value="{{ !empty($pageData) ? old('cta', $pageData->cta) : old('cta','Let\'s  Work Together')}}" aria-required="true" required="">
                @error('cta')
                <p class="text-tiny mt-1 text-danger">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="cols gap10">

            @if (empty($pageData))
                <button class="tf-button w-full" type="submit">Save</button>
            @else
                <button class="tf-button w-full" type="submit">Update</button>
            @endif

            </div>
        </div>
    </form>
    <!-- /form-add-product -->

</div>
<!-- /main-content-wrap -->

@endsection