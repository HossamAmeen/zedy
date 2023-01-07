@php $input = "ar_name"; @endphp
<div class="form-group">
  <label class="col-lg-2 control-label">الاسم</label>
  <div class="col-lg-10">
    <input type="text" name="{{ $input }}" @if(isset($row)) value="{{$row->$input}}" @else
      value="{{Request::old($input)}}" @endif class="form-control" required>
    @error($input)
    <div class="alert alert-danger" role="alert" style="text-align: center">
      <strong>{{ $message }}</strong>
    </div>
    @enderror
  </div>
</div>
@php $input = "name"; @endphp
<div class="form-group">
  <label class="col-lg-2 control-label"> الاسم بالانجلزي</label>
  <div class="col-lg-10">
    <input type="text" name="{{ $input }}" @if(isset($row)) value="{{$row->$input}}" @else
      value="{{Request::old($input)}}" @endif class="form-control">
    @error($input)
    <div class="alert alert-danger" role="alert" style="text-align: center">
      <strong>{{ $message }}</strong>
    </div>
    @enderror
  </div>
</div>

@php $input = "field_id"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label"> مجال العمل</label>
    <div class="col-lg-10">
        <select name="{{ $input }}" class="form-control">
          @foreach($fields as $field)
          <option value="{{$field->id}}" @if(isset($row) && $row->field_id == $field->id) selected @endif
            >{{$field->ar_name}}</option>
          @endforeach

        </select>
    </div>
</div>
@php $input = "image"; @endphp
<div class="form-group">
  <label class="col-md-2 control-label">الصورة</label>
  <div class="col-md-10 ls-group-input">
    <input name="{{ $input }}" id="file-3" type="file" multiple="true">
  </div>
  @error($input)
  <div class="alert alert-danger" role="alert" style="text-align: center">
    <strong>{{ $message }}</strong>
  </div>
  @enderror
  <span style="margin-right: 15%;color:red;font-size:15px">يفضل رفع الصوره 400 * 400 </span>
</div>

@php $input = "item_order"; @endphp
<div class="form-group">
  <label class="col-lg-2 control-label">ترتيب </label>
  <div class="col-lg-10">
    <input type="number" name="{{ $input }}" value="{{$row->$input ?? ''}}"
      class="form-control">
    @error($input)
    <div class="alert alert-danger" role="alert" style="text-align: center">
      <strong>{{ $message }}</strong>
    </div>
    @enderror
  </div>
</div>

{{-- @php $input = "ar_description"; @endphp
<div class="form-group">
  <label class="col-lg-2 control-label">الوصف</label>
  <div class="col-lg-10">
    <input type="text" name="{{ $input }}" @if(isset($row)) value="{{$row->$input}}" @else
      value="{{Request::old($input)}}" @endif class="form-control" required>
    @error($input)
    <div class="alert alert-danger" role="alert" style="text-align: center">
      <strong>{{ $message }}</strong>
    </div>
    @enderror
  </div>
</div>
@php $input = "description"; @endphp
<div class="form-group">
  <label class="col-lg-2 control-label"> الوصف بالانجليزية </label>
  <div class="col-lg-10">
    <input type="text" name="{{ $input }}" @if(isset($row)) value="{{$row->$input}}" @else
      value="{{Request::old($input)}}" @endif class="form-control">
    @error($input)
    <div class="alert alert-danger" role="alert" style="text-align: center">
      <strong>{{ $message }}</strong>
    </div>
    @enderror
  </div>
</div> --}}

{{-- <label class="col-md-2 control-label">الوصف بالعربي</label>
@php $input = "ar_description"; @endphp
<div class="panel-body no-padding">
  <textarea class="summernote" style="margin-right: 25%" name="{{ $input }}" id="demo" rows="10" cols="100">
                    {{ isset($row) ? $row->{$input} : '' }}
   </textarea>
</div><br>
@error($input)
<div class="alert alert-danger" role="alert" style="text-align: center">
  <strong>{{ $message }}</strong>
</div>
@enderror

<label class="col-md-2 control-label">الوصف بالانجلزي</label>
@php $input = "description"; @endphp
<div class="panel-body no-padding">
  <textarea class="summernote" style="margin-right: 25%" name="{{ $input }}" id="demo" rows="10" cols="100">
                    {{ isset($row) ? $row->{$input} : '' }}
   </textarea>
</div><br>
@error($input)
<div class="alert alert-danger" role="alert" style="text-align: center">
  <strong>{{ $message }}</strong>
</div>
@enderror --}}