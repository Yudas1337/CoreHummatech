@extends('admin.layouts.app')

@section('subcontent')
    <div class="page-title">
        <div class="d-flex justify-content-between">
            <p>{{ $news->updated_at->format('l, j F Y') }}</p>
            <a href="/news/index" class="btn btn-primary">Kembali</a>
        </div>
        <p class="mb-0 fs-6" style="font-weight: 600">
            Judul
        </p>
        <h2>{{ $news->title }}</h2>
    </div>
@endsection
@section('content')
    <div class="col">
        <div class="img-news">
            <img src="{{ asset('storage/'.$news->image ?? '') }}" class="w-100" alt="{{ $news->title ?? '' }}" />
        </div>
        <div class="news-description mt-3">
            <p class="mb-0 fs-6" style="font-weight: 600">
                Deskripsi
            </p>
            {!! $news->description !!}
        </div>
        {{-- <div class="row">
            <p class="mb-0 fs-6" style="font-weight: 600">
                Gambar
            </p>
            @foreach ($newsImages as $newsImage)
            <div class="col-12 col-xl-5 mt-3 mb-3">
                <img src="{{ asset('storage/' . $newsImage->photo) }}" alt="">
            </div>
            @endforeach
        </div> --}}
        {{-- <div class="tags d-flex flex-wrap gap-2">
            <p class="fw-bold pe-2">Tags:</p>
            @foreach ($categories as $index=>$category)
                @php
                    $colors = ['primary', 'warning', 'danger', 'info', 'success'];
                    $colorIndex = $index % count($colors);
                    $colorClass = $colors[$colorIndex];
                @endphp

                @dd($categories)

                <div class="d-flex">
                    <span class="p-1 bg-{{ $colorClass }}"
                        style="height: 33px; border-radius: 10px; margin-top: -2px"></span>
                    <p style="background-color:rgba(var(--bs-{{ $colorClass }}-rgb), .125); padding: 3px 10px; border-radius:5px">{{ $category->categoryNews->name }}</p>
                </div>
            @endforeach

        </div> --}}
    </div>
@endsection

@section('script')
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
