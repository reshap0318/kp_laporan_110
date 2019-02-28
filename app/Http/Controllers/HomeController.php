<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Sentinel;
use App\Charts\Echarts;
use App\laporan;
use App\laporanBpkb;

class HomeController extends Controller
{
    public function home($value='')
    {
        return view('welcome');
    }
    public function YourhomePage($value='')
    {
        return view('home');
    }
    public function dashboard(Request $request)
    {
      $total_kendaraan = DB::table('laporan')->count();
      $total_bpkb = DB::table('laporan_bpkb')->count();
      $total = $total_kendaraan + $total_bpkb;
      $laporans = DB::SELECT(DB::RAW("select DATE_FORMAT(laporan.created_at, '%d/%m/%Y') as tanggal, count(laporan.id)+count(laporan_bpkb.id) as total from laporan, laporan_bpkb GROUP BY tanggal"));

      // dd($total_kendaraan);

      $chart_laporan = new Echarts;
        $tanggal_laporan = ["00/00/0000"];
        $total_laporan = [0];
        foreach ($laporans as $laporan) {
          array_push($tanggal_laporan, $laporan->tanggal);
          array_push($total_laporan, $laporan->total);
        }

        $chart_laporan->labels($tanggal_laporan);
        $chart_laporan->dataset('Total Laporan', 'line', $total_laporan);
        $chart_laporan->options([
          'tooltip'  => [
            'trigger' => 'axis',
            'axisPointer' => [
              'type' => 'cross',
              'label' => [
                  'backgroundColor' => '#6a7985'
              ]
            ],
          ],
          'toolbox' => [
              'feature' => [
                  'saveAsImage' => []
              ]
          ],
          'xAxis' => [
              'type' => 'category',
              'boundaryGap' => false
          ],
          'yAxis' => [
              'type' => 'value',
              'boundaryGap' => [0, '100%']
          ],
          'dataZoom' => [
            [
              'type' => 'inside',
              'start' => 0,
              'end' => 100
            ], [
                'start' => 0,
                'end' => 100,
                'handleIcon' => 'M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z',
                'handleSize' => '80%',
                'handleStyle' => [
                    'color' => '#fff',
                    'shadowBlur' => 3,
                    'shadowColor' => 'rgba(0, 0, 0, 0.6)',
                    'shadowOffsetX' => 2,
                    'shadowOffsetY' => 2
                ]
            ]
          ],
        ]);
        $chart_laporan->datasets[0]->options([
          'areaStyle' => ['normal' => []],
          'label' => [
                'normal' => [
                    'show' => true,
                    'position' => 'top'
                ],
            ],
            'smooth' => true,
            // 'symbol' => 'none',
            'sampling' => 'average',
        ]);
        // dd($chart_laporan);
      return view('dashboard',compact('chart_laporan','total_kendaraan','total_bpkb','total'));
    }

}
