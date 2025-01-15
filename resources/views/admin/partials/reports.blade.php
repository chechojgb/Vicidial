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