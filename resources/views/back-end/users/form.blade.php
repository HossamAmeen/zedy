@php $input = "user_name"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">اسم المستخدم</label>
    <div class="col-lg-4">
        <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}" class="form-control"
            required>
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
    <div class="col-lg-4">
        <input type="email" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}" class="form-control"
            required>
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
@php $input = "full_name"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">الاسم بالكامل</label>
    <div class="col-lg-4">
        <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}" class="form-control"
            required>
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
@php $input = "password"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">كلمة المرور</label>
    <div class="col-lg-4">
        <input type="password" name="{{ $input }}" class="form-control" @if(!isset($row)) required @endif>
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
@php $input = "password_confirmation"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label"> تأكيد كلمة المرور</label>
    <div class="col-lg-4">
        <input type="password" name="{{ $input }}" class="form-control" @if(!isset($row)) required @endif>
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

