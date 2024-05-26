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


        <div class="tf-section-1 ">
        <div class="wg-box">
            <div class="wg-box">
                <form class="form-new-product form-style-1">
                <div class="gap22 cols">
                    <fieldset class="name">
                    <input class="flex-grow" type="text" placeholder="Question" name="text" tabindex="0"
                            value="" aria-required="true" required="">
                    </fieldset>
                    <fieldset class="name">
                    <input class="flex-grow" type="text" placeholder="Answer" name="text" tabindex="0"
                            value="" aria-required="true" required="">
                    </fieldset>
                    
                    <button class="tf-button style-1 w208">
                            <i class="icon-plus"></i>
                        </button>
                </div>
                   
                </form>
            </div>

            <div class="wg-box">
                <div class="wg-table table-all-attribute">
                    <ul class="table-title flex gap20 mb-14">
                        <li>
                            <div class="body-title">Question</div>
                        </li>
                        <li>
                            <div class="body-title">Answer</div>
                        </li>
                        <li>
                            <div class="body-title">Action</div>
                        </li>
                    </ul>
                    <ul class="flex flex-column">
                        <li class="attribute-item flex items-center justify-between gap20">
                            <div class="body-text">What does a product designer need to know?</div>
                            <div class="body-text">I'm here to help if you're searching for a product designer to bring your idea to life or a design partner to help take your business to the next level.</div>
                            <div class="list-icon-function">
                                <div class="item eye">
                                    <i class="icon-eye"></i>
                                </div>
                                <div class="item edit">
                                    <i class="icon-edit-3"></i>
                                </div>
                                <div class="item trash">
                                    <i class="icon-trash-2"></i>
                                </div>
                            </div>
                        </li>
                        <li class="attribute-item flex items-center justify-between gap20">
                            <div class="body-text">What types of projects are included in your portfolio?</div>
                            <div class="body-text">Our portfolio includes a diverse range of projects, from web development and mobile applications to graphic design and digital marketing campaigns. Each project showcases our expertise and the quality of work we deliver.</div>
                            <div class="list-icon-function">
                                <div class="item eye">
                                    <i class="icon-eye"></i>
                                </div>
                                <div class="item edit">
                                    <i class="icon-edit-3"></i>
                                </div>
                                <div class="item trash">
                                    <i class="icon-trash-2"></i>
                                </div>
                            </div>
                        </li>
                        <li class="attribute-item flex items-center justify-between gap20">
                            <div class="body-text">How do you select the projects to feature in your portfolio?</div>
                            <div class="body-text">We choose projects that best demonstrate our skills, creativity, and the variety of services we offer. We also consider client satisfaction and the impact of the project on their business.</div>
                            <div class="list-icon-function">
                                <div class="item eye">
                                    <i class="icon-eye"></i>
                                </div>
                                <div class="item edit">
                                    <i class="icon-edit-3"></i>
                                </div>
                                <div class="item trash">
                                    <i class="icon-trash-2"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- /main-content-wrap -->

@endsection

