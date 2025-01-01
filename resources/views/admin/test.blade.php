<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />

        <!-- Scripts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Nucleo Icons -->
        
        
        
        <!-- Main Styling -->
        <style>
            {!! file_get_contents(public_path('assets/css/soft-ui-dashboard-tailwind.css')) !!}

            </style>

        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

        @livewireStyles

    </head>
<body>
    
    <div class="h-19.5">
        
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
            <img src="https://raw.githubusercontent.com/chechojgb/images/refs/heads/main/vicidial.png" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo">
          <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Vicidial</span>
        </a>
      </div>


    <div class="p-6 bg-white min-h-screen">
        <div class="flex flex-wrap -mx-3 space-y-4">
            <div></div>
            <x-button-state2 icon="fa-solid fa-phone" title="Current active calls" count="0" add="active calls overview" />
            <x-button-state2 icon="fa-solid fa-bell" title="Calls ringing" count="0" add="ringing queue" />
            <x-button-state2 icon="fa-solid fa-clock" title="Calls waiting for agents" count="0" add="awaiting assignment" />
            <x-button-state2 icon="fa-solid fa-mobile-retro" title="Call in IVR" count="0" add="ivr interactions" />
            <x-button-state2 icon="fa-solid fa-rotate-left" title="Callback queue calls" count="0" add="pending callbacks" />
            <x-button-state2 icon="fa-solid fa-users" title="Agents logged in" count="3" add="online agents" />
            <x-button-state2 icon="fa-solid fa-user-group" title="Agents in calls" count="0" add="engaged agents" />
            <x-button-state2 icon="fa-solid fa-user-clock" title="Agents waiting" count="3" add="available agents" />
            <x-button-state2 icon="fa-solid fa-phone" title="Paused agents" count="0" add="on break" />
            <x-button-state2 icon="fa-solid fa-phone-slash" title="Agents in dead calls" count="0" add="error state" />
            <x-button-state2 icon="fa-solid fa-user-plus" title="Agents in dispo" count="0" add="wrap-up stage" />
        </div>

        <div class="flex my-6 -mx-3">
        </div>


        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                <li class="me-2" role="presentation">
                    <button data-popover-target="popover-view-user-group" class="inline-block p-4 border-b-2 rounded-t-lg"
                        id="profile-styled-tab" data-tabs-target="#view-user-group" type="button" role="tab"
                        aria-controls="profile" aria-selected="false">User Group</button>
                        
                </li>

              </ul>
        </div>
        <div id="default-styled-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="view-user-group" role="tabpanel"
                aria-labelledby="profile-tab">
                

                  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 ">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-blue-400">Property</th>
                                <th scope="col" class="px-6 py-3">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Station
                                </th>
                                <td class="px-6 py-4">Apple MacBook Pro 17"</td>
                            </tr>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Phone
                                </th>
                                <td class="px-6 py-4">Silver</td>
                            </tr>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    User Show Id Info
                                </th>
                                <td class="px-6 py-4">Laptop</td>
                            </tr>
                            
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Status
                                </th>
                                <td class="px-6 py-4">$2999</td>
                            </tr>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    MM:SS
                                </th>
                                <td class="px-6 py-4">$2999</td>
                            </tr>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Campaign
                                </th>
                                <td class="px-6 py-4">$2999</td>
                            </tr>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Calls
                                </th>
                                <td class="px-6 py-4">$2999</td>
                            </tr>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Hold
                                </th>
                                <td class="px-6 py-4">$2999</td>
                            </tr>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    In-Group
                                </th>
                                <td class="px-6 py-4">$2999</td>
                            </tr>
                        </tbody>
                    </table>
                    
                                        
                    
                  </div>

            </div>
            
            
            
            
            
            
        </div>
        

        <section class="py-16">
            <div class="max-w-8xl mx-auto px-6">
              <h1 class="text-center text-gray-900 text-sm font-semibold tracking-wide uppercase mb-4">
                Real Time Reports
              </h1>
              <p class="text-center text-gray-600 text-lg mb-12">
                I'm not just a developer; I'm a digital dreamweaver. Crafting immersive online experiences is not just a job but my calling. Discover below how I can help you.
              </p>
              <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                <!-- Card 1 -->
                <x-text-icon icon="fa-code" title="Dial Level" text="1.385" />
                <!-- Card 2 -->
                <x-text-icon icon="fa-mobile-alt" title="Dialable Leads" text="0" />
                <!-- Card 3 -->
                <x-text-icon icon="fa-cogs" title="Hopper ( min/auuto )" text="1907 / 24" />
                <!-- Card 4 -->
                <x-text-icon icon="fa-tachometer-alt" title="Leads In Hopper" text="0" />
                <!-- Card 5 -->
                <x-text-icon icon="fa-users" title="Trunk Short/Fill" text="0/0" />
                <!-- Card 6 -->
                <x-text-icon icon="fa-bug" title="Calls Today" text="0" />
                <!-- Card 7 -->
                <x-text-icon icon="fa-code" title="Dropped / Andswered" text="0.000 / 0" />
                <!-- Card 8 -->
                <x-text-icon icon="fa-mobile-alt" title="Dropped Percent" text="0.000%" />
                <!-- Card 9 -->
                <x-text-icon icon="fa-cogs" title="Filter" text="NONE" />
                <!-- Card 10 -->
                <x-text-icon icon="fa-cogs" title="Avg Agents" text="0.86" />
                <!-- Card 11 -->
                <x-text-icon icon="fa-cogs" title="DL Diff" text="0.86%" />
                <!-- Card 12 -->
                <x-text-icon icon="fa-cogs" title="DIFF" text="100.00%" />   
              </div>
            </div>
        </section>

        
    </div>
    
    
</body>


<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->


</html>
