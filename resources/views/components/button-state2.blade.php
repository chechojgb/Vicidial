{{-- <div class="w-full max-w-md px-4">
  <div class="flex items-center bg-blue-100/50 rounded-md shadow-lg p-6 transition-all duration-300 hover:shadow-xl cursor-pointer">
    <!-- Información de texto -->
    <div class="text-left flex-grow">
      <p class="text-sm font-semibold text-blue-500 uppercase">{{$title}}</p>
      <h5 class="text-3xl font-extrabold text-blue-700">
        {{$count}}
        @isset($add)
        <span class="text-sm font-semibold text-blue-500 bg-blue-50 px-2 py-0.5 rounded-lg ml-2">{{$add}}</span>
        @endisset
      </h5>
    </div>
    <!-- Ícono decorativo -->
    <div class="w-14 h-14 bg-blue-200 rounded-full flex items-center justify-center shadow-md ml-4">
      <i class="{{$icon}} text-black text-xl"></i>
    </div>
  </div>
</div> --}}
{{-- <div class="w-full max-w-md px-4 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">

  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border cursor-pointer hover:shadow-xl hover:bg-blue-100 transition-all duration-300">
      <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
              <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                      <p class="mb-0 font-sans text-sm font-semibold leading-normal">{{$title}}</p>
                      <h5 class="mb-0 font-bold">
                        {{$count}}
                        @isset($add)
                        <span class="text-sm font-semibold text-blue-500 bg-blue-50 px-2 py-0.5 rounded-lg ml-2">{{$add}}</span>
                        @endisset
                      </h5>
                  </div>
              </div>
              <div class="text-right basis-1/3">
                  <div class="w-14 h-14 bg-blue-200 rounded-full flex items-center justify-center shadow-md ml-4">
                    <i class="{{$icon}} text-black text-xl"></i>
                  </div>
              </div>
          </div>
      </div>
</div>
</div> --}}


<div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">

  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border cursor-pointer hover:shadow-xl hover:bg-blue-100 transition-all duration-300">
      <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
              <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                      <p class="mb-0 font-sans text-sm font-semibold leading-normal">{{ $title }}</p>
                      <h5 class="mb-0 font-bold">{{ $count }}
                          <span class="text-sm leading-normal font-weight-bolder text-blue-400">{{ $add }}</span>
                      </h5>
                  </div>
              </div>
              <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-full items-center justify-center shadow-md ml-4" style="background-color: #60A5FA;">
                  <i class="{{$icon}} ni leading-none ni-single-02 text-lg relative top-3.5 text-white"></i>
                </div>

              </div>
          </div>
      </div>
  </div>

</div>

{{-- <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-blue-500 to-blue-600">
  <i class="ni leading-none ni-single-02 text-lg relative top-3.5 text-white"></i>
</div> --}}