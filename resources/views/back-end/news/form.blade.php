@php $input = "ar_title"; @endphp
<div class="form-group">
  <label class="col-lg-2 control-label">عنوان الخبر</label>
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
@php $input = "title"; @endphp
<div class="form-group">
  <label class="col-lg-2 control-label"> عنوان الخبر بالانجلزي</label>
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

@php $input = "project_id"; @endphp
<div class="form-group">
  <label class="col-lg-2 control-label">المشروع </label>
  <div class="col-lg-10">
    {{-- <input type="text" name="{{ $input }}" @if(isset($row)) value="{{$row->$input}}" @else
      value="{{Request::old($input)}}" @endif class="form-control" required> --}}

    <select name="{{ $input }}" class="form-control">
      @foreach ($projects as $item)
      <option value={{$item->id}} @if(isset($row) && $row->$input == $item->id) selected @endif>{{$item->ar_name}}</option>
      @endforeach
    </select>
    @error($input)
    <div class="alert alert-danger" role="alert" style="text-align: center">
      <strong>{{ $message }}</strong>
    </div>
    @enderror
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

@php $input = "date"; @endphp
<div class="form-group">
  <label class="col-lg-2 control-label">التاريخ </label>
  <div class="col-lg-10">
    <input type="date" name="{{ $input }}" value="{{$row->$input ?? ''}}"
      class="form-control" required>
    @error($input)
    <div class="alert alert-danger" role="alert" style="text-align: center">
      <strong>{{ $message }}</strong>
    </div>
    @enderror
  </div>
</div>

@php $input = "item_order"; @endphp
<div class="form-group">
  <label class="col-lg-2 control-label">ترتيب </label>
  <div class="col-lg-10">
    <input type="number" name="{{ $input }}" value="{{$row->$input ?? ''}}"
      class="form-control" required>
    @error($input)
    <div class="alert alert-danger" role="alert" style="text-align: center">
      <strong>{{ $message }}</strong>
    </div>
    @enderror
  </div>
</div>


<label class="col-md-2 control-label">الوصف بالعربي</label>
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
@enderror