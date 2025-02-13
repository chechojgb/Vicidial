@extends('layouts.layoutAdmin')

@section('title', 'Real Time Reports')

@section('content')

<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200 mt-2" >

    


    

      
    {{-- <p>Screen Refresh Rate: <span id="refreshRateDisplay">{{ $refreshRate }}</span> seconds</p> --}}
    <x-lenguage/>
    <x-modal-realTime :allCampaigns="$allCampaigns" :allUserGroups="$allUserGroups" :allSelectInGroups="$allSelectInGroups" :refreshRate="$refreshRate"/>
    
    
    
    
    
    <div
        class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start">
    </div>
    <div class="p-6 bg-white min-h-screen">
        <div class="flex flex-wrap -mx-3 space-y-4" id="stats-container">
            <div></div>
            <x-button-state2 icon="fa-solid fa-phone" title="Current active calls" count="{{$statsIcon->current_active_calls}}" add="active calls overview"/>
            <x-button-state2 icon="fa-solid fa-bell" title="Calls ringing" count="{{ $statsIcon->calls_ringing ?? 0 }}" add="ringing queue" />
            <x-button-state2 icon="fa-solid fa-clock" title="Calls waiting for agents" count="{{$statsIcon->calls_waiting_for_agents ?? 0}}" add="awaiting assignment" />
            <x-button-state2 icon="fa-solid fa-mobile-retro" title="Call in IVR" count="{{$statsIcon->calls_in_IVR ?? 0}}" add="ivr interactions" />
            <x-button-state2 icon="fa-solid fa-rotate-left" title="Callback queue calls" count="NONE" add="pending callbacks" />
            <x-button-state2 icon="fa-solid fa-users" title="Agents logged in" count="{{$statsIcon->agent_logged_in ?? 0}}" add="online agents" />
            <x-button-state2 icon="fa-solid fa-user-group" title="Agents in calls" count="{{$statsIcon->agent_incall ?? 0}}" add="engaged agents" />
            <x-button-state2 icon="fa-solid fa-user-clock" title="Agents waiting" count="{{$statsIcon->agents_waiting}}" add="available agents" />
            <x-button-state2 icon="fa-solid fa-phone" title="Paused agents" count="{{$statsIcon->agent_paused ?? 0}}" add="on break" />
            <x-button-state2 icon="fa-solid fa-phone-slash" title="Agents in dead calls" count="NONE" add="error state" />
            <x-button-state2 icon="fa-solid fa-user-plus" title="Agents in dispo" count="NONE" add="wrap-up stage" />
        </div>

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

        

        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm  text-center" id="default-styled-tab"
                data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-black hover:text-purple-600 dark:text-purple-500 dark:hover:text-blue-500 border-soul-1 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                <li class="me-2" role="presentation">
                    <button data-popover-target="popover-view-user-group" class="inline-block p-4 border-b-2 rounded-t-lg"
                        id="profile-styled-tab" data-tabs-target="#view-user-group" type="button" role="tab"
                        aria-controls="profile" aria-selected="false">{{__('View User Groups')}}</button>
                        
                </li>
                <li class="me-2" role="presentation">
                    <button data-popover-target="popover-real-time-reports"
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="dashboard-styled-tab" data-tabs-target="#real-time-reports" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">{{__('Real Time Reports')}}</button>
                </li>
                

              </ul>
              <x-popover popoverId="popover-view-user-group" title="What is?" description="{{__('Used to view user groups and their details')}}."/>
              <x-popover popoverId="popover-real-time-reports" title="What is?" description="{{__('Used to view real-time reports of calls and agents')}}."/>
        </div>
        <div id="default-styled-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="view-user-group" role="tabpanel"
                aria-labelledby="profile-tab">
                

                  <div class="">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 sm:rounded-lg border-collapse border-spacing-0">
                        <thead class="text-xs text-white uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 bg-soul-1 border-none sm:rounded-lg">
                            <tr>
                                <th scope="col" class="px-6 py-3 border-none">
                                    {{__('Station')}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{__('phone')}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{__('User Show Id Info')}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{__('User Group')}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{__('SessionId')}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{__('Status')}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{__('MM:SS')}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{__('Campaing')}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{__('Calls')}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{__('Hold')}}
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody >
                            @if ($tables->count() > 0)
                                @foreach ($tables as $table)
                                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4  text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$table->ext}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$table->ext}}
                                        </td>
                                        <td class="px-6 py-4" data-popover-target="{{ $table->name }}" >
                                            {{ $table->name ?? 'Nombre no disponible' }}
                                        </td>
                                        <x-popoverUserInfo popoverId="{{ $table->name }}" userName="{{ $table->name }}" userCampaing="{{$table->campaign_id}}" />
                                        <td class="px-6 py-4">
                                            {{$table->user_group}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$table->session_id ?? 'No disponible'}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$table->status}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$table->minutes_since_last_call ?? 'No disponible'}} Minutos
                                        </td> 
                                        <td class="px-6 py-4">
                                            {{$table->campaign_id ?? 'No disponible campaign'}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$table->calls_today}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$table->full_name ?? 'Dato  no disponible'}}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="10" class="px-6 py-4 text-center">{{__('No data available')}}.</td>
                                </tr>
                            @endif
                            
                        </tbody>
                    </table>
                  </div>

            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="real-time-reports" role="tabpanel" aria-labelledby="dashboard-tab">
                <section class="py-16" id="Real-Time-Reports">
                    <div class="max-w-8xl mx-auto px-6">
                      <h1 class="text-center text-gray-900 text-sm  tracking-wide uppercase mb-4">
                        Real Time Reports
                      </h1>
                      
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 p-10" >
                        <!-- Card 1 -->
                        <x-text-icon icon="fa-code" title="Dial Level" text="{{$stats->Dial_LEVEL ?? 0}}" />
                        <!-- Card 2 -->
                        <x-text-icon icon="fa-mobile-alt" title="Trunk Shor/Fill" text="{{$stats->TRUNK_SHORT ?? 0}} / {{$stats->TRUNK_FILL ?? 0}}" />
                        <!-- Card 3 -->
                        <x-text-icon icon="fa-cogs" title="Filter" text="{{$stats->FILTER ?? 0}} " />
                        <!-- Card 4 -->
                        <x-text-icon icon="fa-tachometer-alt" title="Leads In Hopper" text="0" />
                        <!-- Card 5 -->
                        <x-text-icon icon="fa-users" title="Max level" text="{{$stats->MAX_LEVEL ?? 0}}" />
                        <!-- Card 6 -->
                        <x-text-icon icon="fa-bug" title="Dropped max" text="{{$stats->DROPPED_MAX ?? 0}}%" />
                        <!-- Card 7 -->
                        <x-text-icon icon="fa-code" title="Target Diff" text="{{$stats->TARGET_DIFF ?? 0}}" />
                        <!-- Card 8 -->
                        <x-text-icon icon="fa-mobile-alt" title="Intensity" text="{{$stats->INTENSITY ?? 0}}" />
                        <!-- Card 9 -->
                        <x-text-icon icon="fa-cogs" title="Dial Timeout" text="{{$stats->DIAL_TIMEOUT ?? 0}}" />
                        <!-- Card 10 -->
                        <x-text-icon icon="fa-cogs" title="Taper Time" text="{{$stats->TAPER_TIME ?? 0}}" />
                        <!-- Card 11 -->
                        <x-text-icon icon="fa-cogs" title="local Time" text="{{$stats->LOCAL_TIME ?? 0}}" />
                        <!-- Card 12 -->
                        <x-text-icon icon="fa-cogs" title="Avail Only" text="{{$stats->AVAIL_ONLY ?? 0}}" />   
                        <!-- Card 13 -->
                        <x-text-icon icon="fa-cogs" title="Dialable Leads" text="{{$stats->DIALABLE_LEADS ?? 0}}" /> 
                        <!-- Card 14 -->
                        <x-text-icon icon="fa-cogs" title="Calls Today" text="{{$stats->CALLS_TODAY ?? 0}}" />
                        <!-- Card 15 -->
                        <x-text-icon icon="fa-cogs" title="AVG Agents" text="{{$stats->AVG_AGENTS ?? 0}}" />
                        <!-- Card 16 -->
                        <x-text-icon icon="fa-cogs" title="Dial Method" text="{{$stats->DIAL_METHOD ?? 0}}" />
                        <!-- Card 17 -->
                        <x-text-icon icon="fa-cogs" title="Hopper (min/auto)" text="{{$stats->HOPPER ?? 0}} / {{$stats->AUTO_HOPPER ?? 0}}" />
                        <!-- Card 18 -->
                        <x-text-icon icon="fa-cogs" title="Dropped / Answered" text="{{$stats->DROPPED ?? 0}} / {{$stats->ANSWERED ?? 0}}" />
                        <!-- Card 19 -->
                        <x-text-icon icon="fa-cogs" title="DL Diff" text="{{$stats->AVG_DIFF_ONEMIN ?? 0}}" />
                        <!-- Card 20 -->
                        <x-text-icon icon="fa-cogs" title="Statuses" text="{{$stats->STATUSES?? 0}}" />
                        <!-- Card 21 -->
                        <x-text-icon icon="fa-cogs" title="Leads In Hopper" text="{{$stats->LEADS_IN_HOPPER ?? 0}}" />
                        <!-- Card 22 -->
                        <x-text-icon icon="fa-cogs" title="Dropped Percent" text="{{$stats->DROPPED_PERCENT ?? 0}}" />
                        <!-- Card 23 -->
                        <x-text-icon icon="fa-cogs" title="DIFF" text="{{$stats->DIFF ?? 0}}" />
                        <!-- Card 24 -->
                        <x-text-icon icon="fa-cogs" title="Order" text="{{$stats->ORDER_O ?? 0}}" />
                    </div>
                    </div>
                </section>

                 
                  
            </div>
            
            
            
            
            
        </div>


        

        
    </div>
    <div data-dial-init class="fixed end-6 bottom-6 group">
        <div id="speed-dial-menu-default" class="flex flex-col items-center hidden mb-4 space-y-2">
            {{-- <button type="button" data-tooltip-target="tooltip-share" data-tooltip-placement="left"
                class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 18 18">
                    <path
                        d="M14.419 10.581a3.564 3.564 0 0 0-2.574 1.1l-4.756-2.49a3.54 3.54 0 0 0 .072-.71 3.55 3.55 0 0 0-.043-.428L11.67 6.1a3.56 3.56 0 1 0-.831-2.265c.006.143.02.286.043.428L6.33 6.218a3.573 3.573 0 1 0-.175 4.743l4.756 2.491a3.58 3.58 0 1 0 3.508-2.871Z" />
                </svg>
                <span class="sr-only">Share</span>
            </button> --}}
            {{-- <div id="tooltip-share" role="tooltip"
                class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Share
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div> --}}
            {{-- Print  --}}
            {{-- <button type="button" data-tooltip-target="tooltip-print" data-tooltip-placement="left"
                class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path d="M5 20h10a1 1 0 0 0 1-1v-5H4v5a1 1 0 0 0 1 1Z" />
                    <path
                        d="M18 7H2a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2v-3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-1-2V2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v3h14Z" />
                </svg>
                <span class="sr-only">Print</span>
            </button>
            <div id="tooltip-print" role="tooltip"
                class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Print
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div> --}}
            <a href="{{route('generate-pdf', ['stats' => $stats, 'statsIcon' => $statsIcon, 'tables' => $tables])}}" type="button" data-tooltip-target="tooltip-download" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                    <path
                        d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Download</span>
            </a>
            <div id="tooltip-download" role="tooltip"
                class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm  text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Download
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            {{-- <button type="button" data-tooltip-target="tooltip-copy" data-tooltip-placement="left"
                class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 dark:hover:text-white shadow-sm dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 18 20">
                    <path
                        d="M5 9V4.13a2.96 2.96 0 0 0-1.293.749L.879 7.707A2.96 2.96 0 0 0 .13 9H5Zm11.066-9H9.829a2.98 2.98 0 0 0-2.122.879L7 1.584A.987.987 0 0 0 6.766 2h4.3A3.972 3.972 0 0 1 15 6v10h1.066A1.97 1.97 0 0 0 18 14V2a1.97 1.97 0 0 0-1.934-2Z" />
                    <path
                        d="M11.066 4H7v5a2 2 0 0 1-2 2H0v7a1.969 1.969 0 0 0 1.933 2h9.133A1.97 1.97 0 0 0 13 18V6a1.97 1.97 0 0 0-1.934-2Z" />
                </svg>
                <span class="sr-only">Copy</span>
            </button>
            <div id="tooltip-copy" role="tooltip"
                class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Copy
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div> --}}
        </div>
        <button type="button" data-dial-toggle="speed-dial-menu-default" aria-controls="speed-dial-menu-default"
            aria-expanded="false"
            class="flex items-center justify-center text-white bg-soul-1 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
            <svg class="w-5 h-5 transition-transform group-hover:rotate-45" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 1v16M1 9h16" />
            </svg>
            <span class="sr-only">Open actions menu</span>
        </button>
    </div>
    
    <div class="">
    </div>


    
    
