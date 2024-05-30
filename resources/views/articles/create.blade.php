<x-layout>
    <div class="container-fluid px-4 px-md-5 mt-5 pt-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-12">
                <x-backbutton />
            </div>
            <div class="col-12 text-center mb-3">
                <h3> Crea un nuovo Articolo</h3>
            </div>
            <div class="col-lg-8 col-xl-6 border p-5 rounded">
                <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" value="{{old('title')}}"
                        name="title" type="text">
                        <label for="title">Titolo</label>
                    </div>
                    @error('title')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="form-floating mb-3">
                        <input class="form-control" id="category" value="{{old('category')}}"
                        name="category" type="text">
                        <label for="category">Categoria</label>
                    </div>
                    @error('category')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="form-floating mb-3">
                        <textarea class="form-control p-5" id="body"
                        name="body">{{old('body')}}</textarea>
                        <label for="body">Testo Articolo</label>
                    </div>
                    @error('body')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="form-floating mb-3">
                        <img width="200" src="" class="img-responsive">
                        <input class="form-control" id="image" name="image" value type="file">
                    </div>
                    <div class=" mb-3">
                        <input type="radio" name="status" value="0">
                        <label>Non Attivo</label><br>
                        <input type="radio" name="status" value="1">
                        <label>Attivo</label><br>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg"
                        type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>