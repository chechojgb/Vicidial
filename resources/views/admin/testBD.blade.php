@extends('layouts.layoutAdmin')

@section('title', 'Real Time Reports')

@section('content')

<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200 mt-2">



    <h1>System Settings</h1>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th>Use Non Latin</th>
                <th>Outbound Autodial Active</th>
                <th>Slave DB Server</th>
                <th>Reports Use Slave DB</th>
                <th>Enable Languages</th>
                <th>Language Method</th>
                <th>Agent Whisper Enabled</th>
                <th>Report Default Format</th>
                <th>Enable Pause Code Limits</th>
                <th>Allow Web Debug</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($systemSettings as $setting)
                <tr>
                    <td>{{ $setting->use_non_latin }}</td>
                    <td>{{ $setting->outbound_autodial_active }}</td>
                    <td>{{ $setting->slave_db_server }}</td>
                    <td>{{ $setting->reports_use_slave_db }}</td>
                    <td>{{ $setting->enable_languages }}</td>
                    <td>{{ $setting->language_method }}</td>
                    <td>{{ $setting->agent_whisper_enabled }}</td>
                    <td>{{ $setting->report_default_format }}</td>
                    <td>{{ $setting->enable_pause_code_limits }}</td>
                    <td>{{ $setting->allow_web_debug }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</main>

@endsection