<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RealtimeReportController extends Controller
{
    public function index(Request $request)
    {
        $stats = DB::table('vicidial_campaigns as vc')
            ->select([
                DB::raw('AVG(vc.auto_dial_level) AS Dial_LEVEL'),
                DB::raw('(SELECT SUM(vcss.local_trunk_shortage) 
                        FROM vicidial_campaign_server_stats vcss) AS TRUNK_SHORT'),
                DB::raw('(SELECT AVG(balance_trunk_fill) 
                        FROM vicidial_campaign_stats vcs) AS TRUNK_FILL'),
                DB::raw('GROUP_CONCAT(DISTINCT vc.lead_filter_id SEPARATOR ", ") AS FILTER'),
                DB::raw('AVG(vc.adaptive_maximum_level) AS MAX_LEVEL'),
                DB::raw('AVG(vc.adaptive_dropped_percentage) AS DROPPED_MAX'),
                DB::raw('AVG(vc.adaptive_dl_diff_target) AS TARGET_DIFF'),
                DB::raw('AVG(vc.adaptive_intensity) AS INTENSITY'),
                DB::raw('AVG(vc.dial_timeout) AS DIAL_TIMEOUT'),
                DB::raw('MAX(vc.adaptive_latest_server_time) AS TAPER_TIME'),
                DB::raw('(SELECT local_call_time 
                        FROM vicidial_campaigns 
                        LIMIT 1) AS LOCAL_TIME'),
                DB::raw('GROUP_CONCAT(DISTINCT vc.available_only_ratio_tally SEPARATOR ", ") AS AVAIL_ONLY'),
                DB::raw('(SELECT SUM(vcs.dialable_leads) 
                        FROM vicidial_campaign_stats vcs) AS DIALABLE_LEADS'),
                DB::raw('(SELECT SUM(vcs.calls_today) 
                        FROM vicidial_campaign_stats vcs) AS CALLS_TODAY'),
                DB::raw('(SELECT AVG(agents_average_onemin) 
                        FROM vicidial_campaign_stats) AS AVG_AGENTS'),
                DB::raw('GROUP_CONCAT(DISTINCT vc.dial_method SEPARATOR ", ") AS DIAL_METHOD'),
                DB::raw('SUM(vc.hopper_level) AS HOPPER'),
                DB::raw('SUM(vc.auto_hopper_level) AS AUTO_HOPPER'),
                DB::raw('(SELECT SUM(drops_today) 
                        FROM vicidial_campaign_stats) AS DROPPED'),
                DB::raw('(SELECT SUM(answers_today) 
                        FROM vicidial_campaign_stats) AS ANSWERED'),
                DB::raw('(SELECT AVG(differential_onemin) 
                        FROM vicidial_campaign_stats) AS AVG_DIFF_ONEMIN'),
                DB::raw('(SELECT vc.dial_statuses 
                        FROM vicidial_campaigns vc 
                        ORDER BY vc.dial_statuses ASC 
                        LIMIT 1) AS STATUSES'),
                DB::raw('(SELECT COUNT(*) 
                        FROM vicidial_hopper) AS LEADS_IN_HOPPER'),
                DB::raw('(SELECT 
                            CASE 
                                WHEN SUM(vcs.drops_answers_today_pct) >= AVG(vc.adaptive_dropped_percentage) 
                                THEN CONCAT(SUM(vcs.drops_answers_today_pct), " (ALERTA)") 
                                ELSE SUM(vcs.drops_answers_today_pct) 
                            END
                        FROM vicidial_campaign_stats vcs
                        JOIN vicidial_campaigns vc 
                        ON vcs.campaign_id = vc.campaign_id) AS DROPPED_PERCENT'),
                DB::raw('(SELECT 
                            ROUND(AVG((vcs.differential_onemin / vcs.agents_average_onemin) * 100), 2) 
                        FROM vicidial_campaign_stats vcs) AS DIFF'),
                DB::raw('GROUP_CONCAT(DISTINCT vc.lead_order SEPARATOR ", ") AS ORDER_O')
            ])
        ->first();
        $stats_icon = DB::table('vicidial_live_agents')
            ->select([
                DB::raw('SUM(CASE WHEN status IN ("INCALL", "QUEUE") THEN 1 ELSE 0 END) AS agent_incall'),
                DB::raw('COUNT(DISTINCT CASE WHEN status = "READY" THEN campaign_id END) AS agent_logged_in'),
                DB::raw('SUM(CASE WHEN status = "PAUSED" THEN 1 ELSE 0 END) AS agent_paused'),
                DB::raw('COUNT(DISTINCT campaign_id) AS agent_total'),
                
                // Subconsulta para los llamados activos
                DB::raw('(SELECT COUNT(*) 
                            FROM vicidial_auto_calls vac 
                            WHERE vac.status NOT IN ("XFER")
                            AND (
                                (vac.call_type = "IN" AND vac.campaign_id IN (
                                    SELECT closer_campaigns 
                                    FROM vicidial_campaigns
                                ))
                                OR vac.call_type = "OUT"
                            )
                        ) AS current_active_calls'),

                // Subconsulta para los llamados esperando por agentes
                DB::raw('(SELECT SUM(CASE WHEN status = "LIVE" THEN 1 ELSE 0 END) 
                            FROM vicidial_auto_calls vac 
                            WHERE vac.status NOT IN ("XFER")
                            AND (
                                (vac.call_type = "IN" AND vac.campaign_id IN (
                                    SELECT closer_campaigns 
                                    FROM vicidial_campaigns
                                ))
                                OR vac.call_type = "OUT"
                            )
                        ) AS calls_waiting_for_agents'),

                // Subconsulta para los llamados en IVR
                DB::raw('(SELECT SUM(CASE WHEN status = "IVR" THEN 1 ELSE 0 END) 
                            FROM vicidial_auto_calls vac 
                            WHERE vac.status NOT IN ("XFER")
                            AND (
                                (vac.call_type = "IN" AND vac.campaign_id IN (
                                    SELECT closer_campaigns 
                                    FROM vicidial_campaigns
                                ))
                                OR vac.call_type = "OUT"
                            )
                        ) AS calls_in_IVR'),

                // Subconsulta para los llamados que están sonando
                DB::raw('(SELECT SUM(CASE WHEN status NOT IN ("LIVE", "IVR", "CLOSER") THEN 1 ELSE 0 END) 
                            FROM vicidial_auto_calls vac 
                            WHERE vac.status NOT IN ("XFER")
                            AND (
                                (vac.call_type = "IN" AND vac.campaign_id IN (
                                    SELECT closer_campaigns 
                                    FROM vicidial_campaigns
                                ))
                                OR vac.call_type = "OUT"
                            )
                        ) AS calls_ringing')
            ])
        ->first();
        $tables = DB::table('vicidial_users')
            ->join('vicidial_live_agents', 'vicidial_users.user', '=', 'vicidial_live_agents.user')
            ->select([
                'vicidial_live_agents.extension AS ext',
                'vicidial_users.full_name AS name',
                'vicidial_users.user_group AS user_group',
                'vicidial_live_agents.conf_exten AS session_id',
                'vicidial_live_agents.status AS status',
                'vicidial_live_agents.campaign_id AS campaign',
                'vicidial_live_agents.calls_today AS calls_today',
            ])
        ->get();
        $allCampaigns = DB::table('vicidial_campaigns')
            ->select(['campaign_id', 'campaign_name'])
            ->orderBy('campaign_id')
        ->get();
        $allUserGroups = DB::table('vicidial_user_groups')
            ->select(['user_group'])
            ->orderBy('user_group')
        ->get();
        $allSelectInGroups = DB::table('vicidial_inbound_groups')
            ->select(['group_id', 'group_name'])
            ->orderBy('group_id')
        ->get();
        
        // dd($stats, $tables, $stats_icon);
        return view('admin.real-time-reports', compact('stats', 'tables', 'stats_icon', 'allCampaigns', 'allUserGroups', 'allSelectInGroups'));
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