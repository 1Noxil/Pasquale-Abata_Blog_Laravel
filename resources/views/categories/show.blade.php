<x-layout>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2>{{$category->name}}</h2>
            </div>
            <hr>
            <div class="row">
                    @forelse ($category->articles as $article)
                        <x-card-article :article=$article />
                    @empty
                        Nessun articolo presente
                    @endforelse
            </div>
        </div>
    </div>
</x-layout>