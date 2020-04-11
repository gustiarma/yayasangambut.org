<!-- Page Content -->
<section class="blog-list">
  <div class="container ">
    <div class="row mt-3">
      <div class="col-md-8">
        <h2 class="mb-3">{{ Settings::opt('homeBlogPostTitle') }}</h2>

        @foreach ($posts as $item)

        <article itemscope itemtype="https://schema.org/BlogPosting">
          <div class="item mb-3">
            <div class="media">
              <img itemprop="image" src="{{ asset($item->featured_image) }}"
                class="mr-3 img-fluid post-thumb d-none d-md-flex">
              <div class="media-body">
                <h3 class="title mb-1" itemprop="name headline">
                  <a itemprop="mainEntityOfPage url"
                    href="{{ route('blogBySlug',['slug'=>$item->slug])}}">{{ $item->title }}</a>
                </h3>

                <div class="meta mb-1 d-none d-md-block d-lg-block">
                  <meta itemprop="author" content="{{ $item->author->name }}">
                  <meta itemprop="dateModified" content="{{ $item->updated_at }}">

                  <span class="time" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
                    <meta itemprop="name" content="ExampleCorp Ltd">
                    <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                      <meta itemprop="url" content="{{ asset(Settings::opt('organizationLogo')) }}">
                      {{-- <meta itemprop="width" content="320">
                      <meta itemprop="height" content="60"> --}}
                    </span>

                  </span>

                  <span class="comment" itemprop="name">{{ Settings::opt('homeContentPublishedBy','Published By') }}:
                    {{ $item->author->name }}</span>
                  <span class="time" itemprop="datePublished" content="{{ $item->created_at }}">
                    {{ $item->created_at->diffForHumans() }}</span>



                  {{-- <span class="comment">
                    <a href="#">8 comments</a>
                  </span> --}}
                </div>
                <div class="intro" itemprop="articleSection">{{ strip_tags(Str::words($item->body,20)) }}</div>
                <a class="more-link"
                  href="{{ route('blogBySlug',['slug'=>$item->slug])}}">{{ Settings::opt('homeContentReadMoreText','Read more →') }}</a>
              </div>

            </div>

          </div>
        </article>
        <hr>
        @endforeach

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

       @includeIf('partial.sidebar')




      </div>

    </div>
    <!-- /.row -->
  </div>
</section>
