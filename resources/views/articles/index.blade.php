<x-layout>
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">

        <div class="container mt-4">
           @if (@session('success'))
            <div class="d-flex justify-content-center mb-4">
                <p class="bg-success py-4 px-5 rounded-4 shadow text-light">
                    {{session('success')}}
                </p>
            </div>   
            @endif
            <div class="align-middle gap-2 d-flex justify-content-between">
                <h3>Elenco Articoli inseriti</h3>
                <form class="d-flex" role="search" action="#" method="POST">
                    <input class="form-control me-2" name="search" type="search" placeholder="Cerca Articolo" aria-label="Search">
                </form>
                <button type="button" class="btn btn btn-success me-md-2">
                    <a class="text-decoration-none text-light" href="{{route('articles.create')}}">Crea un nuovo articolo</a>
                </button>
            </div>
            <table class="table border mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Autore</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($articles as $article)
                    <tr>
                        <th scope="row">#{{$article->id}}</th>
                        <td>
                            <img class="card-img-top" style="width:3rem"
                                src="{{Storage::url($article->images)}}"
                                alt="..." />
                        </td>
                        <td>{{$article->name}}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{route('articles.show',compact('article'))}}"
                                    class="btn btn-primary me-md-2">
                                    Visualizza
                                </a>
                                <a href="{{route('articles.edit',compact('article'))}}"
                                    class="btn btn-warning me-md-2">
                                    Modifica
                                </a>
                                    <button type="submit" class="btn btn-danger me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button>
                            </div>
                        </td>
                    </tr>
                    @empty
                        Nessun articolo disponibile
                    @endforelse
                </tbody>
            </table>
            {{ $articles->links() }}
        </div>
    </div>
</main>
{{-- MODAL ELIMINA --}}
<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Vuoi eliminare {{$article->titles}}?</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body d-flex justify-content-center">
        <form action="{{route('articles.delete',compact('article'))}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-success mx-4 px-3"><i class="fa-solid fa-check"></i>SI</button>
        </form>
        <button type="button" class="btn btn-danger mx-4" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>NO</button>
    </div>
  </div>
</div>
</div> --}}
</x-layout>