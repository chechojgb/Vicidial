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