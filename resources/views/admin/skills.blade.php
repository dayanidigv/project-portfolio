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
</div>

<style>

</style>

<form class="tf-section-1 " id="skillsForm" action="{{route('admin.skills.store', ['id' => $userId])}}" method="post">
    @csrf
    <div class="wg-box">
        <fieldset class="name">
            <div class="body-title mb-10">Skills<span class="tf-color-1">*</span></div>
            <select id="skills" class="form-group" name="skills" multiple="multiple"
                style="width:100%; height: 200px; border: 1px solid #ccc; border-radius: 5px; padding: 5px;" required>
            </select>
            <div class="text-tiny">Enter your skill and select matching skills</div>
            @error('skills')
            <p class="error text-danger">{{ $message }}</p>
            @enderror
        </fieldset>
        @if (!empty($pageData))
        <button class="tf-button style-1 w208" type="submit">Add</button>
        @else
        <button class="tf-button style-1 w208" type="submit">Save</button>
        @endif
    </div>
</form>
@if (!empty($pageData))
<div class="col-12 mt-5 mb-20">
<div class="wg-box">
                <div class="wg-table table-all-attribute">
                    <ul class="table-title flex gap20 mb-14">
                        <li>
                            <div class="body-title">Logo</div>
                        </li>
                        <li>
                            <div class="body-title">Title</div>
                        </li>
                        <li>
                            <div class="body-title">Action</div>
                        </li>
                    </ul>
                    <ul class="flex flex-column">

                        @if (!empty($pageData))
                        @foreach ($pageData as $data)
                        <li class="attribute-item flex items-center justify-between gap20">
                            <div class="shop-item">
                                <div class="image">
                                    @if($data->url != null)
                                       <img src="{{$data->url }}" alt="">
                                    @else
                                    <div class="body-text">{{ $data->title[0] }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="body-text">{{ $data->title }}</div>
                            <div class="list-icon-function">
                                <form action="{{route('admin.skills.destroy', ['id' => $data->id]) }}"
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
@endif
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function serializeControls() {
        var data = {};

        function buildInputObject(arr, val) {
            if (arr.length < 1) return val;
            var objkey = arr[0];
            if (objkey.slice(-1) == "]") {
                objkey = objkey.slice(0, -1);
            }
            var result = {};
            if (arr.length == 1) {
                result[objkey] = val;
            } else {
                arr.shift();
                var nestedVal = buildInputObject(arr, val);
                result[objkey] = nestedVal;
            }
            return result;
        }

        $.each($('select[name="skills"]').serializeArray(), function () {
            var val = this.value;
            if (data[this.name] !== undefined) {
                if (!data[this.name].push) {
                    data[this.name] = [data[this.name]];
                }
                data[this.name].push(val || '');
            } else {
                data[this.name] = val || '';
            }
        });

        return data;
    }

    // Document ready function
    $(document).ready(function () {
        $("#skills").select2({
            tags: true,
            ajax: {
                url: function (params) {
                    return "https://project-portfolio.up.railway.app/api/icons/search/" + params.term;
                },
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: data.map(function (item) {
                            return {
                                id: item.id,
                                text: item.title,
                                url: item.url
                            };
                        })
                    };
                },
                cache: true
            },
            minimumInputLength: 1
        });

        $("#skillsForm").submit(function (event) {
            event.preventDefault();
            var formData = serializeControls();
            console.log(formData);
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: formData, headers: {
                    'X-CSRF-Token': csrfToken
                },
                success: function (response) {

                    if(response.success){
                        window.location.reload();
                    }else{
                        alert(response.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        // $("#skills").on("change", function () {
        //     $("#output").html(JSON.stringify(serializeControls(), null, 2));
        // });
    });
</script>





<!-- /main-content-wrap -->

@endsection