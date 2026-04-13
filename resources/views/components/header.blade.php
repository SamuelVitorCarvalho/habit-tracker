<header class="bg-white border-b-2">
    
    <div class="max-w-7xl mx-auto flex items-center justify-between p-4">
        {{-- LOGO --}}
        <div class="flex items-center gap-2 font-bold">
            <a href="{{ route('habits.index') }}" class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-orange">
                HT
            </a>
            <p>
                Habit Tracker
            </p>
        </div>
        {{-- GITHUB --}}
        <div>
            @auth
            <form class="inline" action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="submit" class="habit-shadow-lg p-2 habit-btn">
                    Sair
                </button>
            </form>
            @endauth
            @guest
                <div class="flex gap-2">
                    <a href="{{ route('site.register') }}" class="habit-shadow-lg p-2 habit-btn">
                        Cadastrar
                    </a>
                    <a href="{{ route('site.login') }}" class="bg-habit-orange habit-shadow-lg p-2 habit-btn">
                        Login
                    </a>
                </div>
            @endguest
        </div>
    </div>

</header>