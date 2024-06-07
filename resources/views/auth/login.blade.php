<x-layout>
        <div class="container rounded shadow mt-5 login_custom">
            <div class="row">
                <!-- SECTION IMAGE -->
                <div class="col-12 col-lg-5 d-none d-lg-block p-0">
                    <img class="img-fluid" src="{{asset('img/login.jpg')}}" alt="">
                </div>
                <!-- SECTION FORM -->
                <div class="order-1 col-12 col-lg-6 mt-5 p-5 mx-auto ">
                    <!-- HEAD/SOCIAL -->
                    <div class="row">
                        
                        <div class="order-2 order-md-1 col-12 col-md-6 text-center text-md-start">
                            <h4>Bentornato!</h4>
                        </div>    
                        <div class="order-1 order-md-2 col-12 col-md-6">
                            <ul class="social_list">
                                <li>
                                    <a class="social_google" href="{{route('social.redirect',['social'=> 'google'])}}">
                                        <i class="bi bi-google"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="social_github" href="{{route('social.redirect',['social'=> 'github'])}}">
                                        <i class="bi bi-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="social_discord" href="{{route('social.redirect',['social'=> 'discord'])}}">
                                        <i class="bi bi-discord"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- FORM -->
                    <div class="form-login mt-5">
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Indirizzo Email</label>
                                <div class="d-flex align-items-center">
                                    <span class="border border-end-0">
                                        <i class="bi bi-envelope-at-fill"></i>
                                    </span>
                                    <input type="email" name="email" id="email" class="form-control rounded-0">
                                </div>
                            </div>
                            <!-- HIDE PASSWORD -->
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Password</label>
                                <div class="d-flex align-items-center">
                                    <span class="border border-end-0">
                                        <i class="bi bi-lock-fill"></i>
                                    </span>
                                    <input  type="password" name="password" id="password" class="form-control rounded-0">
                                    <span id="password-hide-wrap" class="border border-start-0">
                                        <i class="bi bi-eye-slash"></i>
                                    </span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <input type="checkbox" name="" id="remember">
                                        <label for="remember" class="ms-1">Ricordami</label>  
                                    </div>
                                    <a href="" class="">Password dimenticata?</a>
                                </div>
                            </div>
                            <!-- FOOT -->
                            <div class="row">
                                <div class="col-12 mb-2 mt-2 d-flex">
                                    <button type="submit" class="btn btn-outline-primary rounded-0 px-5 mx-auto">ENTRA</button>
                                </div>
                                
                                <div class="col-12 d-flex mt-1">
                                    <a href="{{route('register')}}" class="mx-auto">Non sei rigistrato?</a>
                                </div>
                            </div>
                        </form>   
                    </div>
                </div>
            </div>
        </div>    
</x-layout>