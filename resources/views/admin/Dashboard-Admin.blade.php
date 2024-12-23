@extends('layouts.layoutAdmin')

@section('title', 'Inicio')

@section('content')
<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <nav>
 
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <li class="text-sm leading-normal">
                        <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                        aria-current="page">Dashboard</li>
                </ol>
                <h6 class="mb-0 font-bold capitalize">Reports</h6>
            </nav>


        </div>
    </nav>

    <!-- end Navbar -->

    <!-- Buttons -->
    <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
            <!-- Buttons1 -->
            <x-button-state title="Agents Logged In" count="13" add="Connect" route="Real-Time-Reports-Admin" />
            <!-- Buttons2 -->
            <x-button-state title="Agents In Calls" count="0" add="Connect" route="Real-Time-Reports-Admin" />
            <!-- Buttons3 -->
            <x-button-state title="Active Calls" count="0" add="Connect" route="Real-Time-Reports-Admin" />
            <!-- Buttons4 -->
            <x-button-state title="Calls Ringing" count="0" add="Connect" route="Real-Time-Reports-Admin" />
        </div>

        <div class="flex my-6 -mx-3">
            <!-- card 1 -->

            <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-full md:flex-none lg:w-full lg:flex-none">
                <div
                    class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <div class="flex flex-wrap mt-0 -mx-3">
                            <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                                <h6>System Summary</h6>
                                <p class="mb-0 text-sm leading-normal">
                                    <i class="fa fa-check text-cyan-500"></i>
                                    <span class="ml-1 font-semibold">30 done</span>
                                    this month
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="flex-auto p-6 px-0 pb-2">
                        <div class="overflow-x-auto">
                            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Records</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Active</th>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Inactive</th>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset('assets/img/small-logos/Users.png')}}"
                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                        alt="xd" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal">Users</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="mt-2 avatar-group flex justify-start">
                                                <div>
                                                    <p>31</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                            <span class="text-xs font-semibold leading-tight"> 4 </span>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                          <div class="flex flex-col items-center justify-center w-full">
                                              <span class="text-xs font-semibold leading-tight">35 Users available</span>
                                              <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                  <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                      role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </div>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset('assets/img/small-logos/Campaign.svg')}}"
                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                        alt="atlassian" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal">Campaigns</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="mt-2 avatar-group flex justify-start">
                                                <div>
                                                    <p>13</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                            <span class="text-xs font-semibold leading-tight"> 1 </span>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex flex-col items-center justify-center w-full">
                                                <div>
                                                    <div>
                                                        <span class="text-xs font-semibold leading-tight">14 Users available</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 w-1/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset('assets/img/small-logos/List.webp')}}"
                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                        alt="team7" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal">List</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="mt-2 avatar-group flex justify-start">
                                                <div>
                                                    <p>8</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                            <span class="text-xs font-semibold leading-tight"> 3 </span>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex flex-col items-center justify-center w-full">
                                                <div>
                                                    <div>
                                                        <span class="text-xs font-semibold leading-tight">11 Users available</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset('assets/img/small-logos/Groups.svg')}}"
                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                        alt="spotify" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal">In-Groups</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="mt-2 avatar-group flex justify-start">
                                                <div>
                                                    <p>8</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                            <span class="text-xs font-semibold leading-tight"> 0 </span>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex flex-col items-center justify-center w-full">
                                                <div>
                                                    <div>
                                                        <span class="text-xs font-semibold leading-tight">8 Users available</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset('assets/img/small-logos/candado.jpg')}}"
                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                        alt="invision" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal">DIDs</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="mt-2 avatar-group flex justify-start">
                                                <div>
                                                    <p>2</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-0 whitespace-nowrap">
                                            <span class="text-xs font-semibold leading-tight"> 0 </span>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                            <div class="flex flex-col items-center justify-center w-full">
                                                <div>
                                                    <div>
                                                        <span class="text-xs font-semibold leading-tight">2 Users available</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-2/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="40"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card 2 -->


        </div>



        <div class="flex flex-wrap justify-center -mx-3">
            <div class="w-full max-w-full px-3 md:w-1/2 lg:w-1/3 mb-6">
                <div
                    class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <h6>Total Stats for Today: </h6>
                    </div>
                    <div class="flex-auto p-4">
                        <div class="before:border-r-solid relative before:absolute before:top-0 before:left-4  before:lg:-ml-px">
                            <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 leading-none text-transparent ni ni-bell-55 leading-pro bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Total Calls
                                    </h6>
                                    <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">0 Calls</p>
                                </div>
                            </div>
                            <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 leading-none text-transparent ni ni-html5 leading-pro bg-gradient-to-tl from-red-600 to-rose-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Total Inbound
                                        Calls</h6>
                                    <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">0 Inbounds
                                    </p>
                                </div>
                            </div>
                            <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 leading-none text-transparent ni ni-cart leading-pro bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Total Outbounds
                                        Calls</h6>
                                    <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">0 Outbounds
                                    </p>
                                </div>
                            </div>
                            <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i class="relative z-10 leading-none text-transparent ni ni-credit-card leading-pro bg-gradient-to-tl from-red-500 to-yellow-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Maximum Agents
                                    </h6>
                                    <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">13</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-full px-3 md:w-1/2 lg:w-1/3 mb-6">
              <div
                  class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                  <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                      <h6>Total Stats for Yesterday: </h6>
                  </div>
                  <div class="flex-auto p-4">
                      <div class="before:border-r-solid relative before:absolute before:top-0 before:left-4  before:lg:-ml-px">
                          <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                              <span
                                  class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                  <i
                                      class="relative z-10 leading-none text-transparent ni ni-bell-55 leading-pro bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text fill-transparent"></i>
                              </span>
                              <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                  <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Total Calls
                                  </h6>
                                  <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">0 Calls</p>
                              </div>
                          </div>
                          <div class="relative mb-4 after:clear-both after:table after:content-['']">
                              <span
                                  class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                  <i
                                      class="relative z-10 leading-none text-transparent ni ni-html5 leading-pro bg-gradient-to-tl from-red-600 to-rose-400 bg-clip-text fill-transparent"></i>
                              </span>
                              <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                  <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Total Inbound
                                      Calls</h6>
                                  <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">0 Inbounds
                                  </p>
                              </div>
                          </div>
                          <div class="relative mb-4 after:clear-both after:table after:content-['']">
                              <span
                                  class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                  <i
                                      class="relative z-10 leading-none text-transparent ni ni-cart leading-pro bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text fill-transparent"></i>
                              </span>
                              <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                  <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Total Outbounds
                                      Calls</h6>
                                  <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">0 Outbounds
                                  </p>
                              </div>
                          </div>
                          <div class="relative mb-4 after:clear-both after:table after:content-['']">
                              <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                  <i class="relative z-10 leading-none text-transparent ni ni-credit-card leading-pro bg-gradient-to-tl from-red-500 to-yellow-400 bg-clip-text fill-transparent"></i>
                              </span>
                              <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                  <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Maximum Agents
                                  </h6>
                                  <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">13</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>


        
    </div>
    <!-- end cards -->
</main>


@endsection