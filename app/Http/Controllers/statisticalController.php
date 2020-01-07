<?php

namespace App\Http\Controllers;
use\App\Models\Detailimport;
use App\Models\Vendor;
use Illuminate\Http\Request;
use\App\Charts\statistical;
use\App\Models\Product;
use\App\Models\Detailexport;
use\App\Models\Catalog;
use\App\Models\Users;
class statisticalController extends Controller
{
    public function index()
    {
        $vendors = Vendor::all();
        $chart = new statistical;
        $today_users = Detailimport::whereDate('created_at', today())->count();
        $yesterday_users = Detailimport::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = Detailimport::whereDate('created_at', today()->subDays(2))->count();
        $users_3_days_ago = Detailimport::whereDate('created_at', today()->subDays(3))->count();
        $chart->labels(['3 days ago','2 days ago', 'Yesterday', 'Today']);
        $chart->dataset('d_import', 'line', [$users_3_days_ago,$users_2_days_ago, $yesterday_users, $today_users])->backgroundColor('rgba(54, 162, 235, 0.2)')->color('rgba(54, 162, 235, 1)');

        $today_users = Detailexport::whereDate('created_at', today())->count();
        $yesterday_users = Detailexport::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = Detailexport::whereDate('created_at', today()->subDays(2))->count();
        $users_3_days_ago = Detailexport::whereDate('created_at', today()->subDays(3))->count();
        $chart->labels(['3 days ago','2 days ago', 'Yesterday', 'Today']);
        $chart->dataset('d_export', 'line', [$users_3_days_ago,$users_2_days_ago, $yesterday_users, $today_users])->backgroundColor('rgba(255, 99, 132, 0.2)')->color('rgba(255, 99, 132, 1)');
//        $chartCount1  = [count(Product::all())];
//        $chartCount2  = [count(Detailimport::all())];
//        $chartCount3  = [count(Detailexport::all())];
//        $chartCount4  = [count(Catalog::all())];
//        $chartCount5  = [count(Users::all())];
//        $chartLabels  = [];
//        $chart->labels($chartLabels);
//        $chart->dataset('Product', 'bar', $chartCount1)->backgroundColor('rgba(255, 99, 132, 0.2)')->color('rgba(255, 99, 132, 1)');
//        $chart->dataset('import', 'bar', $chartCount2)->backgroundColor('rgba(54, 162, 235, 0.2)')->color('rgba(54, 162, 235, 1)');
//        $chart->dataset('Export', 'bar', $chartCount3)->backgroundColor('rgba(255, 206, 86, 0.2)')->color('rgba(255, 206, 86, 1)');
//        $chart->dataset('Catalog', 'bar', $chartCount4)->backgroundColor('rgba(75, 192, 192, 0.2)')->color('rgba(75, 192, 192, 1)');
//        $chart->dataset('Users', 'bar', $chartCount5)->backgroundColor('rgba(255, 159, 64, 0.2)')->color('rgba(255, 159, 64, 1)');
        return view('page.chart.chart',compact('chart','vendors'));
    }
 }
