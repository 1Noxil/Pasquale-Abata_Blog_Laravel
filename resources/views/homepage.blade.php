<x-layout>
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">"Inspire. Inform. Engage."</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Benvenuti nel nostro blog! Qui troverete articoli interessanti e approfondimenti sulle ultime novità e tendenze, il nostro obiettivo è condividere conoscenze e ispirazioni con voi. Unitevi alla nostra comunità, lasciate un commento e condividete le vostre opinioni. Buona lettura!</p>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{asset('img/homepage.jpg')}}" alt="..." /></div>
            </div>
        </div>
    </header>
    <!-- Blog preview section-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">From our blog</h2>
                        <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                @for ($i=0;$i<3;$i++)
                @if (count($articles)> $i)
                <x-card-article :article=$articles[$i] />     
                    @else
                    <h1>Articolo non disponibili</h1>
                @endif
                @endfor
            </div>
        </div>
    </section>
</main>
</x-layout>