{{-- @php $input = "ar_name"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label">اسم الوحده</label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control" required>
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div>   --}}
 {{-- @php $input = "name"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> اسم الوحده بالانجلزي</label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control" >
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div>    --}}
  
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

 @php $input = "space"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> مساحه الوحده بالمتر </label>
     <div class="col-lg-10">
         <input type="number" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control" required>
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div> 
 @php $input = "floor_number"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> دور (رقم الدور) </label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control" required>
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div>     

 @php $input = "number"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> رقم الوحده </label>
     <div class="col-lg-10">
         <input type="number" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control" >
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div>  


  
 @php $input = "ar_project_type"; @endphp
 <div class="form-group">
   <label class="col-lg-2 control-label"> نوع الوحده </label>
   <div class="col-lg-10">
     <select name="{{ $input }}" class="form-control">
      <option value="سكني" @if(isset($row) && $row->$input == "سكني") selected @endif  >سكني</option>
      <option value="إداري" @if(isset($row) && $row->$input == "إداري") selected @endif  >إداري</option>
      <option value="تجاري" @if(isset($row) && $row->$input == "تجاري") selected @endif  >تجاري</option>
      <option value="طبي" @if(isset($row) && $row->$input == "طبي") selected @endif  >طبي</option>
      <option value="تجاري إداري" @if(isset($row) && $row->$input == "تجاري إداري") selected @endif  >تجاري إداري</option>
      <option value="تجاري سكني" @if(isset($row) && $row->$input == "تجاري سكني") selected @endif  >تجاري سكني</option>
      <option value="تجاري إداري سكني" @if(isset($row) && $row->$input == "تجاري إداري سكني") selected @endif  >تجاري إداري سكني</option>
      <option value="طبي سكني" @if(isset($row) && $row->$input == "طبي سكني") selected @endif>طبي سكني</option>
      <option value="إداري سكني" @if(isset($row) && $row->$input == "إداري سكني") selected @endif>إداري سكني</option>
      <option value="جراج" @if(isset($row) && $row->$input == "جراج") selected @endif  >جراج</option> 
    </select>
   </div>
 </div>
 {{-- @php $input = "project_type"; @endphp
 <div class="form-group">
   <label class="col-lg-2 control-label">  نوع الوحده بالانجلزي </label>
   <div class="col-lg-10">
     <select name="{{ $input }}" class="form-control">
        <option value="residential" @if(isset($row) && $row->$input == "residential") selected @endif  >residential</option>
        <option value="commercial" @if(isset($row) && $row->$input == "commercial") selected @endif  >commercial</option>
        <option value="administrative" @if(isset($row) && $row->$input == "administrative") selected @endif  >administrative</option>
        <option value="medical" @if(isset($row) && $row->$input == "medical") selected @endif >medical</option>
     </select>
   </div>
 </div> --}}

 @php $input = "ar_type"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> نوع الوحده  الفرعي</label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control" required >
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div> 

 @php $input = "type"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> نوع الوحده الفرعي بالانجلزي</label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control" required>
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div> 
 

 @php $input = "ar_availability"; @endphp
 <div class="form-group">
   <label class="col-lg-2 control-label">توافر الوحدة</label>
   <div class="col-lg-10">
    <select name="{{ $input }}" class="form-control">
      <option value="محجوزة بالكامل" @if(isset($row) && $row->$input == "محجوزة بالكامل") selected @endif  >محجوزة بالكامل</option>
      <option value="قريبا" @if(isset($row) && $row->$input == "قريبا") selected @endif  >قريبا</option>
      <option value="متوفره" @if(isset($row) && $row->$input == "متوفره") selected @endif  >متوفره</option>
      
     </select>
   </div>
 </div>




 {{-- @php $input = "space_from"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> مساحه الوحده من بالمتر </label>
     <div class="col-lg-10">
         <input type="number" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control" required>
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div>
 @php $input = "space_to"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> مساحه الوحده الي بالمتر </label>
     <div class="col-lg-10">
         <input type="number" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control" required>
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div>   --}}
  

   

@php $input = "image"; @endphp          
<div class="form-group">
        <label class="col-md-2 control-label">الصورة</label>
        <div class="col-md-10 ls-group-input">
            <input name="{{ $input }}" id="file-3" type="file" multiple="true" >
        </div>
        @error($input)
        <div class="alert alert-danger" role="alert" style="text-align: center">
          <strong>{{ $message }}</strong>
        </div>
        @enderror
        <span style="margin-right: 15%;color:red;font-size:15px">يفضل رفع الصوره 400 * 400 </span>
</div>  
{{-- @php $input = "delivery_date"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">تاريخ التسليم </label>
    <div class="col-lg-10">
        <input type="date" name="{{ $input }}" value="{{$row->$input ?? ''}}" required>
          @error($input)
          <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
          @enderror
    </div>
</div>     --}}
<label class="col-md-2 control-label">الوصف بالعربي</label>
@php $input = "ar_description"; @endphp
<div class="panel-body no-padding" >
           <textarea class="summernote"style="margin-right: 25%"  name="{{ $input }}"  id="demo"  rows="10" cols="100" required>
                    {{ isset($row) ? $row->{$input} : '' }}</textarea>
</div><br>
@error($input)
<div class="alert alert-danger" role="alert" style="text-align: center">
  <strong>{{ $message }}</strong>
</div>
@enderror

<label class="col-md-2 control-label">الوصف بالانجلزي</label>
@php $input = "description"; @endphp
<div class="panel-body no-padding" >
 <textarea class="summernote" style="margin-right: 25%"  name="{{ $input }}"  
  id="demo"  rows="10" cols="100" >
  {{ isset($row) ? $row->{$input} : '' }}
</textarea>
</div><br>
@error($input)
<div class="alert alert-danger" role="alert" style="text-align: center">
  <strong>{{ $message }}</strong>
</div>
@enderror

