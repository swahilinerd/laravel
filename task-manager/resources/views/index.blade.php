<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learning laravel</title>
</head>
<body>
   <h1>Homepage</h1> 
   @forelse ($tasks as $task)
        <div>{{ $task->title }}</div>
    @empty  
        <div>There are not tasks man</div>
    @endforelse 
    
</body>
</html>