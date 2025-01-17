

<div id="userStatus">  
    <div class="flex justify-center my-6 -mx-3" >
    
        @foreach ($userStatus as $userStatu)
            <div class="relative me-4" data-popover-target="{{$userStatu->name}}-1">
                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="profile image">
                <span class="top-0 start-7 absolute w-3.5 h-3.5 
                    {{ $userStatu->status === 'READY' ? 'bg-green-500' : ($userStatu->status === 'PAUSED' ? 'bg-yellow-500' : 'bg-red-500') }} 
                    border-2 border-white dark:border-gray-800 rounded-full">
                </span>
            </div>
            
            <x-popoverUserStatus popoverId="{{ $userStatu->name }}-1" name="{{ $userStatu->name }}"  />
        @endforeach
    </div>
</div>

