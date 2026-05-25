<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $article->title }}</title>
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        body {
            background: #f8f9fc;
        }
        .article-header {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
        .author-card {
            box-shadow: 0 0.15rem 1.75rem 0 rgb(58 59 69 / 15%);
        }
        .article-content p {
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <a href="{{ url('/') }}" class="btn btn-sm btn-secondary mb-4"><i class="fas fa-arrow-left"></i> Kembali ke Beranda</a>

                <div class="card shadow-sm border-0">
                    @if($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top img-fluid" alt="{{ $article->title }}">
                    @endif
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="badge badge-primary">{{ $article->category->name ?? 'Tanpa Kategori' }}</span>
                            @if($article->tags->isNotEmpty())
                                @foreach($article->tags as $tag)
                                    <span class="badge badge-info">{{ $tag->name }}</span>
                                @endforeach
                            @endif
                        </div>

                        <h1 class="h3 font-weight-bold mb-3">{{ $article->title }}</h1>
                        <div class="text-muted mb-4">
                            Ditulis oleh <strong>{{ $article->user->name ?? 'Penulis Tidak Diketahui' }}</strong>
                        </div>

                        <div class="article-content text-gray-800 mb-5">
                            {!! nl2br(e($article->content)) !!}
                        </div>

                        <div class="author-card card border-0 mb-5">
                            <div class="card-body">
                                <h5 class="mb-3">Tentang Penulis</h5>
                                <p class="mb-1"><strong>Nama:</strong> {{ $article->user->name ?? '-' }}</p>
                                <p class="mb-1"><strong>Telepon:</strong> {{ optional($article->user->profile)->phone ?? '-' }}</p>
                                <div class="mt-3">
                                    <h6>Biografi</h6>
                                    <p class="mb-0">{{ optional($article->user->profile)->bio ?? 'Biografi penulis belum tersedia.' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
