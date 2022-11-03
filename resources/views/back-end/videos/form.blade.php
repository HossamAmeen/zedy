
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

