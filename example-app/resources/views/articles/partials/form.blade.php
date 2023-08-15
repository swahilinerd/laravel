  <div>
    <label for="">Title</label>
        <input type="text" name="title" value="{{ old('title', $article->title) }}" id="title">
        @error('title') 
          <small>  {{ $message }} </small>
        @enderror
    </div>
    <div>
        <label for="">Content</label>
        <textarea name="content" id="content" cols="30" rows="10">
            {{ old('content', $article->content) }}  
        </textarea>
        @error('content')
          <small>  {{ $message }} </small>
        @enderror
    </div>