<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
  @forelse (auth()->user()->follows as $user)
    <li class="mb-4">
        <a
            class="flex items-center text-sm"
            href="{{ route('profile', $user) }}">
            <img
                class="rounded-full mr-2"
                src="{{ $user->avatar }}"
                alt="avatar"
                style="width: 40px; height: 40px;">
                {{ $user->name }}
        </a>
    </li>
  @empty
    <li>No friends yet.</li>
  @endforelse
</ul>
