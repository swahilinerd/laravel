<div>
    <div class="mb-3">
        <label for="">Todo Title</label> 
        <input type="text" name="todoTitle" 
            id="todoTitle" wire:model="todoTitle"
             wire:keydown.enter="addTodo"
             placeholder="Type and hit enter" 
              class="form-control form-control-lg">
    </div>
    <div class="mb-3">
        <button class="btn btn-sm btn-primary" wire:click="addTodo">Add todo</button>
    </div>

    <div>
        @if (count($todos))
            <table class="table table-stripe">
                <thead>
                    <th><strong>No</strong></th>  
                    <th><strong>completed?</strong></th>  
                    <th><strong>Title</strong></th>
                    <th><strong>Actions</strong></th>
                </thead>    
                <tbody>
                    @foreach ($todos as $todo)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" {{$todo->completed ? 'checked' : '' }} wire:change="toggleTodo({{$todo->id}})" class="form-check-input">
                                </div>
                            </td>
                            <td class="{{$todo->completed ? 'text-decoration-line-through' : '' }}">{{ $todo->title }}</td>
                            <td>
                                <button class="btn btn-sm btn-danger" wire:click="deleteTodo({{$todo->id}})">Delete</button> 
                            </td>
                        </tr> 
                    @endforeach
                </tbody>
            </table> 
        @else
                <p class="text-center"><strong>There Are No Todos</strong></p>
        @endif
    </div>
</div>
