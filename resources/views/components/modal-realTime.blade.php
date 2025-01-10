<!-- Modal toggle -->
<div class="flex justify-start mt-4 pl-4 ml-4">
  <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-soul-1 hover:bg-blue-soul-1 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-poppins" type="button">
    {{__('Choose Report Display Options')}}
  </button>
</div>

<!-- Main modal -->
<div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-4xl max-h-full">
    
    <!-- Modal content -->
    <div class="w-full max-w-6xl bg-white shadow-lg rounded-lg p-6">
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">{{__('Campaign Settings')}}</h1>
        <button class="text-blue-500 hover:underline flex items-center" data-modal-hide="static-modal">
          <img src="{{ asset('images/fi-rr-cross-small.png') }}" alt="Close" class="w-4 h-4 mr-2">
          {{__('Close Panel')}}
        </button>
      </div>
      <form action="{{route('Real-Time-Reports-Admin')}}" method="GET">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <!-- Select Campaigns -->
          <div>
            <label for="campaigns" class="block text-sm font-medium text-gray-700 mb-2">{{__('Select Campaigns:')}}</label>
            <select id="campaigns" name="campaign_ids[]" multiple class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
              <option>{{__('ALL-ACTIVE')}}</option>
                @if ($allCampaigns->count() > 0)
                    @foreach ($allCampaigns as $campaign)
                        <option value="{{$campaign->campaign_id}}">
                          {{ in_array($campaign->campaign_id, request('campaign_ids', [])) ? 'selected' : ''}}
                          {{$campaign->campaign_id}} - {{$campaign->campaign_name}}</option>
                    @endforeach
                @else
                  <option>{{__('No campaigns available')}}.</option>
                    
                @endif
            </select>
            <p class="text-sm text-gray-500 mt-2">{{__('Hold down Ctrl to select multiple campaigns.')}}</p>
          </div>
  
          <!-- Select User Groups -->
          <div>
            <label for="user-groups" class="block text-sm font-medium text-gray-700 mb-2">{{__('Select User Groups:')}}</label>
            <select id="user-groups" name="user-groups" multiple class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
              <option>{{__('ALL-GROUPS')}} - All user groups</option>
                @if ($allUserGroups->count() > 0)
                    @foreach ($allUserGroups as $userGroup)
                        <option>{{$userGroup->user_group}} - {{$userGroup->group_name}}</option>
                    @endforeach
                @else
                  <option>{{__('No User groups available')}}.</option>
                    
                @endif
            </select>
          </div>
  
          <!-- Select In-Groups -->
          <div>
            <label for="in-groups" class="block text-sm font-medium text-gray-700 mb-2">{{__('Select In-Groups:')}}</label>
            <select id="in-groups" name="in-groups" multiple class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
              <option>{{__('ALL-INGROUPS')}}</option>
              @if ($allSelectInGroups->count() > 0)
                  @foreach ($allSelectInGroups as $inGroup)
                      <option>{{$inGroup->group_id}} - {{$inGroup->group_name}}</option>
                  @endforeach
              @else
                <option>{{__('No User groups available')}}.</option>
                  
              @endif
            </select>
          </div>
        </div>
        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            
  
          <x-select-dropdown title="Screen Refresh Rate" :options="['4' => '4 seconds', '10' => '10 seconds', '20' => '20 seconds', '30' => '30 seconds', '40' => '40 seconds', '60' => '60 seconds', '120' => '2 minutes', '300' => '5 minutes', '600' => '10 minutes', '1200' => '20 minutes', '1800' => '30 minutes', '2400' => '40 minutes', '3600' => '60 minutes', '7200' => '2 hours', '63072000' => '2 years']" :selectedValue="$refreshRate" name='refreshRate'/>
            <x-select-dropdown title="Inbound" :options="['Yes' => 'Yes']" name='inbound' />
            <x-select-dropdown title="Monitor" name='monitor' :options="['option1' => 'No']" />
            <x-select-dropdown title="Show Drop In-Group Row" name='show_drop_in_group_row' :options="['option1' => 'No']" />
            <x-select-dropdown title="Inbound SLA Stats" name='inbound_sla_stats' :options="['option1' => 'No', 'option2' => 'YES', 'option3' => 'TMA', 'option4' => 'SLA 1 ONLY', 'option5' => 'SLA 2 ONLY']" />
            <x-select-dropdown title="Show Cust. Phone Code" name='show_cust_phone_code' :options="['option1' => 'No']" />
            <x-select-dropdown title="Show Carrier Stats" name='show_carrier_stats' :options="['option1' => 'No']" />
            <x-select-dropdown title="Agent Time Stats" name='agent_time_stats' :options="['option1' => 'No']" />
            <x-select-dropdown title="Agent Latency" name='agent_latency' :options="['option1' => 'No', 'option2' => 'YES', 'option3' => 'ALL', 'option4' => 'DAY', 'option5' => 'NOW']" />
            <x-select-dropdown title="Parked Call Stats" name='parked_call_stats' :options="['option1' => 'No', 'option2' => 'YES', 'option3' => 'LIMITED']" />
            <x-select-dropdown title="In-group color override" name='in_group_color_override' :options="['option1' => 'No']" />
            <x-select-dropdown title="Display as" name='display_as' :options="['option1' => 'No']" />
  
        </div>
  
        
  
        <!-- Submit Button -->
        <div class="mt-6 flex justify-end">
          <button class="bg-soul-1 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg shadow-lg" data-modal-hide="static-modal">
            {{__('Submit')}}
          </button>
        </div>
      </form>

      <!-- Additional Options -->
    </div>
  </div>
</div>
