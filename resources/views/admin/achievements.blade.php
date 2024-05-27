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



    <div class="tf-section-1 ">
        <div class="wg-box">
            <div class="wg-box">
                <?php
                $option = request()->query('option');
                $id = request()->query('id');
                ?>

                <!-- <a href="?option=store">
                    <div class="cursor-pointer tf-button style-1 w208" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasStore">
                        <i class="icon-plus"></i> Add
                    </div>
                </a> -->

                <a href="?option=store">
                    <div class="cursor-pointer tf-button style-1 w208">
                        <i class="icon-plus"></i> Add
                    </div>
                </a>


            </div>

            <div class="wg-box">
                <div class="wg-table table-all-attribute">
                    <ul class="table-title flex gap20 mb-14">
                        <li>
                            <div class="body-title">Name</div>
                        </li>
                        <li>
                            <div class="body-title">Value</div>
                        </li>
                        <li>
                            <div class="body-title">Action</div>
                        </li>
                    </ul>
                    <ul class="flex flex-column">

                        @if (!empty($pageData))
                        @foreach ($pageData as $data)
                        <li class="attribute-item flex items-center justify-between gap20">
                            <div class="body-text">{{ $data->achievements_name }}</div>
                            <div class="body-text">{{ $data->achievements_value }}+</div>
                            <div class="list-icon-function">


                                <a href="?&option=view&id={{ $data->id }}">
                                    <div class="item eye">
                                        <div class="cursor-pointer">
                                            <i class="icon-eye"></i>
                                        </div>
                                    </div>
                                </a>

                                <a href="?page=achievements&option=edit&id={{ $data->id }}">
                                    <div class="item edit">

                                        <div class="cursor-pointer">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                    </div>
                                </a>
                                <form action="{{route('admin.achievements.destroy', ['id' => $data->id]) }}"
                                    method="POST" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn" onclick="return confirmDelete()"
                                        style="background:none; border:none; padding:0; margin:0; color:red; cursor:pointer;">
                                        <div class="item">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                    </button>
                                </form>

                            </div>
                        </li>
                        @endforeach
                        @endif
                        <script>
                            function confirmDelete() {
                                return confirm('Are you sure you want to delete this achievement?');
                            }
                        </script>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('wrapper')

@if ($option == "store")
<div class="show offcanvas offcanvas-end" tabindex="-1" id="offcanvasUpdate">
    <div class="offcanvas-header">
        <h6 id="offcanvasRightLabel">Add Achievements</h6>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <form class="tf-section-1 " action="{{route('admin.achievements.store', ['id' => $userId])}}" method="POST">
            @csrf
            <div class="wg-box">
                <fieldset class="name">
                    <div class="body-title mb-10">Achievements name <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Achievement name" name="achievements_name"
                        tabindex="0" value="{{ old('achievements_name') }}" aria-required="true">
                    @error('achievements_name')
                    <p class="error text-danger">{{ $message }}</p>
                    @enderror
                </fieldset>
                <fieldset class="name">
                    <div class="body-title mb-10">Achievements value <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Achievement value" name="achievements_value"
                        tabindex="0" value="{{ old('achievements_value') }}" aria-required="true">
                    @error('achievements_value')
                    <p class="error text-danger">{{ $message }}</p>
                    @enderror
                </fieldset>
                <button class="tf-button style-1 w208" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>

@elseif ($option == "edit")
<div class="show offcanvas offcanvas-end" tabindex="-1" id="offcanvasUpdate">
    <div class="offcanvas-header">
        <h6 id="offcanvasRightLabel">Update Achievements</h6>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <form class="tf-section-1 " action="{{route('admin.achievements.update', ['id'=> $id])}}" method="POST">
            @csrf
            <div class="wg-box">
                @if (!empty($pageData))
                @foreach ($pageData as $data)
                @if ( $data->id == $id)
                <fieldset class="name">
                    <div class="body-title mb-10">Achievements name <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Achievement name" name="achievements_name"
                        tabindex="0" value="{{ $data->id ? $data->achievements_name :  old('achievements_name') }}"
                        aria-required="true">
                    @error('achievements_name')
                    <p class="error text-danger">{{ $message }}</p>
                    @enderror
                </fieldset>
                <fieldset class="value">
                    <div class="body-title mb-10">Achievements value <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Achievement value" name="achievements_value"
                        tabindex="0" value="{{ $data->id ? $data->achievements_value :  old('achievements_value') }} "
                        aria-required="true">
                    @error('achievements_value')
                    <p class="error text-danger">{{ $message }}</p>
                    @enderror
                </fieldset>
                <button class="tf-button style-1 w208" type="submit">Update</button>
                @endif
                @endforeach
                @endif
            </div>
        </form>
    </div>
</div>

@elseif ($option == "view")
<div class="show offcanvas offcanvas-end" tabindex="-1" id="offcanvasUpdate">
    <div class="offcanvas-header">
        <h6 id="offcanvasRightLabel">View Achievements</h6>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form class="tf-section-1 " action="{{route('admin.achievements.update', ['id'=> $id])}}" method="POST">
            @csrf
            <div class="wg-box">
                @if (!empty($pageData))
                @foreach ($pageData as $data)
                @if ( $data->id == $id)
                <fieldset class="name">   
                    <div class="body-title mb-10">Achievements name</div>
                    <input class="flex-grow" type="text" placeholder="Achievement name" name="achievements_name"
                        tabindex="0" value="{{ $data->id ? $data->achievements_name :  old('achievements_name') }}"
                        aria-required="true" disabled>
                </fieldset>
                <fieldset class="value">
                    <div class="body-title mb-10">Achievements value </div>
                    <input class="flex-grow" type="text" placeholder="Achievement value" name="achievements_value"
                        tabindex="0" value="{{ $data->id ? $data->achievements_value :  old('achievements_value') }} "
                        aria-required="true" disabled>
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