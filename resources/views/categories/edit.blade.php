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

                <form action="{{ route('categories.update', $category) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" value="{{ $category->name }}" name="name"
                            type="text">
                        <label for="name">Nome</label>
                    </div>


                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Aggirona</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-main>
