@extends('back-end.layout.app')

@section('title')
تعديل بيانات الموقع
@endsection

@section('content')

@component('back-end.layout.header')
@slot('nav_title')
تعديل بيانات الموقع
@endslot
@endcomponent

<div class="row" style="  padding-right: 10%;">
    <div class="col-md-10">
        {{-- <div class="panel panel-default"> --}}

            <div class="panel-body">
                <form class="form-horizontal ls_form ls_form_horizontal"
                    action="{{route('configrations.update', ['id' => $row])}}" method="POST">
                    @csrf
                    {{ method_field('put') }}
                    @if (session()->get('action') )
                    <div class="alert alert-success">
                        <strong>{{session()->get('action')}}</strong>
                    </div>
                    @endif
                    @php $input = "ar_title"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">اسم الموقع</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control"
                                required>
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "title"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">اسم الموقع بالانجليزي</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control"
                                required>
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                   
                   
                    @php $input = "description"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">وصف الرئيسيه</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "en_description"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label"> وصف الرئيسيه بالانجليزي</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "job_form_link"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">job form link</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "location"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">location</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "Visual_identity_samples"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Visual identity samples</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                     @php $input = "company_profile"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">company profile</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    
                    @php $input = "ar_address"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">العنوان</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "beaddresshance"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">العنوان بالانجليزي</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    

                    @php $input = "email"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">البريد</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "phone"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">هاتف</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "phone2"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">هاتف الثاني</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    @php $input = "whatsapp"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">whatsapp</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "youtube"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">رابط قناة اليوتيوب</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "facebook"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">facebook account</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "twitter"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">twitter account</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "instagram"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">instagram</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "linkedin"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">linkedin</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "behance"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">behance</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "projects_counter"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">عدد المشاريع</label>

                        <div class="col-lg-10">
                            <input type="number" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "training_course_count"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">عدد الدورات التدريبة</label>

                        <div class="col-lg-10">
                            <input type="number" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "trainee_count"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">عدد المتدربين</label>

                        <div class="col-lg-10">
                            <input type="number" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    @php $input = "experience_year_counter"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">عدد سنين الخبره</label>

                        <div class="col-lg-10">
                            <input type="number" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    
                    @php $input = "head_meta"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">head meta</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    @php $input = "footer_meta"; @endphp
                    <div class="form-group">
                        <label class="col-lg-2 control-label">footer meta</label>

                        <div class="col-lg-10">
                            <input type="text" name="{{ $input }}"
                                value="{{ isset($row) ? $row->{$input} : Request::old($input) }} " class="form-control">
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary" type="submit">تحديث</button>
                        </div>
                    </div>
                </form>
            </div>
            {{--
        </div> --}}
    </div>
</div>

{{-- @component('back-end.shared.edit' , ['pageTitle' => $pageTitle , 'pageDes' => $pageDes])
<form action="{{ route($routeName.'.update' , ['id' => $row]) }}" method="POST">
    {{ method_field('put') }}
    @include('back-end.'.$folderName.'.form')
    <button type="submit" class="btn btn-primary pull-right">Update {{ $moduleName }}</button>
    <div class="clearfix"></div>
</form>
@endcomponent --}}


{{-- @push('js')
<!--Masked Library Script Start-->
<script src="{{asset('panel/assets/js/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('panel/assets/js/jquery.autosize.js')}}"></script>
<!--Masked Library Script End-->

<!--validationEngine Library Script Start-->
<script src="{{asset('panel/assets/js/validationEngine/languages/jquery.validationEngine-en.js')}}"></script>
<script src="{{asset('panel/assets/js/validationEngine/jquery.validationEngine.js')}}"></script>
<!--validationEngine Library Script End-->

<!--bootstrap validation Library Script Start-->
<script src="{{asset('panel/assets/js/bootstrapvalidator/bootstrapValidator.js')}}"></script>
<!--bootstrap validation Library Script End-->

<!--Demo form validation  Script Start-->
<script src="{{asset('panel/assets/js/pages/formValidation.js')}}"></script>
<!--Demo form validation  Script End-->
@endpush

@push('css')
<link rel="stylesheet" href="assets/css/rtl-css/plugins/fileinput-rtl.css">
@endpush
--}}
@push('css')
<!-- Responsive Style For-->
<link href="{{asset('panel/assets/css/rtl-css/responsive-rtl.css')}}" rel="stylesheet">
<!-- Responsive Style For-->
<link rel="stylesheet" href="{{asset('panel/assets/css/rtl-css/plugins/summernote-rtl.css')}}">
<!-- Custom styles for this template -->


<!-- Plugin Css Put Here -->

<link rel="stylesheet" href="{{asset('panel/assets/css/rtl-css/plugins/fileinput-rtl.css')}}">
@endpush
@push('js')
<script>
    console.log("test");
            document.getElementById('date').valueAsDate = new Date();
</script>
<!--Upload button Script Start-->
<script src="{{asset('panel/assets/js/fileinput.min.js')}}"></script>
<!--Upload button Script End-->

<!--Auto resize  text area Script Start-->
<script src="{{asset('panel/assets/js/jquery.autosize.js')}}"></script>
<!--Auto resize  text area Script Start-->
<script src="{{asset('panel/assets/js/pages/sampleForm.js')}}"></script>


<!-- summernote Editor Script For Layout start-->
<script src="{{asset('panel/assets/js/summernote.min.js')}}"></script>
<!-- summernote Editor Script For Layout End-->

<!-- Demo Ck Editor Script For Layout Start-->
<script src="{{asset('panel/assets/js/pages/editor.js')}}"></script>
<!-- Demo Ck Editor Script For Layout ENd-->
@endpush
@endsection