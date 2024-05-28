<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 border rounded" action="{{route('login')}}"
                    method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">
                    </div>
                    @error('email')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="mb-3">
                        <label for="password"
                            class="form-label">Password</label>
                        <input id="input_password" type="password" name="password"
                            class="form-control" id="password">
                           <x-hidepassword />
                    </div>
                    @error('password')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <div class="d-flex justify-content-end pt-3">
                        <button type="submit" class="button">Accedi</button>
                        <a href="{{route('register')}}" class="ms-3">
                            <button class="button py-2">Non sei registrato?</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>