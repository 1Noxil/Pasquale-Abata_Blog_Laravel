<x-layout>

    <div class="container mt-5 pt-5 px-5">
        <h2 class="fw-bolder fs-5 mb-4">I nostri articoli</h2>
        <div class="row gx-5">
            @foreach ($articles as $article)
            <x-card-article :article=$article />
            @endforeach
        </div>
    {{$articles->links()}} 
    </div>   

</x-layout>