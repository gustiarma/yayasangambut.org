@extends('layouts.app')
@section('content')

@includeIf('partial.homeslider')
@includeIf('partial.homecontentcard')



@endsection

@section('footerJs')
<script>
  new Glide('.glide', {
      autoplay: 2000,
      hoverpause:true,
      dragThreshold: false,
      animationDuration: 300,
      type: 'carousel',
      startAt:1,
}).mount({Autoplay, Controls,Swipe });
</script>
@endsection
