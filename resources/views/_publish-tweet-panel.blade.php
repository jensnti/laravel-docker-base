<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf
        <textarea
            class="w-full"
            name="body"
            id="body"
            cols="30"
            placeholder="What's up doc?"
            required
            autofocus></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
                class="rounded-full mr-2"
                src="{{ auth()->user()->avatar }}"
                alt="avatar"
                style="width: 40px; height: 40px;">
            <button
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow py-2 px-10 text-sm text-white"
                type="submit">Tweet</button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
