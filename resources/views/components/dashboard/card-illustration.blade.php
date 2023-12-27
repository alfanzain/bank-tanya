<div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
            <div class="flex flex-wrap -mx-3">
                <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                    <div class="flex flex-col h-full">
                        <p class="pt-2 mb-1 font-semibold">{{ $subtitle }}</p>
                        <h5 class="font-bold">{{ $title }}</h5>
                        <p class="mb-12">{{ $description }}</p>
                        <a class="mt-auto mb-0 font-semibold leading-normal text-size-sm group text-slate-500"
                            href="javascript:;">
                            Read More
                            <i
                                class="fas fa-arrow-right ease-bounce text-size-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                        </a>
                    </div>
                </div>
                <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                    {{ $illustration }}
                </div>
            </div>
        </div>
    </div>
</div>
