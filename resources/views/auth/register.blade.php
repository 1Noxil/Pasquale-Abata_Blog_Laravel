<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form class="p-5 border rounded" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Userusername</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                    </div>
                    @error('name')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="mb-3">
                        <label for="email" class="form-label">Email utente</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">
                    </div>
                    @error('email')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="mb-3">
                        <label for="password"
                            class="form-label">Password</label>
                        <input id="input_password" type="password" name="password" class="form-control" id="password" value="{{old('password')}}">
                        <x-hidepassword />
                    </div>
                    @error('password')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>

                    <button type="submit"
                        class="btn btn-dark">Registrati</button>
                    <a href="{{route('login')}}" class="btn btn-outline-dark">Gia'
                        iscritto?</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>