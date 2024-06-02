<x-portal-layout>
    <section class="pt-[150px]">
        <div class="container">
            <div> <!-- pb-[120px] border-b border-[#E9ECF8] -->
                <div class="flex flex-wrap justify-center mx-[-16px]">
                    <div class="w-full lg:w-8/12 px-4">
                        <div>
                            <div class="w-full rounded overflow-hidden mb-10">
                                <img src="{{ getPathStorage($post->highlightArchive->path ?? '#') }}" alt="image" class="w-full h-full object-cover object-center" />
                            </div>
                            <h2 class="font-bold text-black text-3xl sm:text-4xl leading-tight sm:leading-tight mb-8">
                                {{ $post->title }}
                            </h2>
                            <div class="flex flex-wrap items-center justify-between pb-4 mb-10 border-b border-[#E9ECF8]">
                                <div class="flex flex-wrap items-center">
                                    <div class="flex items-center mr-10 mb-5">
                                        <div class="w-full">
                                            <h4 class="text-base font-medium text-body-color mb-1">
                                                Por
                                                <span class="text-primary"> {{ $post->author }} </span>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="flex items-center mb-5">
                                        <p class="flex items-center text-base text-body-color font-medium mr-5">
                                            <i class="bi bi-calendar4-event mr-3"></i>
                                            {{ formatDateWithMonth($post->publication_date) }}
                                        </p>
                                        <p class="flex items-center text-base text-body-color font-medium">
                                            <i class="bi bi-eye mr-3"></i>
                                            {{ $post->clicks }}
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <span class="bg-primary rounded-full inline-flex items-center justify-center py-2 px-4 font-semibold text-sm text-white">
                                        {{ $post->category->name }}
                                    </span>
                                </div>
                            </div>
                            <div>
                                <div class="mb-10">
                                    {!! $post->text !!}
                                </div>
                                @if($post->gallery && $countGallery = count($post->archivesGallery))
                                    @php
                                        $cols = $countGallery >= 8 ? 'md:grid-cols-8' : 'md:grid-cols-'.$countGallery;
                                    @endphp
                                    <div class="grid grid-cols-3 {{$cols}} gap-4 border rounded-lg p-5 bg-gray-100" id="lightgallery">
                                        @foreach($post->archivesGallery as $archive)
                                            <a href="{{ url($archive->path) }}" class="flex items-center">
                                                <img class="h-auto max-w-full rounded-lg" src="{{ url($archive->path) }}">
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @section('script')
        @parent
        @vite(["resources/js/portal/light-gallery/app.js"])
    @endsection
</x-portal-layout>
