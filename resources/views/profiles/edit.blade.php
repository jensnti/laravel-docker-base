<x-app>
    <form action="{{ $user->path() }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>

            <input
                class="border border-gray-400 p-2 w-full"
                id="name"
                type="text"
                name="name"
                value="{{ $user->name }}"
                required
            >

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>

            <input
                class="border border-gray-400 p-2 w-full"
                id="username"
                type="text"
                name="username"
                value="{{ $user->username }}"
                required
            >

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">Avatar</label>
            <div clasS="flex">
                <input
                    class="border border-gray-400 p-2 w-full"
                    id="avatar"
                    type="file"
                    name="avatar"
                >

                <img src="{{ $user->avatar }}" alt="You" width="40">
            </div>
            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>

            <input
                class="border border-gray-400 p-2 w-full"
                id="email"
                type="email"
                name="email"
                value="{{ $user->email }}"
                required
            >

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>

            <input
                class="border border-gray-400 p-2 w-full"
                id="password"
                type="password"
                name="password"
                required
            >

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password Confirmation</label>

            <input
                class="border border-gray-400 p-2 w-full"
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
            >

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                type="submit"
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                Submit
            </button>

            <a class="hover:underline" href="{{ $user->path() }}">Cancel</a>
        </div>
    </form>
</x-app>
