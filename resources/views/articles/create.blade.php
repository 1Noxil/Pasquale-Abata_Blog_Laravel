<x-layout>
    <div class="container-fluid px-4 px-md-5 mt-5 pt-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-12 text-center mb-3">
                <h3> Crea un nuovo Articolo</h3>
            </div>
            <div class="col-lg-8 col-xl-6 border p-5 rounded">
                <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" id="authors" value="{{old('authors')}}"
                        name="authors" type="text">
                        <label for="authors">Autore</label>
                    </div>
                    @error('authors')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="form-floating mb-3">
                        <input class="form-control" id="titles" value="{{old('titles')}}"
                        name="titles" type="text">
                        <label for="titles">Titolo</label>
                    </div>
                    @error('titles')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="form-floating mb-3">
                        <input class="form-control" id="categorys" value="{{old('categorys')}}"
                        name="categorys" type="text">
                        <label for="categorys">Categoria</label>
                    </div>
                    @error('categorys')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="form-floating mb-3">
                        <input class="form-control p-5" id="txt_articles" type="file" name="txt_articles">
                        <label for="txt_articles">Testo Articolo</label>
                    </div>
                    @error('txt_articles')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="form-floating mb-3">
                        <img width="200" src="" class="img-responsive">
                        <input class="form-control" id="images" name="images" value type="file">
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