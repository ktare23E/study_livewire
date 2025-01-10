<div>
    <form wire:submit='add'>
        <input type="text" class="border-2" wire:model.blur='todo'>
        <button type="submit">add</button>
    </form>
    <div>
        <p>current todo:</p>
        <p>{{$todo}}</p>
    </div>
    <ul class="mt-2">
        @foreach ($todos as $todo)
            <li>{{$todo}}</li>
        @endforeach
    </ul>
</div>
