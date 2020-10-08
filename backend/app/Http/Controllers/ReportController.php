<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPJasper\PHPJasper;
use Illuminate\Support\Facades\Response as FacadeResponse;

class ReportController extends Controller
{
    public function generate(Request $request)
    {
        $driver = (env('DB_CONNECTION') == 'pgsql') ? 'postgres' : 'mysql';
        $params  = $request->all();
        $report  = $params['report'];
        $input = base_path('reports/' . $report . '.jasper');
        $output = base_path('public/reports/'. $report);
        $options = [
            'format' => ['pdf'],
            'locale' => 'en',
            'params' => $params,
            'db_connection' => [
                'driver'    => $driver,
                'username'  => env('DB_USERNAME'),
                'password'  => env('DB_PASSWORD'),
                'host'      => env('DB_HOST'),
                'database'  => env('DB_DATABASE'),
                'port'      => env('DB_PORT')
            ]
        ];
        $jasper = new PHPJasper;
        $jasper->process($input, $output, $options)->execute();
        $headers = [
            'Content-Disposition' => "inline",
            'Content-Type'        => 'application/pdf',
        ];
        $output = $output . '.pdf';
        return response()->make($output)->withHeaders($headers);
    }

    public function check() {
        print 'CheckReportController ...';
        $input = base_path(
            '/vendor/geekcom/phpjasper/examples/hello_world_params.jrxml');
        $jasper = new PHPJasper;
        $output = $jasper->listParameters($input)->execute();

        foreach($output as $parameter_description)
            print $parameter_description . '<pre>';
        }

}