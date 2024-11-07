<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="tipo" placeholder="Tipo" required>
    <input type="numeric" name="pontos_de_poder" placeholder="Pontos_de_Poder" required>
    <button type="submit">Create Product</button>
</form>