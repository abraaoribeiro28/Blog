@if ($mostViewedPost && $posts)
    <section class="bg-[#f8f9ff] py-[110px]">
        <div class="container">
            <div class="flex flex-wrap">
                @include('portal.home.posts.featured-post', ['post' => $mostViewedPost])
                <div class="w-full lg:w-6/12 mt-5 pt-5 lg:pt-0 lg:mt-0 lg:pl-3">
                    <div class="flex flex-col h-full justify-between">
                        @each('portal.home.posts.recent-post', $posts, 'post')
                    </div>
                </div>
            </div>
            <a href="{{ route('portal.posts.index') }}" class="font-medium text-body-color hover:text-primary text-base inline-flex items-center lg:mt-8">
                Ver mais
                <span class="ml-3">
                    <svg width="20" height="8" viewBox="0 0 20 8" class="fill-current">
                        <path d="M19.2188 2.90632L17.0625 0.343819C16.875 0.125069 16.5312 0.0938193 16.2813 0.281319C16.0625 0.468819 16.0313 0.812569 16.2188 1.06257L18.25 3.46882H0.9375C0.625 3.46882 0.375 3.71882 0.375 4.03132C0.375 4.34382 0.625 4.59382 0.9375 4.59382H18.25L16.2188 7.00007C16.0313 7.21882 16.0625 7.56257 16.2813 7.78132C16.375 7.87507 16.5 7.90632 16.625 7.90632C16.7813 7.90632 16.9375 7.84382 17.0313 7.71882L19.1875 5.15632C19.75 4.46882 19.75 3.53132 19.2188 2.90632Z"/>
                    </svg>
                </span>
            </a>
        </div>
    </section>
@endif
