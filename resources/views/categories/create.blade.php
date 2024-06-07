<x-layout>
    <div class="container-fluid px-4 px-md-5 mt-5 pt-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-12">
            </div>
            <div class="col-12 text-center mb-3">
                <h3> Crea un nuovo Articolo</h3>
            </div>
            <div class="col-lg-8 col-xl-6 border p-5 rounded">
                <form action="{{route('categories.store')}}" method="POST">
                    @csrf
                    
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" value="{{old('name')}}"
                        name="name" type="text">
                        <label for="name">Nome</label>
                    </div>
                    @error('name')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg"
                        type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>