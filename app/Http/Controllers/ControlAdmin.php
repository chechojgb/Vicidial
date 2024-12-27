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

    public function generatePdf()
    {
        set_time_limit(300);

        // Renderizar la vista a HTML
        $html = view('admin.real-time-reports')->render();

        // Generar el PDF utilizando Browsershot y devolverlo como una respuesta de descarga
        $pdf = Browsershot::html($html)
            ->setNodeBinary('C:\Program Files\nodejs\node.exe') // Ruta correcta de Node.js
            ->setNpmBinary('C:\Program Files\nodejs\npm.cmd') // Ruta correcta de npm
            ->format('A4')
            ->pdf();

        return response($pdf)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="realtime_report.pdf"');
    }



}
