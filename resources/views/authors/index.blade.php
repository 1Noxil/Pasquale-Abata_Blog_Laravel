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
                <h3>Elenco Autori </h3>
                <form class="d-flex" role="search" action="#" method="POST">
                    <input class="form-control me-2" name="search" type="search" placeholder="Cerca Articolo" aria-label="Search">
                </form>
            </div>
            <table class="table border mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Autore</th>
                        <th scope="col">Articoli</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <th scope="row">#{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->articles->count()}}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{route('authors.show',compact('user'))}}"
                                    class="btn btn-primary me-md-2">
                                    Visualizza
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                        Nessun Autore disponibile
                    @endforelse
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</main>
</x-layout>