<x-layout>
    <div class="container mt-5 pt-5">
        <div class="row">
            <x-backbutton />
            <div class="col-12">
                <div class="row ">
                    <div class="col-6 justify-content-center d-flex">
                        <img class="img-fluid img__show" src="{{Storage::url($article->image)}}" alt="">
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <div class="ms-5">
                            <h4 class="bolder">AUTORE</h4>
                            <p>{{$article->user->name}}</p>
                        </div>
                        <div class="ms-5">
                            <h4 class="bolder">TITOLO</h4>
                            <p>{{$article->title}}</p>
                        </div>
                        <div class="ms-5">
                            <h4 class="bolder">CATEGORIA</h4>
                            <p>{{$article->category}}</p>
                        </div>
                    </div>
                    <div class="col-12 txt__custom mt-5 pt-5">
                        <p class="bolder">
                            {{$article->body}}
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-layout>