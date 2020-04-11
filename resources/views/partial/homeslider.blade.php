<div class="wrap">
  <div class="glide heropeek">

    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        @foreach ($slider as $item)
        <li class="glide__slide" style="">
          <article
            style="background-image: url('{{ $item->featured_image }}');">
            <div class="l--constrained">
              <div class="l-content">
                <h2 class="sliderImageTitle">Iklim</h2>
                <div class="sliderImageBody">Menggunakan solusi yang transformatif untuk mengatasi dan beradaptasi
                  terhadap perubahan iklim.</div>
                <div class="sliderImageLink"><a href="" class="btn " title="">Baca Selengkapnya</a></div>
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
