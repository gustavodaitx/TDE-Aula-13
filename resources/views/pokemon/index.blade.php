@foreach($pokemon as $pokemon)
    <div>
        <h3>{{ $pokemon->nome }}</h3>
        <p>{{ $pokemon->tipo }}</p>
        <p>{{ $pokemon->pontos }}</p>
        <a href="{{ url('itens/'.$pokemon->id.'/edit') }}">Edit</a>
        <form action="{{ url('itens/'.$pokemon->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach