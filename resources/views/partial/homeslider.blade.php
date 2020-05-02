<div class="wrap">
    <div class="glide heropeek">

        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                @foreach ($slider as $item)
                <li class="glide__slide" style="">
                    <article style="background-image: url('{{ $item->featured_image }}');">
                        <div class="slidercontent">
                            <div class="l-content">
                                <h3 class="sliderImageTitle">{{$item->title}}</h3>
                                <div class="sliderImageBody">{{Settings::excerpt($item->body)}}</div>
                                {{-- <div class="sliderImageLink"><a href="{{ route('blogBySlug',['slug'=>$item->slug])}}"
                                        class="btn " title="">Baca Selengkapnya</a>
                                </div> --}}
                            </div>
                        </div>
                    </article>
                </li>

                @endforeach



            </ul>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=2"></button>
                <button class="glide__bullet" data-glide-dir="=3"></button>
                <button class="glide__bullet" data-glide-dir="=4"></button>
                <button class="glide__bullet" data-glide-dir="=5"></button>
                <button class="glide__bullet" data-glide-dir="=6"></button>
            </div>

        </div>



    </div>

</div>
