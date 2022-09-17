@extends('template.user')

@section('title')
    Profile
@endsection

@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<div class="container">
  <!-- Success Message -->

<div class="row justify-content-center">
  <div class="col-md-4">
      <img class="img-profile" src="https://png2.cleanpng.com/sh/4227f3b02d5af867ce76c688b2cc70d5/L0KzQYm3U8E6N51uj5H0aYP2gLBuTfNwdaF6jNd7LXnmf7B6Tfdwd5hxfZ9qY3PyhbB7TgV0baMyiOR4ZnnvdX7wgB9vbppzReJ3Zz3sc7F1k71ld6hzhNHqZD3zgrFtifxmNWZmeqI8MEHoQ4PqgskxNmI8T6k8OEC1QYa5UcQ6PmEATKQ5OEGxgLBu/kisspng-computer-icons-google-account-user-profile-iconfin-png-icons-download-profile-5ab0301e32cb90.1777380215214960942081.png" alt="no-image">
  </div>
  <div class="offset-md-2 col-md-6">
      <div class="content">
        <!-- Data User -->
      <label for="">Name :</label>
      <b>{{ Auth::user()->name }}</b>
      <p></p>
      <label for="">Email :</label>
      <b>{{ Auth::user()->email }}</b>
      <p></p>
      <label for="">Address :</label>
      <b>{{ Auth::user()->address }}</b>
      <p></p>
      <label for="">Phone :</label>
      <b>{{ Auth::user()->phone }}</b>
      <p></p>
      <!-- TopUp -->
      {{-- @if($topup == null)
      <p style="color:red">Havent top up yet</p>
      @else
      <p style="color:green">Rp{{number_format($topup->amount)}}</p>
      @endif --}}
      {{-- <button class="btn btn-topup" data-toggle="modal" data-target="#exampleModal">Top-Up Now</button> --}}
          </div>
      </div>
</div>
</div>
@endsection
