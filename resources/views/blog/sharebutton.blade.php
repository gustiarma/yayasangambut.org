<div class='social-share-btns-container'>
  <div class='social-share-btns'>
    <a class='share-btn share-btn-twitter' href='https://twitter.com/intent/tweet?text={{ url()->current() }}'
      rel='nofollow' target='_blank'>
      <i class='ion-social-twitter'></i>
      Tweet
    </a>
    <a class='share-btn share-btn-facebook' href='https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}'
      rel='nofollow' target='_blank'>
      <i class='ion-social-facebook'></i>
      Share
    </a>
    <a class='share-btn share-btn-whatsapp' href='whatsapp://send?text={{ $title . "\n" .url()->current() }}'
      rel='nofollow' target='_blank'>
      <i class='ion-social-whatsapp'></i>
      Share
    </a>

  </div>

</div>
