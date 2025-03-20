<x-main>

    TITOLO: {{ $book->title }}
    Pagine: {{ $book->pages }}
    Anno: {{ $book->years }}

    Autore: {{ $book->author->name }} {{ $book->author->surname }}

</x-main>
