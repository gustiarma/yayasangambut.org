@extends('layouts.app')
@section('breadcumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><i class="fa fa-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('blogpage') }}">{{ ucwords(Settings::opt('blogPermalink')) }}</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{ $postData->title }}</li>
    </ol>
</nav>
@endsection
@section('content')

<!-- Page Content -->
<section class="blog-list">
    <div class="container ">
        <div class="row mt-3 mb-3">
            <div class="col-md-8 offset-md-2 col-centered">

                @if ($postData)

                <h2 class="card-title mb-3">{{ $postData->title }}</h2>
                @if ($postData->featured_image)

                <img class="card-img-top lazy mb-5" src="{{ $postData->featured_image }}" alt="Card image cap">
                @endif


                <div class="justify-content contentbody">
                    {!! $postData->body !!}
                </div>



                @endif
            </div>

            <!-- Sidebar Widgets Column -->


        </div>
        <!-- /.row -->
    </div>
</section>





@endsection
