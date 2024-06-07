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
                <h3>Elenco Categorie inserite</h3>
                <form class="d-flex" role="search" action="#" method="POST">
                    <input class="form-control me-2" name="search" type="search" placeholder="Cerca Articolo" aria-label="Search">
                </form>
                <button type="button" class="btn btn btn-success me-md-2">
                    <a class="text-decoration-none text-light" href="{{route('categories.create')}}">Crea nuova categoria</a>
                </button>
            </div>
            <table class="table border mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Numero Articoli</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                    <tr>
                        <th scope="row">#{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td>{{$category->articles->count()}}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{route('categories.show',compact('category'))}}"
                                    class="btn btn-primary me-md-2">
                                    Visualizza
                                </a>
                                <a href="{{route('categories.edit',compact('category'))}}"
                                    class="btn btn-warning me-md-2">
                                    Modifica
                                </a>
                                    <a type="submit" class="btn btn-danger me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</a>  
                            </div>
                        </td>
                    </tr>
                    @empty
                        Nessun articolo disponibile
                    @endforelse
                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>
</main>
{{-- MODAL ELIMINA --}}
<!-- Modal -->
@isset ($category)
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Vuoi eliminare {{$category->title}}?</h1>               
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body d-flex justify-content-center">
        <form action="{{route('categories.destroy',compact('category'))}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-success mx-4 px-3"><i class="fa-solid fa-check"></i>SI</button>
        </form>
        <button type="button" class="btn btn-danger mx-4" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>NO</button>
    </div>
</div>
</div>
</div>
@endisset
</x-layout>