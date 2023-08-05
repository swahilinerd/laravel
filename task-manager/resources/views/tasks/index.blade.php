<body>
   <h1>Task Listing</h1>  
   @forelse ($tasks as $task)
        <div><a href="{{ route('tasks.show', ['id' => $task->id ]) }}">{{ $task->title }}</a></div>
    @empty  
        <div>There are not tasks man</div>
    @endforelse 
    
</body>
</html>