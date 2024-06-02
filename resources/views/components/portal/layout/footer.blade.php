<footer class="bg-cor-principal pt-[100px] pb-12 relative z-10 mt-[110px]">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 lg:w-4/12 px-4">
                <div class="mb-10">
                    <h2 class="font-bold text-white text-[44px] leading-tight mb-5">Vamos conversar!</h2>
                    <h3 class="font-bold text-white opacity-70 text-2xl mb-2">Informações de contato</h3>
                    <p class="font-medium text-base text-body-color mb-1">{{ $configuration['email'] }}</p>
                    {{--<p class="font-medium text-base text-body-color mb-1">12 Hilton St, Manchester M1 1JF</p>--}}
                    <p class="font-medium text-base text-body-color mb-1">{{ $configuration['telefone'] }}</p>
                </div>
            </div>
        </div>

        <div class="mt-10 pt-12 border-t border-white border-opacity-10">
            <div class="flex items-start justify-center mb-5">
                @foreach($socialMedia as $social)
                    <a href="javascript:void(0)" class="flex flex-col items-center justify-center founded-full mx-2 text-body-color hover:text-primary" aria-label="social-link" name="social-link">
                        <i class="bi {{ $social->icon }} text-2xl"></i>
                        @if($social->label_status)
                            {{ $social->title }}
                        @endif
                    </a>
                @endforeach
            </div>
            <p class="font-medium text-base text-body-color text-center">{{ $configuration['copyright'] }}</p>
        </div>
    </div>

    <div class="absolute left-0 bottom-0 -z-1" aria-label="shape" name="shape">
        <span class="hidden">shape</span>
        <svg width="143" height="138" viewBox="0 0 143 138" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="25" cy="118" r="101" stroke="url(#paint0_linear_52:83)" stroke-width="34" />
            <defs>
                <linearGradient id="paint0_linear_52:83" x1="-12.7969" y1="-37.3359" x2="99.2109" y2="173.773" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#4A6CF7" />
                    <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>
    </div>
    <div class="absolute right-3 top-3 -z-1" aria-label="shape" name="shape">
        <span class="hidden">shape</span>
        <svg width="61" height="77" viewBox="0 0 61 77" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.5">
                <circle cx="45.0001" cy="1.66667" r="1.66667" transform="rotate(90 45.0001 1.66667)" fill="white" />
                <circle cx="16.0001" cy="1.66667" r="1.66667" transform="rotate(90 16.0001 1.66667)" fill="white" />
                <circle cx="59.0001" cy="1.66667" r="1.66667" transform="rotate(90 59.0001 1.66667)" fill="white" />
                <circle cx="30.6668" cy="1.66667" r="1.66667" transform="rotate(90 30.6668 1.66667)" fill="white" />
                <circle cx="1.66683" cy="1.66667" r="1.66667" transform="rotate(90 1.66683 1.66667)" fill="white" />
                <circle cx="45.0001" cy="16.3332" r="1.66667" transform="rotate(90 45.0001 16.3332)" fill="white" />
                <circle cx="16.0001" cy="16.3332" r="1.66667" transform="rotate(90 16.0001 16.3332)" fill="white" />
                <circle cx="59.0001" cy="16.3332" r="1.66667" transform="rotate(90 59.0001 16.3332)" fill="white" />
                <circle cx="30.6668" cy="16.3332" r="1.66667" transform="rotate(90 30.6668 16.3332)" fill="white" />
                <circle cx="1.66683" cy="16.3332" r="1.66667" transform="rotate(90 1.66683 16.3332)" fill="white" />
                <circle cx="45.0001" cy="31.0002" r="1.66667" transform="rotate(90 45.0001 31.0002)" fill="white" />
                <circle cx="45.0001" cy="74.6667" r="1.66667" transform="rotate(90 45.0001 74.6667)" fill="white" />
                <circle cx="16.0001" cy="31.0002" r="1.66667" transform="rotate(90 16.0001 31.0002)" fill="white" />
                <circle cx="16.0001" cy="74.6667" r="1.66667" transform="rotate(90 16.0001 74.6667)" fill="white" />
                <circle cx="59.0001" cy="31.0002" r="1.66667" transform="rotate(90 59.0001 31.0002)" fill="white" />
                <circle cx="59.0001" cy="74.6667" r="1.66667" transform="rotate(90 59.0001 74.6667)" fill="white" />
                <circle cx="30.6668" cy="31.0002" r="1.66667" transform="rotate(90 30.6668 31.0002)" fill="white" />
                <circle cx="30.6668" cy="74.6667" r="1.66667" transform="rotate(90 30.6668 74.6667)" fill="white" />
                <circle cx="1.66683" cy="31.0002" r="1.66667" transform="rotate(90 1.66683 31.0002)" fill="white" />
                <circle cx="1.66683" cy="74.6667" r="1.66667" transform="rotate(90 1.66683 74.6667)" fill="white" />
                <circle cx="45.0001" cy="45.6667" r="1.66667" transform="rotate(90 45.0001 45.6667)" fill="white" />
                <circle cx="16.0001" cy="45.6667" r="1.66667" transform="rotate(90 16.0001 45.6667)" fill="white" />
                <circle cx="59.0001" cy="45.6667" r="1.66667" transform="rotate(90 59.0001 45.6667)" fill="white" />
                <circle cx="30.6668" cy="45.6667" r="1.66667" transform="rotate(90 30.6668 45.6667)" fill="white" />
                <circle cx="1.66683" cy="45.6667" r="1.66667" transform="rotate(90 1.66683 45.6667)" fill="white" />
                <circle cx="45.0001" cy="60.3332" r="1.66667" transform="rotate(90 45.0001 60.3332)" fill="white" />
                <circle cx="16.0001" cy="60.3332" r="1.66667" transform="rotate(90 16.0001 60.3332)" fill="white" />
                <circle cx="59.0001" cy="60.3332" r="1.66667" transform="rotate(90 59.0001 60.3332)" fill="white" />
                <circle cx="30.6668" cy="60.3332" r="1.66667" transform="rotate(90 30.6668 60.3332)" fill="white" />
                <circle cx="1.66683" cy="60.3332" r="1.66667" transform="rotate(90 1.66683 60.3332)" fill="white" />
            </g>
        </svg>
    </div>
</footer>