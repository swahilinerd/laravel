<div>
    <div class="row">
        <div class="col-md-4">
            <input type="number" placeholder="First Number" wire:model="firstNumber" name="firstNumber" id="firstNumber" class="form-control">
        </div>
        <div class="col-md-2">
            <select name="operation" wire:model="operation" id="operation" class="form-control"> 
                <option value="">select operation</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option> 
            </select>
        </div>
        <div class="col-md-4">
            <input type="number" placeholder="Last Number" wire:model="lastNumber" name="lastNumber" id="lastNumber" class="form-control" >
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary" wire:click="calculate">Calculate</button>
        </div>
    </div>
    
    <div class="text-center mt-5">
        <h1>{{ $result }}</h1>
    </div>
</div>
