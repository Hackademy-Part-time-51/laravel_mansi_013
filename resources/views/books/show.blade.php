<x-main>




    <div class="container mt-5">
        <div class="row g-5">
            <div class="col-md-8">
                <div class=" pb-5">
                    <h1 class="pb-4 mb-4 fst-italic ">
                        {{ $book->title }}
                    </h1>
                </div>

                <p>Numero di Pagine: {{ $book->checkPages() }}</p>
                <p>Numero di Pagine: {{ $book->pages ?? 'Senza Pagine' }}</p>
                <p>Anno di scrittura: {{ $book->years }}</p>
                <p>Autore: {{ $book->author->name }} {{ $book->author->surname }}</p>

            </div>


        </div>
    </div>
</x-main>
