<div>
    <div id="count">
        <button wire:click="increment">+</button>
        <button wire:click="decrement">-</button>
        <h1>{{ $count }}</h1>
    </div>
    <div id="name">
        <input type="text" name="" id="input" wire:model="name">
        <h3>{{ $name }}</h3>
        <button wire:click="reseet">reset</button>
    </div>
    <style>
        #count{
            text-align: center;
            margin-top: 10px;
        }
        button{
            padding: 15px;
            color: rgb(245, 241, 241);
            background: black;
        }
        #name{
            text-align: center;
            
        }
        #input{
            border: 2px solid black;
            padding: 15px;
        }
    </style>
</div>
