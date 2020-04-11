@extends('layouts.app')
@section('breadcumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><i class="fa fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="{{ route('blogpage') }}">{{ ucwords(Settings::opt('blogPermalink')) }}</a></li>

  </ol>
</nav>
@endsection
@section('content')

<!-- Page Content -->


asdasd


@endsection
