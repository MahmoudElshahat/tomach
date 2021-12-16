@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="??????">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="???????????????"> أللغات </a>
                                </li>
                                <li class="breadcrumb-item active">إضافة لغة
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
                                    <h4 class="card-title" id="basic-layout-form"> إضافة لغة </h4>
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
                                        {{-- <form class="form" action="{{route('lang.store')}}" method="POST"
                                              enctype="multipart/form-data"> --}}

                                                <form class="form" id="newlang" action="#" method="POST"
                                              enctype>
                                               @csrf
                                               <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">


                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات  اللغة </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم اللغة </label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل اسم اللغة  "
                                                                   name="name_en"
                                                                   id="name_en">
                                                            @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> أختصار اللغة </label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل أختصار اللغة  "
                                                                   name="abbr"
                                                                   id="abbr">
                                                            @error('abbr')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2"> الاتجاة </label>
                                                            <select name="direction" id="direction" class="select2 form-control">
                                                                <optgroup label="من فضلك أختر اتجاه اللغة ">
                                                                    <option value="rtl">من اليمين الي اليسار</option>
                                                                    <option value="ltr">من اليسار الي اليمين</option>
                                                                </optgroup>
                                                            </select>
                                                            @error('direction')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"

                                                             name="active"
                                                             id='active'
                                                             @if ('checked'==true) value="1" @endif
                                                                   id="switcheryColor4"
                                                                   class="switchery" data-color="success"
                                                                  />

                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">الحالة </label>

                                                            @error('active')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-actions">
                                                {{--========== Massage show after ajax function =================--}}
                                                {{-- success massage --}}
                                            <div id="succes-msg" class="alert alert-success" style="display:none; text-align:center" >
                                                <h2>success insert</h2><i class="bi bi-check"></i>
                                            </div>
                                                            {{-- ====================== --}}
                                             {{-- failed massage --}}
                                             <div id="fail-msg" class="alert alert-danger" style="display:none; text-align:center" >
                                                <h2>failed 'Please insert correct Data</h2>
                                            </div>
                                            {{-- ====================================================== --}}
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="button" id="save_ofer" onclick="upload_data('#newlang','{{route('lang.store')}}')" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>

                                                {{-- <button type="button" id="save_offer" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button> --}}
                                            </div>
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
{{--@section('scripts')
    <script>

        $('#save_offer').on('click',function(e){

            // e.preventDefualt();

            alert('1111111111111111111');

            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({

                    method:'post',

                    url:"{{route('lang.store')}}",

                    data:{

                           "_token": $('#token').val(),

                            // name_en:$("#name_en").val(),
                            // abbr:$("#abbr").val(),
                            // direction:$("#direction").val()
                        // =====================
                           name_en:'mido',
                            abbr:'en',
                            direction:'ltr'


                    },
                    cache: false,
                    success:function(){
                            alert('successssssss')

                    },error:function(){
                        alert('errrrooooooorrr')

                    }
            });// end ajax()

        });





    </script>



@stop--}}

