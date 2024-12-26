<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

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
}
