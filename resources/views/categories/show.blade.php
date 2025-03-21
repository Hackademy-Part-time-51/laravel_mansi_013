<x-main>

    Nome: {{ $author->name }}
    Cognome: {{ $author->surname }}

    <hr>

    <ul>
        @foreach ($author->books as $book)
            <li>{{ $book->title }} </li>
        @endforeach

    </ul>

</x-main>
