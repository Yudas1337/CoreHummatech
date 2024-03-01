@extends('admin.layouts.app')

@section('subcontent')
    <div class="page-title">
            {{ $news->updated_at->format('l, j F Y') }}</p>
        <h2>{{ $news->title }}</h2>
    </div>
@endsection
@section('content')
    <div class="col">
        <div class="img-news">
            <img src="{{ Storage::url($news->image) }}" class="w-100" alt="{{ $news->title }}" />
        </div>
        <div class="news-description mt-3">
            {!! $news->description !!}
        </div>
        <div class="tags d-flex flex-wrap gap-2">
            <p class="fw-bold pe-2">Tags:</p>
            @foreach (explode(',', $news->tags) as $index => $tag)
                @php
                    $colors = ['primary', 'warning', 'danger', 'info', 'success'];
                    $colorIndex = $index % count($colors);
                    $colorClass = $colors[$colorIndex];
                @endphp
                <div class="d-flex">
                    <span class="p-1 bg-{{ $colorClass }}"
                        style="height: 33px; border-radius: 10px; margin-top: -2px"></span>
                    <p style="background-color:rgba(var(--bs-{{ $colorClass }}-rgb), .125); padding: 3px 10px; border-radius:5px">Keseruan</p>
                </div>
            @endforeach

        </div>
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
