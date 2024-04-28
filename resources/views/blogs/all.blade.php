@extends('layouts.app')

@section('title', __('header.blogs') . ' -')

@section('content')
<section class="breadcrumb-area d-flex align-items-center"
         style="background-image:url({{ asset('assets/img/testimonial/test-bg.png') }})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        @if(\Illuminate\Support\Facades\Lang::has('header.blogs'))
                        <h2>{{ __('header.blogs') }}</h2>
                        @else
                        <h2></h2>
                        @endif
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    @if(\Illuminate\Support\Facades\Lang::has('header.home'))
                                    <li class="breadcrumb-item"><a href="/">{{ __('header.home') }}</a></li>
                                    @endif
                                    @if(\Illuminate\Support\Facades\Lang::has('header.blogs'))
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('header.blogs') }}</li>
                                    @endif
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="inner-blog pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach($blogs as $blog)
                <div class="bsingle__post mb-50">
                    <a href="{{ url('/blogs/' . $blog->id . '-' . slug($blog->title)) }}">
                        <div class="bsingle__post-thumb">
                            <img src="{{ asset('uploads/' . $blog->image) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="bsingle__content">
                            <div class="admin">
                                <a><i class="far fa-user"></i> {{ $blog->user->fullname }}</a>
                            </div>
                            <h2>
                                <a href="{{ url('/blogs/' . $blog->id . '-' . slug($blog->title)) }}">
                                    {{ $blog->title }}
                                </a>
                            </h2>
                            <div class="meta-info">
                                <ul>
                                    <li><i class="fal fa-calendar-alt"></i>{{ $blog->created_at->format('d m, Y') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                {{ $blogs->links() }}
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar-widget">
                    <section id="custom_html-5" class="widget_text widget widget_custom_html">
                        @if(\Illuminate\Support\Facades\Lang::has('third.follow_us'))
                        <h2 class="widget-title">{{ __('third.follow_us') }}</h2>
                        @else
                        <h2></h2>
                        @endif
                        <div class="textwidget custom-html-widget">
                            <div class="widget-social">
                                <a href="https://www.linkedin.com/company/76268853/"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.facebook.com/Digiuth-111301508002237/"><i
                                            class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/digiuth/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </section>
                    <section id="categories-1" class="widget widget_categories">
                        @if(\Illuminate\Support\Facades\Lang::has('Categories'))
                        <h2 class="widget-title">{{ __('Categories') }}</h2>
                        @else
                        <h2></h2>
                        @endif
                        <ul>
                            @foreach($categories as $category)
                            <li class="cat-item cat-item-16">
                                <a href="{{ url('/blogs/category/' . $category->id . '-' . slug($category->title)) }}">{{
                                    $category->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
