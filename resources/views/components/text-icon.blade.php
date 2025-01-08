{{-- <div class="text-center">
    <div class="flex justify-center items-center bg-gray-200 w-12 h-12 rounded-full mx-auto mb-4">
      <i class="fas {{$icon}} text-gray-600"></i>
    </div>
    <h3 class="font-semibold text-xl text-gray-800 mb-2">
        {{ $title }}
    </h3>
    <p class="text-gray-600">
        {{ $text }}
    </p>
</div> --}}


    <!-- Elemento de ejemplo -->
    {{-- <div class="text-center">
        
            <div class="flex items-center space-x-4">
                <span class="flex items-center justify-center w-8 h-8 text-white bg-soul-1 rounded-full font-bold"><i class="fas {{$icon}} text-white"></i></span>
                <span class="font-semibold text-gray-700 whitespace-nowrap">{{ $title }}</span>
            </div>
            <p class="text-left whitespace-nowrap">{{ $text }}</p>
        
    </div> --}}

{{-- 
    <div class="text-left">
        <div class="flex items-center space-x-4">
            <span class="flex items-center justify-center w-8 h-8 text-white bg-soul-1 rounded-full font-bold"><i class="fas {{$icon}} text-white"></i></span>
            <span class="font-semibold text-gray-700 text-base">{{ $title }}</span>
        </div>
        <p class="text-gray-600  pl-12 text-sm">{{ $text }}</p>
    </div> --}}



    <div class="text-left hover:bg-gray-200 cursor-pointer p-2 rounded-md">
        <div class="flex items-center space-x-4">
            <span class="flex items-center justify-center w-10 h-10 text-white bg-soul-1 rounded-full font-bold">
                <i class="fas {{ $icon }} text-white text-lg"></i>
            </span>
            <span class="font-semibold text-gray-700 text-base truncate">{{ $title }} : {{$text}}</span>
        </div>
    </div>
