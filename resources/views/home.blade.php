<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            {{ config('app.name') }}
        </title>

        @vite('resources/css/app.css')
    </head>
    
    <body>
        <div class="flex items-center justify-center h-screen">
            <h1 class="text-4xl font-bold text-gray-800">
                Bem-vindo ao {{ config('app.name') }}!
            </h1>
        </div>
    </body>
</html>