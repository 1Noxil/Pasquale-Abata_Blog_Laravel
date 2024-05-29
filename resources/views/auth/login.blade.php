<x-layout>
    <div class="container mt-5 pt-5 vh-100">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="shadow-sm p-5 border rounded form__custom" action="{{route('login')}}"
                    method="POST">
                @csrf
                    <div class="form__group field mb-3">
                        <input type="email" name="email" placeholder="Email" class="form__field" id="email" value="{{old('email')}}">
                        <label for="email" class="form__label">Email</label>
                    </div>
                    @error('email')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="form__group field mb-3">
                        <input id="input_password" type="password" name="password" placeholder="Email" class="form__field" id="password">
                        <x-hidepassword />
                        <label for="password"
                        class="form__label">Password</label>
                    </div>
                    @error('password')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="d-flex justify-content-end pt-3">
                        <button type="submit" class="button">Accedi</button>
                    </div>
                    <a href="{{route('register')}}" class="mt-3 text-black">
                        Non sei registrato?
                    </a>
                </form>
            </div>
        </div>
    </div>
</x-layout>