<x-layout>
    <div class="container-fluid px-4 px-md-5 mt-5 pt-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-12">
                <x-backbutton />
            </div>
            <div class="col-12 text-center mb-3">
                <h3> ModificaArticolo</h3>
            </div>
            <div class="col-lg-8 col-xl-6 border p-5 rounded">
                <form action="{{route('articles.update', compact('article'))}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" value="{{$article->title}}"
                        name="title" type="text">
                        <label for="title">Titolo</label>
                    </div>
                    @error('title')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="form-floating mb-3">
                        <textarea class="form-control p-5" id="body"
                        name="body">{{$article->body}}"</textarea>
                        <label for="body">Testo Articolo</label>
                    </div>
                    @error('body')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="form-control mb-3">
                        @forelse ($categories as $category)
                        <div class="form-check">
                            <input class="form-check-input"
                            @checked($article->categories->contains($category->id))
                                type="checkbox" id="categories_id"
                                name="categories[]" value="{{$category->id}}">
                            <label class="form-check-label"
                                for="categories_id">{{$category->name}}</label>
                        </div>  
                        @empty
                           Nessun tag disponibile 
                        @endforelse
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select"name="user_id" id="user_id" aria-label="Floating label select example">
                          @foreach ($users as $user)
                          <option value="{{$user->id}}">{{$user->name}}</option>     
                          @endforeach 
                        </select>
                        <label for="user_id">Seleziona Autore</label>
                      </div>
                    <div class="form-floating mb-3">
                        <img width="200" src="{{Storage::url($article->image)}}" class="img-responsive">
                        <input class="form-control" id="image" name="image" value type="file">
                    </div>
                    <div class=" mb-3">
                        <input type="radio" name="status" value="0" @checked(!$article->status)>
                        <label>Non Attivo</label><br>
                        <input type="radio" name="status" value="1" @checked($article->status)>
                        <label>Attivo</label><br>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg"
                        type="submit">Modifica</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>