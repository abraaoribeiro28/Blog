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
        </div>
    </section>
@endif
