<x-layout>
    
    <div class="container shadow mt-5 h-100">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4 shadow d-flex flex-column align-items-center py-5">
                        <img class="avatar_profile rounded-circle" src="{{auth()->user()->providers[0]->social_avatar ?? ""}}" alt="">
                        <h4 class="bolder mt-2">{{auth()->user()->name}}</h4>
                        <p class="">{{auth()->user()->email}}</p>
                    </div>
                    <div class="col-6 py-5 px-5 ms-5">
                        <form action="{{route('profile.update')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nome</label>
                                    <input type="name" name="name" id="name" class="form-control rounded-0" value="{{auth()->user()->name}}">
                                    <button class="btn btn-primary mt-3 ms-auto d-block">Modifica</button>
                            </div> 
                        </form> 
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Indirizzo Email</label>
                            <input type="email" name="email" id="email" class="form-control rounded-0" value="{{auth()->user()->email}}" disabled>
                        </div> 
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control rounded-0" value="{{auth()->user()->password}}" disabled>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>