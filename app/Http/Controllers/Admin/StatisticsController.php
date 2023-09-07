<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Exception;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller {
    /**
     * @throws Exception
     */
//    public function index(Apartment $apartment) {
//        $chart_options = [
//            'chart_title' => 'Apartment views',
//            'report_type' => 'group_by_date',
//            'model' => 'App\Models\View',
//            'group_by_field' => 'date',
//            'group_by_period' => 'day',
//            'chart_type' => 'bar',
//        ];
//
//        $chart1 = new LaravelChart($chart_options);
//
//        return view('admin.apartments.statistics.index',
//            compact('apartment', 'chart1'));
//    }

    public function index(int $apartmentId) {
        $apartment = Apartment::findOrFail($apartmentId);
        $views = Apartment::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(views.date) as month_name"))
            ->where('apartment_id', $apartmentId)
            ->leftJoin('views', 'apartments.id', '=', 'views.apartment_id')
            ->whereYear('views.date', date('Y'))
            ->groupBy(DB::raw("MONTH(views.date)"), DB::raw("MONTHNAME(views.date)"))
            ->pluck('count', 'month_name');

        $labels = $views->keys();
        $data = $views->values();

        return view('admin.apartments.statistics.index', compact('apartment', 'labels', 'data'));
    }
}
