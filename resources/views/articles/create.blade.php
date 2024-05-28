<x-layout>
    <div class="container-fluid px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-lg-8 col-xl-6 border p-5 rounded">
                <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" id="authors" value
                            name="authors" type="text">
                        <label for="authors">Autore</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="titles" value
                            name="titles" type="text">
                        <label for="titles">Titolo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="categorys" value
                            name="categorys" type="text">
                        <label for="titles">Categoria</label>
                    </div>
                        
                    
                    <div class="form-floating mb-3">
                        <img width="200"
                            src="https://images.freeimages.com/images/large-previews/83c/barn-silo-detail-5-1210478.jpg"
                            class="img-responsive">
                        <input class="form-control" id="image"
                            name="image" value
                            type="file">

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