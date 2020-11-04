<div class="border border-gray-300 rounded-lg">
    @forelse ($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="m-4">No tweets yet</p>
    @endforelse

    {{ $tweets->links('pagination::tailwind') }}
</div>
