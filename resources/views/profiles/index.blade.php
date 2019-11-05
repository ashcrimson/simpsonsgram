@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-3">
            <img src="https://instagram.fccp4-1.fna.fbcdn.net/vp/18e7a396185832ece4e61eb421143d47/5E5FC8DC/t51.2885-19/s150x150/49907170_302327640425198_4852141424646291456_n.jpg?_nc_ht=instagram.fccp4-1.fna.fbcdn.net" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}">{{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://media.canalnet.tv/2018/08/Homero-Simpson.jpeg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://www.elheraldo.co/sites/default/files/styles/width_860/public/articulo/2017/05/29/what-homer-simpson-taught-us-about-doughnuts_3k8v.jpg?itok=q6b3QLar" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="http://static.t13.cl/images/sizes/1200x675/1455720735-19-homer.jpg" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
