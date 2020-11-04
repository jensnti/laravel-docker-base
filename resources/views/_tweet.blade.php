<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img
                class="rounded-full mr-2"
                src="{{ $tweet->user->avatar }}"
                alt="avatar"
                style="width: 50px; height: 50px;">
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-5">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }}
            </a>
        </h5>
        <p class="text-sm mb-3">
            {{ $tweet->body }}
        </p>

        <x-like-buttons :tweet="$tweet" />
    </div>
</div>
