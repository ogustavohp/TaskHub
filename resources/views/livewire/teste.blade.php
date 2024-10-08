<div>
    <h1>My Component</h1>
    <input wire:model.live="search" />

    <br>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
