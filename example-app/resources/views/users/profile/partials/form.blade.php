<div class="mb-3">
    <label for="">Phone Number</label>     
    <input type="text" class="form-control" name="phone" value="{{ old('phone', optional($user ?? null)->profile->phone) }}" id="phone"> 
</div> 
<div class="mb-3">
    <label for="">Email Address</label>
    <input type="text" class="form-control" value="{{ old('email', optional($user ?? null)->profile->email) }}" name="email" id="email"> 
</div>