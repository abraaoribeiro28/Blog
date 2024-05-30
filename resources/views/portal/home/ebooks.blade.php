@if (isset($ebooks) && $ebooks->count())
    <section>
        @foreach ($ebooks as $ebook)
            <div class="overflow-hidden bg-[#f8f9ff] lg:bg-transparent lg:px-5 @if($ebooks->count() > 1 && !$loop->first) mt-20 lg:mt-0 @endif">
                <div class="mx-auto grid max-w-6xl grid-cols-1 grid-rows-[auto_1fr] gap-y-16 pt-16 md:pt-20 lg:grid-cols-12 lg:gap-y-20 lg:px-3 @if($loop->last) lg:pb-36 @else lg:pb-32 @endif  lg:pt-20 xl:py-32">
                    <div class="relative flex items-end lg:col-span-5 lg:row-span-2">
                        <div class="absolute -bottom-12 -top-20 left-0 right-1/2 z-10 @if($loop->last) rounded-br-[92px] @endif bg-[#f8f9ff] md:bottom-8 lg:-inset-y-32 lg:left-[-100vw] lg:right-full lg:-mr-40">
                        </div>
                        <div class="relative z-10 mx-auto flex w-64 rounded-xl bg-[#f8f9ff] shadow-xl md:w-80 lg:w-auto">
                            <img width="960" height="1284" class="w-full rounded" style="color: transparent;"
                                 src="{{ getPathStorage($ebook->highlightArchive->path ?? '#') }}"/>
                        </div>
                    </div>
                    <div class="relative px-4 sm:px-6 lg:col-span-7 lg:pb-14 lg:pl-16 lg:pr-0 xl:pl-20">
                        <div class="hidden lg:absolute lg:-top-32 lg:bottom-0 lg:left-[-100vw] lg:right-[-100vw] lg:block lg:bg-[#f8f9ff]"></div>
                        <figure class="relative mx-auto max-w-md text-center lg:mx-0 lg:text-left">
                            <blockquote class="mt-2">
                                <p class="font-display text-xl font-medium">
                                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nunc dolor.”
                                </p>
                            </blockquote>
                            <figcaption class="mt-2 text-sm text-body-color">
                                <strong class="font-semibold text-blue-600 before:content-['—_']">{{ $ebook->author }}</strong>,
                                publicado em {{ convertDateToBR($ebook->author) }}
                            </figcaption>
                        </figure>
                    </div>
                    <div class="bg-white pt-16 lg:col-span-7 lg:bg-transparent lg:pl-16 lg:pt-0 xl:pl-20">
                        <div class="mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:px-0">
                            <h1 class="font-display text-4xl font-bold text-slate-900 xl:text-6xl sm:text-5xl">
                                {{ $ebook->title }}
                            </h1>
                            <p class="mt-4 text-base text-body-color resume-ebook">
                                {{ strip_tags($ebook->resume) }}
                            </p>
                            <div class="mt-8 flex gap-4">
                                <a href="#" class="bg-cor-botoes text-dinamic-cor-botoes font-semibold py-2 px-4 rounded-full">
                                    Baixar E-book
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endif