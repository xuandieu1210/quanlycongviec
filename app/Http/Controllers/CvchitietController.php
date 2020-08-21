<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\congviecchitiet;
use App\Models\congviecchinh;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CvchitietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCV = congviecchinh::where('id_donvi', '1')->where('trang_thai', '1')->whereMonth(
            'created_at', '=', Carbon::now()->month
        )->get();
    
        return view('congviecchitiet/congviecchitiet',  ['listCV' => $listCV]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->all();
        
        for ($i = 0; $i < count($params['tencvchitiet']); $i ++) {
            if ($params['tencvchitiet'][$i] != '') {
                if ($params['id'][$i] != null) {
                    $cv = [
                        'tencvchitiet' => $params['tencvchitiet'][$i],
                        'trangthai' => 0
                    ];

                    congviecchitiet::where('id', $params['id'][$i])->update($cv);
                } else {
                    $cv = [
                        'tencvchitiet' => $params['tencvchitiet'][$i],
                        'id_cong_viec_chinh' => $params['id_cong_viec_chinh'],
                        'trangthai' => 0
                    ];

                    congviecchitiet::create($cv);
                }
            }
       }

        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function getSearchAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('psccongviecchitiet')
            ->where('id_cong_viec_chinh', '=', "{$query}")
            ->get();
            $output = "";
            foreach($data as $key => $row)
            {
               $output .= "<input type='hidden' class='id' name='id[]' value='".$row->id."'><input class='form-control' name='tencvchitiet[]' type='text' value='".$row->tencvchitiet."'></br>
               ";
           }
           
           echo $output;
       }
    }

    function createMulti(Request $request)
    {
        $params = $request->all();
        
        for ($i = 0; $i < count($params['ten_cv_chinh']); $i ++) {
            if ($params['id'][$i] != '') {
                $cv = [
                    'ten_cv_chinh' => $params['ten_cv_chinh'][$i],
                    'trang_thai' => '1',
                    'trong_so_duyet' => $params['trong_so_duyet'][$i],
                    'don_vi_duyet' => $params['don_vi_duyet'][$i],
                    'thoi_gian_hoan_thanh_duyet' => $params['thoi_gian_hoan_thanh_duyet'][$i],
                ];

                congviecchinh::where('id', $params['id'][$i])->update($cv);
            } else {
                $cv = [
                    'ten_cv_chinh' => $params['ten_cv_chinh'][$i],
                    'trang_thai' => '1',
                    'trong_so_duyet' => $params['trong_so_duyet'][$i],
                    'don_vi_duyet' => $params['don_vi_duyet'][$i],
                    'thoi_gian_hoan_thanh_duyet' => $params['thoi_gian_hoan_thanh_duyet'][$i],
                ];

                congviecchinh::create($cv);
            }
        }

        return 1;
    }
}
