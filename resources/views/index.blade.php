@extends('layouts.app')
@section('content')

@includeIf('partial.homeslider')
@includeIf('partial.homecontentcard')



@endsection

@section('footerJs')
<script>
  // window.loadSlide();
</script>

@endsection
