@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img class="mb-2 rounded" src="https://picsum.photos/seed/{{ $user->email }}/700/250" alt="User banner">

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
            </div>
        </div>
        <p class="text-sm">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis odio consequuntur, earum dolorum dicta illo in iste voluptatem pariatur repellendus, error, tempore quidem. Amet expedita rem architecto adipisci. Incidunt, quas.
        </p>

        <img
        class="rounded-full mr-2 absolute"
        src="{{ $user->avatar }}"
        alt="avatar"
        style="width: 150px; height: 150px; left:calc(50% - 75px); top: 140px;">

    </header>
    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection
