<x-layout>
  <main class="max-w-5xl mx-auto py-10 min-h-[calc(100vh-160px)] px-4 w-full">

    {{-- NAVBAR --}}
    <x-navbar />

    <x-title>
      Histórico
    </x-title>

    {{-- HISTORICO --}}
    @forelse($habits as $habit)

    {{-- YEAR SELECTION --}}
      <div class="my-4">
        @foreach($avaliableYears as $y)
          <a
            href="{{ route('habits.history', $y) }}"
            class="habit-btn habit-shadow-lg p-2 inline-block
            {{ $selectedYear == $y ? 'bg-habit-orange' : 'bg-white' }}"
          >
            {{ $y }}
          </a>
        @endforeach
      </div>

      {{-- Gráfico de Contribuição --}}
      <x-contribution :$habit :year="$selectedYear" />
    @empty
      <div class="flex flex-col gap-4">
        <p class="text-black">
          Nenhum hábito para exibir histórico.
        </p>

        <a href="{{ route('habits.create') }}" class="p-2 habit-shadow-lg bg-habit-orange habit-btn w-max">
          + Adicionar
        </a>
      </div>
    @endforelse

  </main>
</x-layout>