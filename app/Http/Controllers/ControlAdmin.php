<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;
use Spatie\Browsershot\Browsershot;

class ControlAdmin extends Controller
{
    public function index($route)
    {
        return view('admin.'.$route);
    }

   public function showAggentsLogged(){
        // $campaignStats = DB::table('vicidial_campaign_stats')
        // ->join('vicidial_campaigns', 'vicidial_campaign_stats.campaign_id', '=', 'vicidial_campaigns.campaign_id')
        // ->join('vicidial_hopper', 'vicidial_campaigns.campaign_id', '=', 'vicidial_hopper.campaign_id')
        // ->select(
        //     'vicidial_campaigns.dial_level',
        //     'vicidial_campaigns.lead_order',
        //     'vicidial_campaign_stats.dial_level_difference',
        //     'vicidial_campaign_stats.drop_percentage',
        //     DB::raw('COUNT(vicidial_hopper.lead_id) as leads_in_hopper')
        // )
        // ->where('vicidial_campaigns.campaign_id', 'CAMPAIGN_ID')
        // ->groupBy(
        //     'vicidial_campaigns.dial_level',
        //     'vicidial_campaigns.lead_order',
        //     'vicidial_campaign_stats.dial_level_difference',
        //     'vicidial_campaign_stats.drop_percentage'
        // )
        // ->first();

    // Pasar los datos a la vista utilizando compact
    return view('admin.real-time-reports');
   }
    public function generatePdf(Request $request)
    {
        $stats = $request->input('stats');
        $stats_icon = $request->input('stats_icon');
        $tables = $request->input('tables');
        set_time_limit(300);
        // Renderizar la vista a HTML
        $html = view('admin.pdfDowload', compact('stats', 'stats_icon', 'tables'))->render();
        $pdf = Browsershot::html($html)
            ->showBackground()
            ->setNodeBinary('C:\Program Files\nodejs\node.exe') // Ruta correcta de Node.js
            ->setNpmBinary('C:\Program Files\nodejs\npm.cmd') // Ruta correcta de npm
            ->format('A4')
            ->pdf();
        return response($pdf)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="realtime_report.pdf"');
    }
    public function testView()
    {
        return view('admin.test');
    }

    public function testBD()
    {
        $systemSettings = DB::select("SELECT use_non_latin, outbound_autodial_active, slave_db_server, reports_use_slave_db, enable_languages, language_method, agent_whisper_enabled, report_default_format, enable_pause_code_limits, allow_web_debug FROM system_settings;");
      

        
        return view('admin.testBD' , compact( 'systemSettings'));
    }

}
