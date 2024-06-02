<div class="lg:w-6/12 lg:pr-3">
    <a href="{{ route('posts.show', $post->slug) }}" class="post-destaque block rounded-xl overflow-hidden bg-white shadow-2xl shadow-gray-200">
        <img src="{{ getPathStorage($post->highlightArchive->path ?? '#') }}" 
            class="w-full object-cover object-center featured-post-image"
            loading="lazy" alt="imagem de destaque" />

        <div class="2xl:p-8 p-6">
            <div class="text-sm font-semibold uppercase mb-1 text-primary">
                Mais visualizada
            </div>
            <h3 class="text-2xl font-semibold mb-5 line-2">
                {{ $post->title }}
            </h3>
            <p class="line-2 mb-5 text-body-color">
                {{ strip_tags($post->text) }}
            </p>
            <div class="flex text-sm font-semibold uppercase text-gray-500">
                <div>{{ $post->author }}</div>
                <div class="px-1.5">•</div>
                <div class="sm:block hidden">{{ formatDateWithMonth($post->publication_date) }}</div>
                <div class="sm:hidden block">{{ convertDateToBR($post->publication_date) }}</div>
            </div>
        </div>
    </a>
</div>
