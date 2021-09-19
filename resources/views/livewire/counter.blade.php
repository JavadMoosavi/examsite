<div>
    <input wire:click="increament" class="w3-btn w3-red w3-round" id="f" type="button" value="Plus">

    <h1> {{$count}} </h1>


    <input wire:click="decrement" class="w3-btn w3-red w3-round" id="f" type="button" value="Minus">

    <div wire:loading wire:target="increament">
        Processing Payment...
    </div>
</div>
