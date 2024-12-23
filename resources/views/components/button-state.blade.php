@if(isset($route) && $route)
    <a href="{{ route($route) }}" class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
@else
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
@endif
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border cursor-pointer hover:shadow-xl hover:bg-blue-100 transition-all duration-300">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-sans text-sm font-semibold leading-normal">{{ $title }}</p>
                            <h5 class="mb-0 font-bold">{{ $count }}
                                <span class="text-sm leading-normal font-weight-bolder text-lime-500">{{ $add }}</span>
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-blue-500 to-blue-600">
                            <i class="ni leading-none ni-single-02 text-lg relative top-3.5 text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@if(isset($route) && $route)
    </a>
@else
    </div>
@endif

