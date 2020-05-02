@extends('layouts.app')
@section('breadcumb')


@if ($type =='blog')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><i class="fa fa-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('blogpage') }}">{{ ucwords(Settings::opt('blogPermalink')) }}</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{ $postData->title }}</li>
    </ol>
</nav>

@endif
@endsection


@section('content')

<!-- Page Content -->
<section class="blog-list">
    <div class="container ">
        <div class="row mt-3 mb-3">
            <div class="col-md-10 offset-md-1 col-centered">

                @if ($postData)

                <h2 class="card-title mt-3 mb-5">{{ $postData->title }}</h2>
                @if ($postData->featured_image)

                <img class="card-img-top lazy mb-5" src="{{ $postData->featured_image }}" alt="Card image cap">
                @endif


                <div class="justify-content contentbody">
                    {!! $postData->body !!}
                </div>

                @includeIf('blog.sharebutton',['title'=>$postData->title])

                @endif
            </div>

            <!-- Sidebar Widgets Column -->


        </div>
        <!-- /.row -->
    </div>
</section>





@endsection
