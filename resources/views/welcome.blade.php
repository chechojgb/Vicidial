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
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased bg-blue-50">

        <div class="bg-gradient-to-b from-green-50 to-green-100">
            <header class="">
                <div class="px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16 lg:h-20">
                        <div class="flex-shrink-0">
                            <a href="#" title="" class="flex items-center text-4xl font-bold text-blue-700 hover:text-blue-500 transition-colors duration-200">
                                <svg class="w-8 h-8 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" title="Vicidial Logo">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M3 10l1.5 1.5a2 2 0 002.828 0L9 9.828a2 2 0 012.828 0L15 13.828a2 2 0 002.828 0L19 12.828a2 2 0 012.828 0L23 15.828a2 2 0 010 2.828l-1.5 1.5a2 2 0 01-2.828 0L15 18.828a2 2 0 00-2.828 0L9 21.828a2 2 0 01-2.828 0L3 18.828a2 2 0 010-2.828L4.5 15a2 2 0 000-2.828L3 10z" 
                                    />
                                </svg>
                                Vicidial
                            </a>
                        </div>
        
                        <button type="button" class="inline-flex p-1 text-black transition-all duration-200 border border-black lg:hidden focus:bg-gray-100 hover:bg-gray-100">
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
        
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
        
                        
                    </div>
                </div>
            </header>
        
            <section class="py-10 sm:py-16 lg:py-24">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                        <div>
                            <h1 class="text-4xl font-bold text-black sm:text-6xl lg:text-7xl">
                                Collaborate remotely, with
                                <div class="relative inline-flex">
                                    <span class="absolute inset-x-0 bottom-0 border-b-[30px] border-[#4ADE80]"></span>
                                    <h1 class="relative text-4xl font-bold text-black sm:text-6xl lg:text-7xl">Vicidial.</h1>
                                </div>
                            </h1>
        
                            <p class="mt-8 text-base text-black sm:text-xl">
                                Vicidial is the leading open-source contact center solution. It allows you to manage inbound and outbound calls, emails, and web chats efficiently, providing a seamless experience for both customers and agents.
                            </p>
        
                            <div class="mt-10 sm:flex sm:items-center sm:space-x-8">
                                <a href="{{ route('admin.login') }}">
                                    <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-blue-600 text-white shadow-lg shadow-blue-900/50 hover:bg-blue-700 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none w-full md:w-[12rem]" type="button" data-ripple-light="true">
                                        Login as administrator
                                    </button>
                                </a>
                                <a href="{{ route('agent.login') }}">
                                    <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-blue-500 text-white shadow-md shadow-blue-600/10 hover:bg-blue-700 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none w-full md:w-[12rem]" type="button" data-ripple-light="true">
                                        Login as agent
                                    </button>
                                </a>
        
                                
                            </div>
                        </div>
        
                        <div>
                            <img class="w-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/2/hero-img.png" alt="" />
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
    </body>
</html>



