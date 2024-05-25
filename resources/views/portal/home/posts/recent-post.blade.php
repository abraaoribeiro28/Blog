<a href="{{ route('posts.show', $post->slug) }}"
    class="sm:grid sm:grid-cols-2 sm:gap-x-8 flex flex-col-reverse items-center">
    <div class="w-full">
        <div class="text-sm font-semibold uppercase pt-5 mb-1 text-primary">
            {{ $post->category->name }}
        </div>
        <h4 class="text-lg font-semibold mb-5 line-3">
            {{ $post->title }}
        </h4>
        <div class="flex xl:flex-row lg:flex-col text-sm font-semibold uppercase text-gray-500">
            <div>{{ $post->author }}</div>
            <div class="px-1.5 xl:block lg:hidden">•</div>
            <div class="2xl:block lg:hidden md:block hidden">{{ formatDateWithMonth($post->publication_date) }}</div>
            <div class="2xl:hidden lg:block md:hidden block">{{ convertDateToBR($post->publication_date) }}</div>
        </div>
    </div>
    <img src="{{ getPathStorage($post->highlightArchive->path ?? '#') }}"
        class="w-full object-cover object-center rounded-md recent-post-image"
        alt="Destaque" loading="lazy" />
</a>
<div class="h-px bg-gray-200 my-5 divider"></div>