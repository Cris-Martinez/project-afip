<?php

namespace Modules\InventarioCore\Http\Controllers;

use Illuminate\Http\Request;
use JasperPHP;

class ReportController extends Controller
{
    public function generate(Request $request) {
        $driver = (env('DB_CONNECTION') == 'pgsql') ? 'postgres' : 'mysql';
        $params  = $request->all();
        $report  = $params['report'];
        $entidad = $params['entidad'];
        $titulo  = $params['titulo'];
        $db = [ 
            'driver'    => $driver,
            'username'  => env('DB_USERNAME'),
            'password'  => env('DB_PASSWORD'),
            'host'      => env('DB_HOST'),
            'database'  => env('DB_DATABASE'),
            'port'      => env('DB_PORT')
        ];
        $path = 'reports/'. $report . '.jasper';
//        $path = 'reports/simple.jasper';
        $pathToFile = base_path('reports/' . $report . '.pdf');
//        $pathToFile = base_path('reports/simple.pdf');
        $format = 'pdf';
    //    $params = [
    //        'entidad' => $entidad,
    //        'titulo'  => $titulo
    //    ];
    //    dd($params);
        JasperPHP::process(
            base_path($path),
            false,
            array($format),
            $params,
            $db
        )->execute();
        $name = ucfirst($entidad) . '.pdf';
        $headers = [
            'Content-Disposition' => "inline",
            'Content-Type'        => 'application/pdf',
        ];            
        return response()->download($pathToFile, $name, $headers);
    } 
}