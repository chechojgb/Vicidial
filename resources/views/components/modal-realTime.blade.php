<!-- Modal toggle -->
<button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-No focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  {{__('Choose Report Display Options')}}
</button>

<!-- Main modal -->
<div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-2xl max-h-full">
    <!-- Modal content -->
    <div class="w-full max-w-5xl bg-white shadow-lg rounded-lg p-6">
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">{{__('Campaign Settings')}}</h1>
        <button class="text-blue-500 hover:underline" data-modal-hide="static-modal">{{__('Close Panel')}}</button>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Select Campaigns -->
        <div>
          <label for="campaigns" class="block text-sm font-medium text-gray-700 mb-2">{{__('Select Campaigns:')}}</label>
          <select id="campaigns" name="campaigns" multiple class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>{{__('ALL-ACTIVE')}}</option>
              @if ($allCampaigns->count() > 0)
                  @foreach ($allCampaigns as $campaign)
                      <option>{{$campaign->campaign_id}} - {{$campaign->campaign_name}}</option>
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
                      <option>{{$userGroup->user_group}}</option>
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

      <!-- Additional Options -->
      <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
          <label for="refresh-rate" class="block text-sm font-medium text-gray-700 mb-2">{{__('Screen Refresh Rate:')}}</label>
          <select id="refresh-rate" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>{{__('4 seconds')}}</option>
            <option>{{__('10 seconds')}}</option>
            <option>{{__('20 seconds')}}</option>
            <option>{{__('30 seconds')}}</option>
            <option>{{__('40 seconds')}}</option>
            <option>{{__('60 seconds')}}</option>
            <option>{{__('2 minutes')}}</option>
            <option>{{__('5 minutes')}}</option>
            <option>{{__('10 minutes')}}</option>
            <option>{{__('20 minutes')}}</option>
            <option>{{__('30 minutes')}}</option>
            <option>{{__('40 minutes')}}</option>
            <option>{{__('60 minutes')}}</option>
            <option>{{__('2 hours')}}</option>
            <option>{{__('2 years')}}</option>
          </select>
        </div>
        <div>
          <label for="inbound" class="block text-sm font-medium text-gray-700 mb-2">{{__('Inbound:')}}</label>
          <select id="inbound" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>{{__('Yes')}}</option>
          </select>
        </div>
        <div>
          <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">{{__('Monitor:')}}</label>
          <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>{{__('No')}}</option>
          </select>
        </div>
        <div>
          <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">{{__('Show Drop In-Group Row:')}}</label>
          <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>{{__('No')}}</option>
          </select>
        </div>
        <div>
          <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">{{__('Inbound SLA Stats:')}}</label>
          <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>{{__('NO')}}</option>
            <option>{{__('YES')}}</option>
            <option>{{__('TMA')}}</option>
            <option>{{__('SLA 1 ONLY')}}</option>
            <option>{{__('SLA 2 ONLY')}}</option>
          </select>
        </div>
        <div>
          <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">{{__('Show Cust. Phone Code:')}}</label>
          <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>{{__('No')}}</option>
          </select>
        </div>
        <div>
          <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">{{__('Show Carrier Stats:')}}</label>
          <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>{{__('No')}}</option>
          </select>
        </div>
        <div>
          <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">{{__('Agent Time Stats:')}}</label>
          <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>{{__('No')}}</option>
          </select>
        </div>
        <div>
          <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">{{__('Agent Latency:')}}</label>
          <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>{{__('No')}}</option>
            <option>{{__('YES')}}</option>
            <option>{{__('ALL')}}</option>
            <option>{{__('DAY')}}</option>
            <option>{{__('NOW')}}</option>
          </select>
        </div>
        <div>
          <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">{{__('Parked Call Stats:')}}</label>
          <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>{{__('No')}}</option>
            <option>{{__('YES')}}</option>
            <option>{{__('LIMITED')}}</option>
          </select>
        </div>
        <div>
          <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">{{__('In-group color override:')}}</label>
          <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>{{__('No')}}</option>
          </select>
        </div>
        <div>
          <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">{{__('Display as:')}}</label>
          <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>{{__('No')}}</option>
          </select>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="mt-6 flex justify-end">
        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg shadow-lg" data-modal-hide="static-modal">
          {{__('Submit')}}
        </button>
      </div>
    </div>
  </div>
</div>
