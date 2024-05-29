<x-layout>
    <div class="container mt-5 pt-5">
        <div class="row">
            <x-backbutton />
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <img class="img-fluid" src="{{Storage::url($article->images)}}" alt="">
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <div class="ms-5">
                            <h4 class="bolder">AUTORE</h4>
                            <p>{{$article->authors}}</p>
                        </div>
                        <div class="ms-5">
                            <h4 class="bolder">TITOLO</h4>
                            <p>{{$article->titles}}</p>
                        </div>
                        <div class="ms-5">
                            <h4 class="bolder">CATEGORIA</h4>
                            <p>{{$article->categorys}}</p>
                        </div>
                    </div>
                    <div class="col-12 txt__custom">
                        <p class="bolder">
                            {{$article->txt_articles}}
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-layout>