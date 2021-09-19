<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <div align="center">
        <h1>IN THE NAME OF ALLAH</h1>
        <H3>This is a create blade!</H3>

        <hr>
        
        @livewireStyles
                    
        <div wire:poll>
        Current time: {{ now() }}
        </div>
         @livewireScripts
       
    </div>
</body>
</html>