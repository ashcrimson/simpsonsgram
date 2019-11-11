@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-3">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" >
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-2">
                    <div class="h4">{{ $user->username }}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
                
                @can('update', $user->profile)
                    <a href="/p/create">Crear Nuevo Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Editar perfil</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> le siguen</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> seguidos</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}">{{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                <span class="text-dark"><p>{{ $post->caption }}</p></span>
            </a>
        </div>
        @endforeach
       
        
        
    </div>
</div>
@endsection
