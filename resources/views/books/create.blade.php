<x-main>
    <div class="px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-lg-8 col-xl-6 border p-5 rounded">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('books.store') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" required id="title" value="{{ old('title') }}" name="title"
                            type="text">
                        <label for="name">Nome</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="pages" value="{{ old('pages') }}" name="pages"
                            type="text">
                        <label for="pages">Pagine</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="years" value="{{ old('years') }}" name="years"
                            type="text">
                        <label for="years">Anno</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-control" name="author_id" id="author_id">
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }} {{ $author->surname }}</option>
                            @endforeach
                        </select>
                        <label for="author_id">Autore</label>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-main>
