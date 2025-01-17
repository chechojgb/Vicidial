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

{{-- <div>
    @if (empty($campaignIds))
        <p>No campaign selected</p>
        
    @endif
    @foreach ($campaignIds as $item)
        <p>{{$item}}</p>
    @endforeach
</div> --}}