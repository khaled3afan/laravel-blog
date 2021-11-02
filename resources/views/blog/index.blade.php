@extends('blog.layouts.blog-layout')

@section('sidebar')
@include('blog.layouts.sidebar')
@endsection
@section('content')

<div class="main-wrapper">

    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center single-col-max-width">
            <h2 class="heading">DevBlog - A Blog Template Made For Developers</h2>
            <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
            <div class="single-form-max-width pt-3 mx-auto">
                <form  class="signup-form row g-2 g-lg-2 align-items-center">
                    <div class="col-12 col-md-9">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control me-md-1 semail"
                            placeholder="Enter email">
                    </div>
                    <div class="col-12 col-md-2">
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                </form>
                <!--//signup-form-->
            </div>
            <!--//single-form-max-width-->
        </div>
        <!--//container-->
    </section>


    <section class="blog-list px-3 py-5 p-md-5">
        <div class="container single-col-max-width">
            @foreach ($articles as $article)
            <div class="item mb-5">
                <div class="row g-3 g-xl-0">
                    <div class="col-2 col-xl-3">
                        <img class="img-fluid post-thumb " src="{{ $article->image_url }}"
                            alt="image">
                    </div>
                    <div class="col">
                        <h3 class="title mb-1"><a class="text-link" href="blog-post.html">{{ $article->title }}</a></h3>
                        <div class="meta mb-1"><span class="date">{{ $article->created_at }}</span><span class="time">5 min
                                read</span><span class="comment"><a class="text-link" href="#">8 comments</a></span>
                        </div>
                        <div class="intro">
                            {{ $article->content }}
                        </div>
                        <a class="text-link" href="{{ route('blog.article.show', $article->id) }}">Read more &rarr;</a>
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->
            </div>
            {{-- //item --}}
            @endforeach
            <nav class="blog-nav nav nav-justified my-5">
                <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i
                        class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                <a class="nav-link-next nav-item nav-link rounded" href="#">Next<i
                        class="arrow-next fas fa-long-arrow-alt-right"></i></a>
            </nav>

        </div>
    </section>

    <footer class="footer text-center py-2 theme-bg-dark">

        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a
                href="https://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

    </footer>

</div>
<!--//main-wrapper-->

@endsection

@push('scripts')

<!-- Javascript -->
<script src="{{ asset('plugins/popper.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

@endpush
