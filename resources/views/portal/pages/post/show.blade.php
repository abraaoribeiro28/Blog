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
                                    <a href="{{ route('portal.posts.category', $post->category->slug) }}" class="bg-primary rounded-full inline-flex items-center justify-center py-2 px-4 font-semibold text-sm text-white">
                                        {{ $post->category->name }}
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="font-medium text-body-color text-base sm:text-lg lg:text-base xl:text-lg sm:leading-relaxed lg:leading-relaxed xl:leading-relaxed leading-relaxed mb-10">
                                    {!! $post->text !!}
                                </div>
                                @if($post->gallery && $countGallery = count($post->archivesGallery))
                                    @php
                                        $cols = $countGallery >= 8 ? 'md:grid-cols-8' : 'md:grid-cols-'.$countGallery;
                                    @endphp
                                    <div class="grid grid-cols-3 {{$cols}} gap-4 border rounded-lg p-5 bg-gray-100 mb-10" id="lightgallery">
                                        @foreach($post->archivesGallery as $archive)
                                            <a href="{{ url($archive->path) }}" class="flex items-center">
                                                <img class="h-auto max-w-full rounded-lg" src="{{ url($archive->path) }}">
                                            </a>
                                        @endforeach
                                    </div>
                                @endif

                                <div class="sm:flex items-center justify-between">
                                    <div class="mb-5">
                                        <h5 class="font-medium text-body-color text-sm mb-3">Compartilhe esta postagem:</h5>
                                        <div class="flex items-center">
                                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" class="inline-flex items-center justify-center w-9 h-9 rounded-sm bg-primary bg-opacity-10 text-body-color hover:bg-opacity-100 hover:text-white transition">
                                                <svg width="16" height="16" viewBox="0 0 16 16" class="fill-current">
                                                    <path d="M14.3442 0H1.12455C0.499798 0 0 0.497491 0 1.11936V14.3029C0 14.8999 0.499798 15.4222 1.12455 15.4222H14.2942C14.919 15.4222 15.4188 14.9247 15.4188 14.3029V1.09448C15.4688 0.497491 14.969 0 14.3442 0ZM4.57316 13.1089H2.29907V5.7709H4.57316V13.1089ZM3.42362 4.75104C2.67392 4.75104 2.09915 4.15405 2.09915 3.43269C2.09915 2.71133 2.69891 2.11434 3.42362 2.11434C4.14833 2.11434 4.74809 2.71133 4.74809 3.43269C4.74809 4.15405 4.19831 4.75104 3.42362 4.75104ZM13.1947 13.1089H10.9206V9.55183C10.9206 8.7061 10.8956 7.58674 9.72108 7.58674C8.52156 7.58674 8.34663 8.53198 8.34663 9.47721V13.1089H6.07255V5.7709H8.29665V6.79076H8.32164C8.64651 6.19377 9.37122 5.59678 10.4958 5.59678C12.8198 5.59678 13.2447 7.08925 13.2447 9.12897V13.1089H13.1947Z"/>
                                                </svg>
                                            </a>
                                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ $post->title }}" target="_blank" class="inline-flex items-center justify-center w-9 h-9 ml-3 rounded-sm bg-primary bg-opacity-10 text-body-color hover:bg-opacity-100 hover:text-white transition">
                                                <svg width="18" height="14" viewBox="0 0 18 14" class="fill-current">
                                                    <path d="M15.5524 2.26027L16.625 1.0274C16.9355 0.693493 17.0202 0.436644 17.0484 0.308219C16.2016 0.770548 15.4113 0.924658 14.9032 0.924658H14.7056L14.5927 0.821918C13.9153 0.282534 13.0685 0 12.1653 0C10.1895 0 8.6371 1.48973 8.6371 3.21062C8.6371 3.31336 8.6371 3.46747 8.66532 3.57021L8.75 4.0839L8.15726 4.05822C4.54435 3.95548 1.58065 1.13014 1.10081 0.642123C0.310484 1.92637 0.762097 3.15925 1.24194 3.92979L2.20161 5.36815L0.677419 4.5976C0.705645 5.67637 1.15726 6.52397 2.03226 7.14041L2.79435 7.65411L2.03226 7.93665C2.5121 9.24658 3.58468 9.78596 4.375 9.99144L5.41935 10.2483L4.43145 10.8647C2.85081 11.8921 0.875 11.8151 0 11.738C1.77823 12.8682 3.89516 13.125 5.3629 13.125C6.46371 13.125 7.28226 13.0223 7.47984 12.9452C15.3831 11.25 15.75 4.82877 15.75 3.54452V3.36473L15.9194 3.26199C16.879 2.44007 17.2742 2.00342 17.5 1.74658C17.4153 1.77226 17.3024 1.82363 17.1895 1.84932L15.5524 2.26027Z"/>
                                                </svg>
                                            </a>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="inline-flex items-center justify-center w-9 h-9 ml-3 rounded-sm bg-primary bg-opacity-10 text-body-color hover:bg-opacity-100 hover:text-white transition">
                                                <svg width="9" height="18" viewBox="0 0 9 18" class="fill-current">
                                                    <path d="M8.13643 7H6.78036H6.29605V6.43548V4.68548V4.12097H6.78036H7.79741C8.06378 4.12097 8.28172 3.89516 8.28172 3.55645V0.564516C8.28172 0.254032 8.088 0 7.79741 0H6.02968C4.11665 0 2.78479 1.58064 2.78479 3.92339V6.37903V6.94355H2.30048H0.65382C0.314802 6.94355 0 7.25403 0 7.70564V9.7379C0 10.1331 0.266371 10.5 0.65382 10.5H2.25205H2.73636V11.0645V16.7379C2.73636 17.1331 3.00273 17.5 3.39018 17.5H5.66644C5.81174 17.5 5.93281 17.4153 6.02968 17.3024C6.12654 17.1895 6.19919 16.9919 6.19919 16.8226V11.0927V10.5282H6.70771H7.79741C8.11222 10.5282 8.35437 10.3024 8.4028 9.96371V9.93548V9.90726L8.74182 7.95968C8.76604 7.7621 8.74182 7.53629 8.59653 7.31048C8.54809 7.16935 8.33016 7.02823 8.13643 7Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @section('meta-tags')
        @parent
        <meta property="og:title" content="{{ $post->title }}" />
        <meta property="og:description" content="{{ $post->text }}" />
        <meta property="og:image" content="{{ getPathStorage($post->highlightArchive->path ?? '#') }}" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="website" />

        <!-- Meta tags Twitter Cards -->
        <meta name="twitter:card" content="{{ getPathStorage($post->highlightArchive->path ?? '#') }}" />
        <meta name="twitter:title" content="{{ $post->title }}" />
        <meta name="twitter:description" content="{{ $post->text }}" />
        <meta name="twitter:image" content="{{ $post->title }}" />
    @endsection

    @section('script')
        @parent
        @vite(["resources/js/portal/light-gallery/app.js"])
    @endsection
</x-portal-layout>
