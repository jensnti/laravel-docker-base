<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img
                class="mb-2 rounded"
                src="https://picsum.photos/seed/{{ $user->email }}/700/250"
                alt="User banner">
            <img
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                src="{{ $user->avatar }}"
                alt="avatar"
                width="150"
                style="left: 50%;">
                <!-- style="width: 150px; left: calc(50% - 75px);"> -->
        </div>
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <p class="text-sm">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis odio consequuntur, earum dolorum dicta illo in iste voluptatem pariatur repellendus, error, tempore quidem. Amet expedita rem architecto adipisci. Incidunt, quas.
        </p>


    </header>
    @include('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app>
