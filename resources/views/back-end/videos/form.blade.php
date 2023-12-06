
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
 @php $input = "path"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label">مسار الفديو </label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
           class="form-control" required>
        <span class="invalid-feedback" role="alert" style="font-size: 70%">لا تضع المسار كامل بل ضع ما بعد علامه (=) كما الكود في اللون الاخضر :</span><br>
        <span class="invalid-feedback" style="font-size: 70%" >https://www.youtube.com/watch?v= <span style="color: green"> 5oP5jgBzYQw</span></span>
           @error($input)
           <span class="invalid-feedback" role="alert">
               <strong style="margin-right: 25%;color:red">{{ $message }}</strong>
           </span>
           @enderror
    </div>
 </div>    
 <input type="text" name="type"  hidden value="videos">    

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
 