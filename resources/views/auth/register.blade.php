<x-layout>
    <div class="container rounded shadow mt-5 login_custom">
        <div class="row">
            <!-- SECTION IMAGE -->
            <div class="order-2 col-12 col-lg-5 d-none d-lg-block p-0">
                <img class="img-fluid" src="{{asset('img/register.jpg')}}" alt="">
            </div>
            <!-- SECTION FORM -->
            <div class="order-1 col-12 col-lg-6 mt-5 p-5 mx-auto ">
                <!-- HEAD/SOCIAL -->
                <div class="row">
                    
                    <div class="order-2 order-md-1 col-12 col-md-6 text-center text-md-start">
                        <h4>Benvenuto!</h4>
                    </div>    
                    <div class="order-1 order-md-2 col-12 col-md-6">
                        <ul class="social_list">
                            <li>
                                <a class="social_twitch" href="">
                                    <i class="bi bi-twitch"></i>
                                </a>
                            </li>
                            <li>
                                <a class="social_github" href="">
                                    <i class="bi bi-github"></i>
                                </a>
                            </li>
                            <li>
                                <a class="social_discord" href="">
                                    <i class="bi bi-discord"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- FORM -->
                <div class="form-login mt-5">
                    <form action="{{route('register')}}" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Username</label>
                            <div class="d-flex align-items-center">
                                <span class="border border-end-0">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input type="name" name="name" id="name" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Indirizzo Email</label>
                            <div class="d-flex align-items-center">
                                <span class="border border-end-0">
                                    <i class="bi bi-envelope-at-fill"></i>
                                </span>
                                <input type="email" name="email" id="email" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <div class="d-flex align-items-center">
                                <!-- HIDE PASSWORD -->
                                <span class="border border-end-0">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input  type="password" name="password" id="password" class="form-control rounded-0">
                                <span id="password-hide-wrap" class="border border-start-0">
                                    <i class="bi bi-eye-slash"></i>
                                </span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label fw-bold">Conferma Password</label>
                            <div class="d-flex align-items-center">
                                <!-- HIDE PASSWORD -->
                                <span class="border border-end-0">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input  type="password" name="password_confirmation" id="password_confirmation" class="form-control rounded-0">
                                <span id="password-hide-wrap" class="border border-start-0">
                                    <i class="bi bi-eye-slash"></i>
                                </span>
                            </div>
                        </div>
                        <!-- FOOT -->
                        <div class="row">
                            <div class="col-12 mb-2 mt-2 d-flex">
                                <button type="submit" class="btn btn-outline-primary rounded-0 px-5 mx-auto">REGISTRATI</button>
                            </div>
                            
                            <div class="col-12 d-flex mt-1">
                                <a href="{{route('login')}}" class="mx-auto">Già registrato?</a>
                            </div>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>   
</x-layout>