</main>


<script>
    const REFRESH_RATE = {{ $refreshRate }};
    console.log(REFRESH_RATE);
    
    let secondsPassed = 0;
    setInterval(() => {
        secondsPassed++;
        console.log(`Seconds passed: ${secondsPassed}`);
    }, 1000);

    document.addEventListener('DOMContentLoaded', function () {
        async function loadTableContent() {
            try {
                const response = await fetch('/real-time-table-refresh');
                if (!response.ok) throw new Error('Error al cargar la tabla');
                if (response.ok) {
                    console.log('Tabla actualizada');
                }
                const tableContent = await response.text(); // Obtén el HTML como texto
                document.querySelector('table tbody').innerHTML = tableContent; // Reemplaza el contenido del tbody
            } catch (error) {
                console.error('Error al actualizar la tabla:', error);
            }
        }

        async function loadIcons() {
            try {
                const response = await fetch('/real-time-icon-refresh');
                if (!response.ok) throw new Error('Error al cargar los iconos');
                if (response.ok) {
                    console.log('Iconos actualizados');
                }
                const iconContent = await response.text(); // Obtén el HTML como texto
                document.querySelector('#stats-container').innerHTML = iconContent;
            } catch (error) {
                console.error('Error al actualizar los iconos:', error);
            }
        }

        async function loadReports() {
            try {
                const response = await fetch('/real-time-reports-refresh');
                if (!response.ok) throw new Error('Error al cargar los reports');
                if (response.ok) {
                    console.log('Reports actualizados');
                }
                const iconContent = await response.text(); // Obtén el HTML como texto
                document.querySelector('#Real-Time-Reports').innerHTML = iconContent;
            } catch (error) {
                console.error('Error al actualizar los reports:', error);
            }
        }

        async function loadUserStatus() {
            try {
                const response = await fetch('/real-time-userStatus-refresh');
                if (!response.ok) throw new Error('Error al cargar los userStatus');
                const iconContent = await response.text();
                document.querySelector('#userStatus').innerHTML = iconContent;

                // Re-inicializa los popovers
                initializePopovers();
            } catch (error) {
                console.error('Error al actualizar los userStatus:', error);
            }
        }



        // Función para inicializar popovers
        function initializePopovers() {
            const popoverElements = document.querySelectorAll('[data-popover-target]');
            console.log('Elementos con popover encontrados:', popoverElements.length);

            popoverElements.forEach((element) => {
                const targetId = element.getAttribute('data-popover-target');
                const target = document.getElementById(targetId);
                if (target) {
                    console.log(`Inicializando popover para: ${targetId}`);
                    // Ajusta esto según la librería que estés usando
                    try {
                        new Popover(target, {
                            placement: 'top',
                            triggerType: 'hover',
                        });
                    } catch (error) {
                        console.error(`Error al inicializar el popover para ${targetId}:`, error);
                    }
                } else {
                    console.warn(`No se encontró el elemento de destino para: ${targetId}`);
                }
            });
        }


        // Esta función llama a ambas funciones en el mismo intervalo
        function loadContent() {
            loadTableContent();
            loadIcons();
            loadReports();
            loadUserStatus();
        }

        setInterval(loadContent, REFRESH_RATE * 1000); 
    });
</script>


@endsection