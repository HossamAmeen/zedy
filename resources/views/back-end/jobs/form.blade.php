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

@php $input = "type[]"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label"> نوع</label>
    <div class="col-lg-10">
        <select name="{{ $input }}" class="form-control" multiple>
          <option value="ذكر" @if(isset($row) && str_contains($row->type , 'ذكر')) selected @endif
            >ذكر</option>
          <option value="انثي" @if(isset($row) && str_contains($row->type , 'انثي')) selected @endif
              >انثي</option>

        </select>
    </div>
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
