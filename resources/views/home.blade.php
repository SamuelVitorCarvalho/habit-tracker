<x-layout>

    <main class="py-10">

        <div class="flex items-center justify-center h-screen">
            <h1 class="text-4xl font-bold text-gray-800">
                Bem-vindo ao {{ config('app.name') }}!
            </h1>
        </div>

        @auth
            <p>
                Bem vindo(a), {{ auth()->user()->name }}!
            </p>
        @endauth

    </main>

</x-layout>