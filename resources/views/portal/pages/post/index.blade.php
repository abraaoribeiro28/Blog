<x-portal-layout>
    <section class="pt-[150px]">
        <div class="container">
            <div class="flex justify-center mb-16">
                <a href="{{ route('portal.posts.index') }}" class="@if(!$category) bg-primary text-white @else bg-gray-50 text-gray-900  border border-gray-200 @endif font-medium rounded-full py-2.5 px-5 mx-1 hover:shadow-signUp hover:bg-opacity-90 transition ease-in-out duration-300">
                    Todas
                </a>
                @foreach($categories as $categoryItem)
                    <a href="{{ route('portal.posts.category', $categoryItem->slug) }}" class="@if(isset($category->id) && $category->id == $categoryItem->id) bg-primary text-white @else bg-gray-50 text-gray-900  border border-gray-200 @endif font-medium rounded-full py-2.5 px-5 mx-1 hover:shadow-signUp hover:bg-opacity-90 transition ease-in-out duration-300">
                        {{ $categoryItem->name }}
                    </a>
                @endforeach
            </div>
            <div class="flex flex-wrap mx-[-16px] justify-center">
                @forelse($posts as $post)
                    <div class="w-full lg:w-1/2 xl:w-2/4 px-4 mb-8">
                        @include('portal.home.posts.recent-post', $post)
                    </div>
                @empty
                    <h2 class="font-medium text-2xl py-20">Nenhuma registro encontrado</h2>
                @endforelse
            </div>
            {{ $posts->links() }}
        </div>
    </section>

    @section('style')
        @parent
        @vite([
            'resources/css/portal/home/custom.css',
            'resources/css/portal/home/responsive.css'
        ])
    @endsection
</x-portal-layout>
