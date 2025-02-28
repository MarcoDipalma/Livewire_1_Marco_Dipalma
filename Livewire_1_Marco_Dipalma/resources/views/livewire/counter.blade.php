<div>
    <h2>Componente</h2>

    <div>
        <h1>{{ $count }}</h1>
     
        <button class="mx-1 btn btn-info" wire:click="increment">+</button>
     
        <button class="mx-1 btn btn-warning" wire:click="decrement">-</button>

        <button class="mx-1 btn btn-success" wire:click="incrementByNum({{$num}})">+{{$num}}</button>

        <button class="mx-1 btn btn-danger" wire:click="decrementByNum({{$num}})">-{{$num}}</button>

    </div>

</div>
