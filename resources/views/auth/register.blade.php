<x-layout>
    <div class="container mt-5 pt-5 vh-100">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form class="p-5 border rounded form__custom" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3 form__group field">
                        <input type="text" name="name" placeholder="Username" class="form__field" id="name" value="{{old('name')}}">
                        <label for="name" class="form__label">Username</label>
                    </div>
                    @error('name')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="mb-3 form__group field">
                        <input type="email" name="email" placeholder="Email" class="form__field" id="email" value="{{old('email')}}">
                        <label for="email" class="form__label">Email</label>
                    </div>
                    @error('email')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="mb-3 form__group field">
                        <input id="input_password" type="password" name="password" placeholder="Password" class="form__field" id="password" value="{{old('password')}}">
                        <x-hidepassword />
                        <label for="password" class="form__label">Password</label>
                    </div>
                    @error('password')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="mb-3 form__group field">
                        <input type="password" name="password_confirmation" placeholder="Password" class="form__field" id="password_confirmation">
                        <label for="password_confirmation" class="form__label">Conferma password</label>
                    </div>

                    <div class="d-flex justify-content-end pt-3">
                        <button type="submit" class="button">Registrati</button>
                        <a href="{{route('login')}}" class="ms-3">
                            <button class="button py-2">Già registrato?</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>