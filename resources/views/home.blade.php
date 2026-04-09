<h1>

    Bem vindo a página inicial! {{ $name }}

</h1>
<p>Aqui estão seus hábitos:</p>
<ul>
    @foreach ($habits as $habit)
        <li>
            {{ $habit }}
        </li>
    @endforeach
</ul>

// Verificando se o usuário está autenticado
@auth
    <p> Você está logado!</p>
@endauth

// Verificando se o usuário é um convidado (não autenticado)
@guest
    <p> Você não está logado!</p>
@endguest