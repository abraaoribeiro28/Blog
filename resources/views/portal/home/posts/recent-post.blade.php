<a href="{{ route('posts.show', $post->slug) }}"
    class="sm:grid sm:grid-cols-2 sm:gap-x-4 flex flex-col-reverse items-center bg-white shadow-2xl shadow-gray-200 rounded-xl overflow-hidden lg:mb-0 mb-10">
    <div class="w-full 2xl:p-8 p-6">
        <div class="text-sm font-semibold uppercase pt-5 mb-1 text-primary">
            {{ $post->category->name }}
        </div>
        <h4 class="text-lg font-semibold xl:mb-5 lg:mb-2 mb-5 line-3">
            {{ $post->title }}
        </h4>
        <div class="flex 2xl:flex-row flex-col text-sm font-semibold uppercase text-gray-500">
            <div>{{ $post->author }}</div>
            <div class="px-1.5 2xl:block hidden">•</div>
            <div>{{ convertDateToBR($post->publication_date) }}</div>
        </div>
    </div>
    <img src="{{ getPathStorage($post->highlightArchive->path ?? '#') }}"
        class="w-full object-cover object-center recent-post-image"
        alt="Destaque" loading="lazy" />
</a>