<x-layout>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-4 mb-3">
                <button type="button" class="btn btn btn-primary me-md-2">
                    <a class="text-decoration-none text-light" href="{{route('authors.index')}}"><i class="fa-solid fa-backward-step"></i> Torna indietro</a>
                </button>
            </div>
            <div class="col-12">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="d-flex">
                            <h5 class="bolder">AUTORE:</h5>
                            <p class="ms-2">{{$user->name}}</p>
                        </div>
                        <div class="d-flex">                
                            <h5 class="bolder">ARTICOLI SCRITTI:</h5>
                            <p class="ms-2">{{$user->articles->count()}}</p>
                        </div>
                        
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach ($articles as $article)
                    @if ($article->user_id == $user->id)
                    <x-card-article :article=$article />
                    @endif
                    @endforeach
                </div>
            </div>
            </div>
        </div>
    </div>
</x-layout>