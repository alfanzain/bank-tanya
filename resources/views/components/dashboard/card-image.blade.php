<div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
    <div
        class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
        <div class="relative h-full overflow-hidden bg-cover rounded-xl"
            style="background-image: url({{ $image }})">
            <span
                class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-dark-gray opacity-80"></span>
            <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                <h5 class="pt-2 mb-6 font-bold text-white">{{ $title }}</h5>
                <p class="text-white">{{ $caption }}</p>
                <a class="mt-auto mb-0 font-semibold leading-normal text-white group text-size-sm"
                    href="javascript:;">
                    Read More
                    <i
                        class="fas fa-arrow-right ease-bounce text-size-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                </a>
            </div>
        </div>
    </div>
</div>
