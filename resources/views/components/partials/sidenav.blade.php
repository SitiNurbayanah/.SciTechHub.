<aside class="col-span-1 space-y-6 text-gray-600">

    <div class="p-4 space-y-4 bg-white shadow">
        <div class="pb-4 border-b border-gray-200">

            {{-- Start Discusson Button --}}
            <a href="{{ route('threads.create') }}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition bg-green-500 border border-transparent rounded hover:bg-gray-400 active:bg-green-600 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25" }}>
                {{ __('Start a new discussion') }}
            </a>
        </div>
    </div>

    {{-- Categories
<ul class="space-y-4">
    @if ($categories->isNotEmpty())
        @foreach ($categories as $category)
            <li>
                <a href="#" class="flex items-center justify-between">
                    {{ $category->name }}
                    <span class="px-2 text-white bg-green-300 rounded">{{ $category->slug }}</span>
                </a>
            </li>
        @endforeach
    @else
        <li>No categories available.</li>
    @endif
</ul> --}}


    
</aside>
