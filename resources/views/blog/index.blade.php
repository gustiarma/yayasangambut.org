@extends('layouts.app')
@section('breadcumb')
{{-- <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><i class="fa fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="{{ route('blogpage') }}">{{ ucwords(Settings::opt('blogPermalink')) }}</a></li>

  </ol>
</nav> --}}
@endsection
@section('content')

<section class="blog-list">
  <div class="container ">
    <div class="row mt-3 mb-3">
      <div class="offset-md-2 col-centered blog-post">



        {{--
        <div class="blog-card alt">
          <div class="meta">
            <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-2.jpg)"></div>
            <ul class="details">
              <li class="author"><a href="#">Jane Doe</a></li>
              <li class="date">July. 15, 2015</li>
              <li class="tags">
                <ul>
                  <li><a href="#">Learn</a></li>
                  <li><a href="#">Code</a></li>
                  <li><a href="#">JavaScript</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="description">
            <h1>Mastering the Language</h1>
            <h2>Java is not the same as JavaScript</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
            <p class="read-more">
              <a href="#">Read More</a>
            </p>
          </div>
        </div> --}}





        @foreach ($posts as $item)
        <div class="blog-card">
          <div class="meta">
            <div class="photo" style="background-image: url({{ $item->featured_image }})"></div>
            <ul class="details">
              <li class="author"> <i class="fas fa-clock"></i><a href="#">{{ $item->author->name }}</a></li>
              <li class="date">{{ $item->created_at->diffForHumans() }}</li>
              <li class="tags">
                <ul>
                  <li><a href="#">Learn</a></li>
                  <li><a href="#">Code</a></li>
                  <li><a href="#">HTML</a></li>
                  <li><a href="#">CSS</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="description">
            <a href="{{ route('blogBySlug',['slug'=>$item->slug])}}">
              <h1>{{ $item->title }}</h1>
            </a>
            {{-- <h2>Opening a door to the future</h2> --}}
            <p>{{ strip_tags(Str::words($item->body,35)) }}</p>
            <p class="read-more">
              <a href="{{ route('blogBySlug',['slug'=>$item->slug])}}">Read More</a>
            </p>
          </div>
        </div>

        @endforeach
        {{-- @foreach ($posts as $item)
        <div class="row mt-3">
          <div class="post-module">

            <div class="thumbnail">
              <div class="date">
                <div class="day">27</div>
                <div class="month">Mar</div>
              </div>
              <a href="{{ route('blogBySlug',['slug'=>$item->slug])}}">
        <img src="{{ $item->featured_image }}" />
        </a>
      </div>
      <!-- Post Content-->
      <div class="post-content">
        @foreach ($item->tags as $tags)
        <div class="category">{{ $tags->name }}</div>
        @endforeach
        <a href="{{ route('blogBySlug',['slug'=>$item->slug])}}">
          <h1 class="title">{{ $item->title }}</h1>
        </a>

        <p class="description"> {{ strip_tags(Str::words($item->body,20)) }}</p>

        <div class="post-meta">
          <span class="timestamp" itemprop="datePublished" content="{{ $item->created_at }}"><i
              class="fas fa-clock"></i> {{ $item->created_at->diffForHumans() }}</span>
          <span class="comments" itemprop="name"><i class="fas fa-user"></i><a href="#">
              {{ $item->author->name }}</a></span>
        </div>



      </div>
    </div>

  </div>
  @endforeach --}}

  </div>

  <!-- Sidebar Widgets Column -->


  </div>
  <!-- /.row -->
  </div>
</section>




@endsection
