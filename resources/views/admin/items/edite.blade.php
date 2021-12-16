@extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?????">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href="??????"> الاقسام الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item active">إضافة قسم رئيسي
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> إضافة قسم رئيسي </h4>
                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            @include('admin.includes.alerts.success')
                            @include('admin.includes.alerts.errors')

                            <div class="card-content collapse show">
                                <div class="card-body">
                                    {{-- <img src="./public/images/1636018394-branddd.jpg" alt="Slide"> --}}

                                    <div class="caption-group">
                                        {{-- <h2 class="caption title">
                                            iPhone <span class="primary">6 <strong>Plus</strong></span>
                                        </h2> --}}
                                        {{-- <h4 class="caption subtitle">Dual SIM</h4> --}}
                                        {{-- <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a> --}}
                                    </div>
                                    <form class="form" action="{{route('update.item',$items-> id)}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{-- @foreach($categores as $categore) --}}
                                        {{-- {{dd($categore)}} --}}

                                        <div class="form-group">
                                            <label> صوره المنتج </label>
                                            <img src="{{public_path('images'.$items-> image_path)}}" alt="{{public_path('images'.$items-> image_path)}}">

                                            <input type='hidden'  name='id' value="{{$items-> name}}">
                                            <label id="projectinput7" class="file center-block">
                                                <span class="file-custom"></span>
                                                <input type='file'  name='photo'>
                                            </label>
                                            @error('photo')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> بيانات المنتج </h4>


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> اسم المنتج</label>
                                                                <input type="text" value="{{$items-> name}}" id="name"
                                                                       class="form-control"
                                                                       placeholder="  "
                                                                       name="name">


                                                                {{-- @error("category.$index.name") --}}
                                                                {{-- <span class="text-danger"> هذا الحقل مطلوب</span> --}}
                                                                {{-- @enderror --}}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> سعر المنتج </label>
                                                                    <input type="text" value="{{$items-> price}}" id="name"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           name="price">
                                                                    {{-- ============================================ --}}
                                                                           {{-- <label for="projectinput1"> الخصم</label>
                                                                       <input type="text"
                                                                              value="{{$items-> sale}}"
                                                                              id="name"
                                                                              class="form-control"
                                                                              placeholder="اضافه خصم "
                                                                              name="sale"> --}}
                                                                    {{-- @error("category.$index.name") --}}
                                                                    {{-- <span class="text-danger"> هذا الحقل مطلوب</span> --}}
                                                                    {{-- @enderror --}}
                                                                </div>
                                                        </div>
                                                        {{-- ============================ --}}

                                                        {{-- <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> تقيم المنتج </label>
                                                                    <input type="text" value="{{$items-> rate}}" id="name"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           name="rate">
                                                                           {{-- <div class="mt-5 d-flex justify-content-between align-items-center"> --}}
                                                                            {{-- <h5 class="review-stat">Cleanliness</h5>
                                                                            <div class="small-ratings"> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                                        {{-- </div> --}}
                                                                    {{-- @error("category.$index.name") --}}
                                                                    {{-- <span class="text-danger"> هذا الحقل مطلوب</span>
                                                                    {{-- @enderror
                                                                </div>
                                                        </div> --}}

                                                        {{-- ================== --}}
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput1">وصف المنتج</label>
                                                                <input type="text"
                                                                        value="{{$items-> description}}"
                                                                        id="name"
                                                                        class="form-control"
                                                                        placeholder="ادخل وصف المنتج"
                                                                        name="descrption">
                                                                {{-- @error("category.$index.name") --}}
                                                                {{-- <span class="text-danger"> هذا الحقل مطلوب</span> --}}
                                                                {{-- @enderror --}}
                                                            </div>
                                                        </div>
                                                        {{-- ====================== --}}
                                                    </div>

                                                        {{-- =================== --}}
                                                    </div>
                                                        {{-- <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group mt-1">
                                                                    <label for="cars">اسم القسم :</label>
                                                                    {{-- <input type='select' name='cid'>
                                                                        <select name="category" id="cars">
                                                                        {{-- @isset($categories) --}}
                                                                        {{-- @foreach($categories as $category)
                                                                          <option value="{{$items->id}}">{{$items->name}}</option>
                                                                        {{-- @endforeach --}}

                                                                        {{-- </select> --}}

                                                                    {{-- @error("category.$index.name") --}}
                                                                    {{-- <span class="text-danger"> هذا الحقل مطلوب</span> --}}
                                                                    {{-- @enderror
                                                                </div>
                                                            </div>
                                                            </div> --}}
                                                            {{-- =========================================== --}}


                                                    </div>
                                                    </div>
                                                    {{-- <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-1">
                                                                <input type="checkbox" value="1"
                                                                       name="active"{{--??????-
                                                                       id="switcheryColor4"
                                                                       class="switchery" data-color="success"
                                                                       @if($items->active > 0) checked @endif/>
                                                                <label for="switcheryColor4"
                                                                       class="card-title ml-1">الحالة</label>

                                                                {{-- @error("category.$index.active")
                                                                <span class="text-danger"> </span>
                                                                {{-- @enderror
                                                            </div>
                                                        </div>
                                                    </div> --}}

                                        </div>


                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                <i class="ft-x"></i> تراجع
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
                                            </button>
                                        </div>
                                        {{-- @endforeach --}}
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
@endsection
