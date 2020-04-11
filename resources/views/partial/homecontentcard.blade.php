<section class="blog-list">
  <div class="container ">
    <div class="row mt-3">
      <div class="col-md-8">
        <h2 class="mb-3">{{ Settings::opt('homeBlogPostTitle') }}</h2>

        @foreach ($posts as $item)
        <div class="column mt-3">
          <div class="post-module">

            <div class="thumbnail">
              {{-- <div class="date">
                <div class="day">27</div>
                <div class="month">Mar</div>
              </div> --}}
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
        @endforeach


        {{-- <div class="containercard">
        </div> --}}

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4 mt-4">
          <a href="" class="btn btn-block btn-success">SELENGKAPNYA</a>
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
