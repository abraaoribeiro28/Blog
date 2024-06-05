<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>

    <div class="w-full p-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0 lg:w-6/12">
                {{-- Cards --}}
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 flex-0 md:w-6/12">
                        <div class="dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 bg-white bg-[url('../../assets/img/curved-images/white-curved.jpg')] bg-clip-border">
                            <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 dark:bg-gradient-to-tl dark:from-slate-850 dark:to-gray-850 rounded-2xl opacity-90"> </span>
                            <div class="relative flex-auto p-4">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-8/12 max-w-full px-3 text-left flex-0">
                                        <div class="inline-block w-12 h-12 text-center text-black bg-white bg-center rounded-lg fill-current stroke-none shadow-soft-2xl">
                                            <i class="bi bi-file-post ni leading-none ni-circle-08 bg-gradient-to-tl from-gray-900 to-slate-800 text-lg relative top-3.5 z-10 bg-clip-text text-transparent"></i>
                                        </div>
                                        <h5 class="mt-4 mb-0 font-bold text-white">{{ $activePostsCount }}</h5>
                                        <span class="leading-normal text-white text-sm">Postagens ativas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 mt-6 flex-0 md:mt-0 md:w-6/12">
                        <div class="dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 bg-white bg-[url('../../assets/img/curved-images/white-curved.jpg')] bg-clip-border">
                            <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 dark:bg-gradient-to-tl dark:from-slate-850 dark:to-gray-850 rounded-2xl opacity-90"> </span>
                            <div class="relative flex-auto p-4">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-8/12 max-w-full px-3 text-left flex-0">
                                        <div class="inline-block w-12 h-12 text-center text-black bg-white bg-center rounded-lg fill-current stroke-none shadow-soft-2xl">
                                            <i class="bi bi-hand-index-thumb-fill ni leading-none ni-active-40 bg-gradient-to-tl from-gray-900 to-slate-800 text-lg relative top-3.5 z-10 bg-clip-text text-transparent"></i>
                                        </div>
                                        <h5 class="mt-4 mb-0 font-bold text-white"> {{ $clicksPostsCount }}</h5>
                                        <span class="leading-normal text-white text-sm">Cliques nas postagens</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap mt-6 -mx-3">
                    <div class="w-full max-w-full px-3 flex-0 md:w-6/12">
                        <div class="dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 bg-white bg-[url('../../assets/img/curved-images/white-curved.jpg')] bg-clip-border">
                            <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 dark:bg-gradient-to-tl dark:from-slate-850 dark:to-gray-850 rounded-2xl opacity-90"> </span>
                            <div class="relative flex-auto p-4">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-8/12 max-w-full px-3 text-left flex-0">
                                        <div class="inline-block w-12 h-12 text-center text-black bg-white bg-center rounded-lg fill-current stroke-none shadow-soft-2xl">
                                            <i class="bi bi-people-fill ni leading-none ni-cart bg-gradient-to-tl from-gray-900 to-slate-800 text-lg relative top-3.5 z-10 bg-clip-text text-transparent"></i>
                                        </div>
                                        <h5 class="mt-4 mb-0 font-bold text-white">{{ $subscribersCount }}</h5>
                                        <span class="leading-normal text-white text-sm">Inscritos nas notificações</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-full px-3 flex-0 lg:w-6/12">
                <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-4 pb-0 mb-0 rounded-t-2xl">
                        <h6 class="mb-0 dark:text-white">Reviews</h6>
                    </div>
                    <div class="flex-auto p-4 pb-0">
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            <li class="relative flex items-center px-0 py-2 mb-0 border-0 rounded-t-inherit text-inherit">
                                <div class="w-full">
                                    <div class="flex mb-2">
                                        <span class="mr-2 font-semibold leading-normal capitalize text-sm">Positive Reviews</span>
                                        <span class="ml-auto font-semibold leading-normal text-sm">80%</span>
                                    </div>
                                    <div>
                                        <div class="h-0.75 text-xs flex overflow-visible rounded-lg bg-gray-200">
                                            <div class="bg-gradient-to-tl from-blue-600 to-cyan-400 w-80/100 transition-width duration-600 ease-soft rounded-1 -mt-0.4 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap text-center text-white"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="relative flex items-center px-0 py-2 mb-2 border-0 text-inherit">
                                <div class="w-full">
                                    <div class="flex mb-2">
                                        <span class="mr-2 font-semibold leading-normal capitalize text-sm">Neutral Reviews</span>
                                        <span class="ml-auto font-semibold leading-normal text-sm">17%</span>
                                    </div>
                                    <div>
                                        <div class="h-0.75 text-xs flex overflow-visible rounded-lg bg-gray-200">
                                            <div class="dark:bg-gradient-to-tl dark:from-slate-850 dark:to-gray-850 bg-gradient-to-tl from-gray-900 to-slate-800 w-17/100 transition-width duration-600 ease-soft rounded-1 -mt-0.4 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap text-center text-white"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="relative flex items-center px-0 py-2 mb-2 border-0 rounded-b-inherit text-inherit">
                                <div class="w-full">
                                    <div class="flex mb-2">
                                        <span class="mr-2 font-semibold leading-normal capitalize text-sm">Negative Reviews</span>
                                        <span class="ml-auto font-semibold leading-normal text-sm">3%</span>
                                    </div>
                                    <div>
                                        <div class="h-0.75 text-xs flex overflow-visible rounded-lg bg-gray-200">
                                            <div class="bg-gradient-to-tl from-red-600 to-rose-400 w-3/100 transition-width duration-600 ease-soft rounded-1 -mt-0.4 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap text-center text-white"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center p-4 pt-0 rounded-b-2xl">
                        <div class="w-3/5">
                            <p class="leading-normal text-sm dark:text-white/60">
                                More than
                                <b>1,500,000</b>
                                developers used Creative Tim's products and over
                                <b>700,000</b>
                                projects were created.
                            </p>
                        </div>
                        <div class="w-2/5 text-right">
                            <a href="javascript:;" class="inline-block px-6 py-3 mb-0 font-bold text-right text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs dark:bg-gradient-to-tl dark:from-slate-850 dark:to-gray-850 bg-gradient-to-tl from-gray-900 to-slate-800 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">View all reviews</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap my-6 -mx-3">
            <div class="w-full max-w-full px-3 flex-0">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="overflow-x-auto ps">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500 dark:border-white/40">
                            <thead class="align-bottom">
                            <tr>
                                <th class="px-6 py-3 font-bold uppercase align-middle bg-transparent border-b border-gray-200 border-solid shadow-none text-xxs tracking-none whitespace-nowrap text-slate-400 opacity-70 dark:border-white/40 dark:text-white dark:opacity-80">
                                    Título
                                </th>
                                <th class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 border-solid shadow-none text-xxs tracking-none whitespace-nowrap text-slate-400 opacity-70 dark:border-white/40 dark:text-white dark:opacity-80">
                                    Categoria
                                </th>
                                <th class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 border-solid shadow-none text-xxs tracking-none whitespace-nowrap text-slate-400 opacity-70 dark:border-white/40 dark:text-white dark:opacity-80">
                                    Data de publicação
                                </th>
                                <th class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 border-solid shadow-none text-xxs tracking-none whitespace-nowrap text-slate-400 opacity-70 dark:border-white/40 dark:text-white dark:opacity-80">
                                    Visualizações
                                </th>
                                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 border-solid shadow-none text-xxs tracking-none whitespace-nowrap text-slate-400 opacity-70 dark:border-white/40 dark:text-white dark:opacity-80">
                                    ID
                                </th>
                            </tr>
                            </thead>
                            <tbody class="border-t-2 border-current border-solid dark:border-white/40">
                                @foreach($mostViewedPosts as $post)
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <h6 class="mb-0 leading-normal text-sm dark:text-white">
                                                {{ Str::limit($post->title, 60, '...') }}
                                            </h6>
                                        </td>
                                        <td class="p-2 align-middle text-center bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <span class="leading-normal text-sm text-slate-400 dark:text-white/80">
                                                {{ $post->category->name }}
                                            </span>
                                        </td>
                                        <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap dark:border-white/40">
                                            <span class="leading-normal text-sm text-slate-400 dark:text-white/80">
                                                {{ convertDateToBR($post->publication_date) }}
                                            </span>
                                        </td>
                                        <td class="p-2 align-middle text-center bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <span class="leading-normal text-sm text-slate-400 dark:text-white/80">
                                                {{ $post->clicks }}
                                            </span>
                                        </td>
                                        <td class="p-2 align-middle text-center bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <span class="leading-normal text-sm text-slate-400 dark:text-white/80">
                                                {{ $post->id }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
