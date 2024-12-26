<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RealtimeReportController extends Controller
{
    public function index(Request $request)
    {
        // Lógica de autenticación y autorización
        $PHP_AUTH_USER = '6666';

        // Consultas a la base de datos
        $systemSettings = DB::table('system_settings')->select('use_non_latin', 'outbound_autodial_active', 'slave_db_server', 'reports_use_slave_db', 'enable_languages', 'language_method', 'agent_whisper_enabled', 'report_default_format', 'enable_pause_code_limits', 'allow_web_debug')->first();

        $userSettings = DB::table('vicidial_users')->where('user', $PHP_AUTH_USER)->first();

        // Más consultas y lógica aquí...

        return view('admin.realtime_report', compact('systemSettings', 'userSettings'));
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