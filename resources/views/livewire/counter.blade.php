<div>

    <div class="container-fluid">
        <h2> Sono il componente livewire del counter</h2>
        <div>
            <h3>Counter:</h3>
            <h1>{{$value}}</h1>
            <div>
                <button type="button" class="btn btn-light" wire:click="increment">Incrementa</button>
                <button type="button" class="btn btn-light" wire:click="decrement">Decrementa</button>
            </div>
            <div style="margin-top: 30px">
                <button type="button" class="btn btn-light" wire:click="incrementByNumber(3)">Incrementa di 3</button>
                <button type="button" class="btn btn-light" wire:click="decrementByNumber(3)">Decrementa di 3</button>
            </div>


        </div>
    </div>
</div>
