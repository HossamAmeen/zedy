@php $input = "ar_name"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label">اسم المشروع</label>
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
 @php $input = "name"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> اسم المشروع بالانجلزي</label>
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
 </div>   
  


 @php $input = "ar_availability"; @endphp
 <div class="form-group">
   <label class="col-lg-2 control-label">حالة المشروع </label>
   <div class="col-lg-10">
     <select name="{{ $input }}" class="form-control">
       <option value="متوفر"  @if(isset($row) && $row->$input == "متوفر") selected @endif  >متوفر</option>
       <option value="قريبا" @if(isset($row) && $row->$input == "قريبا") selected @endif >قريبا</option> 
       <option value="محجوزة بالكامل" @if(isset($row) && $row->$input == "محجوزة بالكامل") selected @endif >محجوزة بالكامل</option>   
     </select>

   </div>
 </div>

 @php $input = "ar_payment_type"; @endphp
 <div class="form-group">
   <label class="col-lg-2 control-label">طريقه الدفع</label>
   <div class="col-lg-10">
     <select name="{{ $input }}" class="form-control">
       <option value="تقسيط"  @if(isset($row) && $row->$input == "تقسيط") selected @endif  >تقسيط</option>
       <option value="كاش" @if(isset($row) && $row->$input == "كاش") selected @endif >كاش</option>   
     </select>

   </div>
 </div>

 @php $input = "payment_type"; @endphp
<div class="form-group">
  <label class="col-lg-2 control-label"> طريقه الدفع بالانجلزي </label>
  <div class="col-lg-10">
    <select name="{{ $input }}" class="form-control">
      <option value="installment" @if(isset($row) && $row->$input == "installment") selected @endif>installment</option>
      <option value="cash" @if(isset($row) && $row->$input == "cash") selected @endif>cash</option>
    </select>
  </div>
</div>

 @php $input = "ar_project_type"; @endphp
 <div class="form-group">
   <label class="col-lg-2 control-label"> نوع المشروع </label>
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
   
 @php $input = "map"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> لينك الخريطة</label>
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
@php $input = "delivery_date"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">تاريخ التسليم </label>
    <div class="col-lg-10">
        <input type="date" name="{{ $input }}" value="{{$row->$input ?? ''}}" class="form-control" >
          @error($input)
          <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
          @enderror
    </div>
</div>    
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

