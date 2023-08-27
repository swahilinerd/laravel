<div class="mb-3">
    <label for="">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title', optional($post ?? null)->title ) }}"> 
    @error('title') 
        <p><small class="text-danger">{{ $message }}</small></p> 
    @enderror
</div>
<div>
    <label for="">Category</label>
    <select class="form-control" name="category_id" id="category_id">
        <option value="">-- select category --</option> 
        @foreach ($categories as $category)
           <option value="{{ $category->id }}">{{ $category->name }}</option> 
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="">Content</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="10">
        {{ old('content', optional($post ?? null)->content) }}    
    </textarea>
    @error('content')
        <p><small class="text-danger">{{ $message }}</small></p> 
    @enderror
</div>