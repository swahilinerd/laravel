<div class="mb-3">
    <label for="">Category Name</label> 
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name', optional($category ?? null)->name ) }}"> 
    @error('name') 
        <p><small class="text-danger">{{ $message }}</small></p> 
    @enderror
</div>

<div class="mb-3">
    <label for="">Summary</label>
    <textarea class="form-control" name="summary" id="summary" cols="30" rows="10">
        {{ old('summary', optional($category ?? null)->summary) }}    
    </textarea>
    @error('summary')
        <p><small class="text-danger">{{ $message }}</small></p> 
    @enderror
</div>