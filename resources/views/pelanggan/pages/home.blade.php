@extends('pelanggan.layouts.index')

@section('content')
<div class="container mt-5">
    <!-- buatkan div berisi carousel dan list bersampingan -->
    <div class="row">
        <div class="col-md-8">
            <!-- carousel -->
            <div id="carouselExampleDark" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    @foreach ($newest as $key => $article)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="10000">
                        <img src="{{ asset('storage/product/' . $article->foto) }}" style="width: 100%; height:500px; object-fit: cover; padding:0;" alt="...">
                        <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.4);
                    -webkit-backdrop-filter: blur(5px);
                    backdrop-filter: blur(5px);">
                            <h5>{{ $article->name }}</h5>
                            <p>{{ $article->harga }}</p>
                            <!-- You can add more details or customize the content here -->
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-4">
            <!-- list -->
            <div class="list-group mt-3">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    The current link item
                </a>
                <a href="#" class="list-group-item list-group-item-action col">
                    <img class="img-fluid" src="assets/images/people.jpg" alt="">
                    <p>A second link item</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                <a href="#" class="list-group-item list-group-item-action">And a fifth one</a>

            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <!-- Team Member 1 -->
            @if ($data->isEmpty())
            <div class="container"></div>
            @else
            <div class="mt-5">
                <h4>Best Seller</h4>
            </div>
            @foreach ($data as $item)
            <div class="col-xl-3 col-md-6 mb-4 articleList">
                <a href="{{ route("articles", ['id' => $item->id])}}" style="text-decoration: none;">
                    <div class="card border-0 shadow" style="cursor: pointer;">
                        <img src="{{ asset('storage/product/' . $item->foto) }}" style="width: 100%; height:250px; object-fit: cover; padding:0;" card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">{{ $item->name }}</h5>
                            <div class="card-text text-black-50">Web Developer</div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    <div class="pagination d-flex flex-row justify-content-between mt-3">
        <div class="showData">
            <span>Data ditampilkan {{ $data->count() }} dari {{ $data->total() }} </span>
        </div>
        <div>
            {{ $data->links() }}
        </div>
    </div>
</div>

@endsection