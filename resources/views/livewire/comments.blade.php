

<div>

<div>
@foreach($comments as $comment)
    {{ $comment['body'] }}
</br>
@endforeach


</div>


<input wire:click="addnew" class="w3-btn w3-red w3-round" id="f" type="button" value="Minus">

<br>
<input wire:click="show_data" class="w3-btn w3-red w3-round" id="f" type="button" value="Show Data">

<br>
<input wire:click="addtodb" class="w3-btn w3-yellow w3-round" id="f" type="button" value="Add to db">

<br>

<div wire:loading wire:target="show_data">
        لطفا منتظر بمانید
    </div>



{{ "Rows are : ".$count_row }}
<br>
@foreach($datafetch as $tit)
    {{ $tit -> type." , ".$tit -> title }}
    <br>
@endforeach

@if($count_row < 30)
    <p>No records!</p>
@endif

{{ json_encode($ans) }}

{{ implode("-", $ans) }}

</div>

