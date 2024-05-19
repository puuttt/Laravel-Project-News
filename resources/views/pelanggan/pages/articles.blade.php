@extends('pelanggan.layouts.index')

@section('content')
<!-- menampilkan artikel yang sesuai dengan apa yang ditekan di halaman utama dengan mengirimkan id nya -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Artikel</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($data as $article)
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{ asset('storage/product/' . $article->foto) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title
                                        ">{{ $article->category }}</h5>
                                        <p class="card-text">{{ $article->name }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Category</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group
                    ">
                        @foreach ($data as $category)
                            <li class="list-group
                            -item">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection