
@if ($message = Session::get('success'))
    <div class="alert alert-success p-5">
       <strong> {{ $message }}</strong>    
    </div> 
@endif

@if ($message = Session::get('danger'))
    <div class="alert alert-danger p-5">
       <strong> {{ $message }}</strong>    
    </div> 
@endif
{{-- 
@if ($message = Session::get('error'))
    <div class="alert alert-danger p-5">
       <strong> {{ $message }}</strong>    
    </div> 
@endif --}}