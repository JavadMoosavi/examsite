<div align="center">
    <form wire:submit.prevent="submitfrm" >
        @csrf
        <input type="text" name="name" wire:model.lazy="name" placeholder="Name here" />
        <br>
        <input type="text" name="email" wire:model.lazy="email" placeholder="email here" />
        <br>
        <input type="text" name="mobile" wire:model.lazy="mobile" placeholder="mobile here" />
        <br>
        <input type="password" name="password" wire:model.lazy="password" placeholder="Password here" />
        <br>
        <br>
        <input type="checkbox" name="rem" wire:model="chk">
        <label for="rem">مرا به خاطر داشته باش</label>
        <br>
        <br>
        <input type="submit" value="Send form" class="w3-button w3-red w3-round-large"/>

    </form>
</div>