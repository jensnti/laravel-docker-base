<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-4 flex-shrink-0">
        <img class="rounded-full mr-2" src="{{ $tweet->user->avatar }}" alt="" style="width: 50px; height: 50px;">
    </div>
    <div>
        <h5 class="font-bold mb-5">{{ $tweet->user->name }}</h5>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>
