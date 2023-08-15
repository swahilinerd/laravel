<body>
   <h1>Task Listing</h1>  
   <table>
    <thead>
        <td>Titlte</td>
        <th>Actions</th>
    </thead>
   @forelse ($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>
                <a href="{{ route('tasks.show', ['id' => $task->id ]) }}">View</a> &nbsp;
                <a href="{{ route('tasks.edit', ['id' => $task->id ]) }}">Edit</a> 
            </td>
        </tr>
    @empty  
        <div>There are not tasks man</div>
    @endforelse 
    </table>
</body>
</html>