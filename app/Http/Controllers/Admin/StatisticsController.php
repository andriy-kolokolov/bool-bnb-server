<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller {
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
//    public function index(int $apartmentId)
//    {
//        $apartment = Apartment::findOrFail($apartmentId);
//
//        // Fetch daily view counts for the current year
//        $views = Apartment::select(
//            DB::raw("COUNT(*) as count"),
//            DB::raw("MONTHNAME(views.date) as month_name"),
//            DB::raw("DAY(views.date) as day")
//        )
//            ->where('apartment_id', $apartmentId)
//            ->leftJoin('views', 'apartments.id', '=', 'views.apartment_id')
//            ->whereYear('views.date', date('Y'))
//            ->groupBy(DB::raw("MONTH(views.date)"), DB::raw("MONTHNAME(views.date)"), DB::raw("DAY(views.date)"))
//            ->orderBy(DB::raw("MONTH(views.date)"), 'asc')
//            ->orderBy(DB::raw("DAY(views.date)"), 'asc')
//            ->get();
//
//        // Initialize an array to store daily data for each month
//        $monthlyData = [];
//
//        // Initialize an array to store the labels (day of the month) for each month
//        $labels = [];
//
//        // Loop through the results and organize data by month
//        foreach ($views as $view) {
//            $month = $view->month_name;
//
//            // If the month is not in the $monthlyData array, initialize it
//            if (!isset($monthlyData[$month])) {
//                $monthlyData[$month] = [];
//            }
//
//            // Add the daily count to the corresponding month
//            $monthlyData[$month][$view->day] = $view->count;
//
//            // If the labels for this month are not set, initialize them
//            if (!isset($labels[$month])) {
//                $labels[$month] = [];
//            }
//
//            // Add the day of the month as a label for this month
//            $labels[$month][] = $view->day;
//        }
//
//        // Convert the data and labels to compacted arrays
//        $compactedLabels = [];
//        $compactedData = [];
//
//        foreach ($monthlyData as $month => $dailyCounts) {
//            $compactedLabels[$month] = implode(', ', $labels[$month]);
//            $compactedData[$month] = array_values($dailyCounts);
//        }
//
//        return view('admin.apartments.statistics.index',
//            compact('apartment', 'compactedLabels', 'compactedData'));
//    }
}
