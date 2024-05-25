@if ($mostViewedPost && $posts)
    <section class="section section-post">
        <div class="container">
            <div class="flex flex-wrap">
                @include('portal.home.posts.featured-post', ['post' => $mostViewedPost])
                <div class="w-full lg:w-6/12 mt-5 pt-5 lg:pt-0 lg:mt-0 lg:pl-12">
                    <div class="flex flex-col">
                        <h4 class="font-semibold text-xl mb-5">Últimas postagens</h4>
                        <div class="mt-auto">
                            @each('portal.home.posts.recent-post', $posts, 'post')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
