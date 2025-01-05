<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RealtimeReportController extends Controller
{
    public function index(Request $request)
    {
        $campaignSettings = DB::table('vicidial_campaigns')->select(
            'campaign_id',
            'auto_dial_level',
            'dial_status_a',
            'dial_status_b',
            'dial_status_c',
            'dial_status_d',
            'dial_status_e',
            'lead_order',
            'lead_filter_id',
            'hopper_level',
            'dial_method',
            'adaptive_maximum_level',
            'adaptive_dropped_percentage',
            'adaptive_dl_diff_target',
            'adaptive_intensity',
            'available_only_ratio_tally',
            'adaptive_latest_server_time',
            'local_call_time',
            'dial_timeout',
            'dial_statuses'
        )->get();

        dd($campaignSettings);

        // Más consultas y lógica aquí...

        return view('admin.real-time-reports', compact('campaignSettings'));
    }

    public function update(Request $request)
    {
        // Lógica para manejar la actualización AJAX
        $adastats = $request->input('adastats', 1);

        // Consultas y lógica para actualizar el contenido en tiempo real
        $data = DB::table('vicidial_live_agents')->get();

        return response()->json($data);
    }
}