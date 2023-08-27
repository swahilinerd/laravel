 <div class="mb-3">
    <label for="">Name</label>
    <input type="text" id="name" value="{{ old('name', optional($category ?? null)->name) }}" name="name" class="form-control">
</div>
<div class="mb-3">
    <label for="">Description(Optioanl)</label>
    <textarea name="summary" id="summary" cols="30" rows="10" class="form-control">
        {{ old('summary', optional($category ?? null)-> summary) }} 
    </textarea>
</div>