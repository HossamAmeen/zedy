@php $input = "project_id"; @endphp
 <div class="form-group">
   <label class="col-lg-2 control-label"> تابعه لمشروع </label>
   <div class="col-lg-10">
     <select name="{{ $input }}" class="form-control">
      @foreach ($projects as $item)
      <option value={{$item->id}} @if(isset($row) && $row->$input == $item->id) selected @endif  >{{$item->ar_name}}</option>
      @endforeach
     
      </select>
   </div>
 </div>