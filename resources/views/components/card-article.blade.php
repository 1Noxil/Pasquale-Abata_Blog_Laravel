<div class="col-lg-4 mb-5">
        <div class="card shadow border-0">
            <img class="card-img-top" src="{{Storage::url($article->image)}}" alt="...">
            <div class="card-body p-4">
                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                <a class="text-decoration-none link-dark stretched-link" href="{{route('blog.show',['article' => $article->slug])}}"><div class="h5 card-title mb-3">{{$article->title}}</div></a>
                <p class="card-text mb-0">{{$article->body}}</p>
            </div>
            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                <div class="d-flex align-items-end justify-content-between">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle me-3 avatar" src="{{$article->user->providers[0]->social_avatar ?? ""}}" alt="...">
                        <div class="small">
                            <div class="fw-bold">{{$article->user->name}}</div>
                            <div class="text-muted">{{$article->timestamp}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>