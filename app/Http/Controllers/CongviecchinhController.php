<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\congviecchinh;

class CongviecchinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donvis = DB::table('donvi')->get();
        return view('congviecchinh/duyetcvchinh',  ['donvis' => $donvis]);
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
        
        for ($i = 0; $i < count($params['ten_cv_chinh']); $i ++) {
            $cv = [
                'ten_cv_chinh' => $params['ten_cv_chinh'][$i],
                'id_donvi' => '1',
                'trang_thai' => '0',
                'trong_so_dk' =>  $params['trong_so_dk'][$i],
                'don_vi_tinh'=>  $params['don_vi_tinh'][$i],
                'thoi_gian_hoan_thanh_dk'=>  $params['thoi_gian_hoan_thanh_dk'][$i],
                'ti_le_hoan_thanh_dk'=> '100%',
                'trong_so_duyet' => $params['trong_so_dk'][$i],
                'don_vi_duyet' => $params['don_vi_tinh'][$i],
                'thoi_gian_hoan_thanh_duyet' => $params['thoi_gian_hoan_thanh_dk'][$i],
                'ti_le_hoan_thanh_duyet' => $params['thoi_gian_hoan_thanh_dk'][$i],
            ];

            congviecchinh::create($cv);
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
            $data = DB::table('congviecchinh')
            ->where('id_donvi', '=', "{$query}")
            ->get();
            $output = "";
            foreach($data as $key => $row)
            {
               $output .= "<div id='field'".$key."><div class='form-group row'><div class='col-lg-6'><input class='form-control' name='ten_cv_chinh[]' type='text' value='".$row->ten_cv_chinh."'></div><div class='col-lg-2'><input class='form-control' name='don_vi_duyet[]' type='text' value='".$row->don_vi_duyet."'></div><div class='col-lg-1'><input class='form-control' name='trong_so_duyet[]' type='text' value='".$row->trong_so_dk."'></div><div class='col-lg-2'><div class='input-group date datetimepicker1' id='datetimepicker1'><input type='text' class='form-control' name='thoi_gian_hoan_thanh_duyet[]' value='".$row->thoi_gian_hoan_thanh_dk."'/><span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span></div></div><a class='btn btn-danger remove-me' href='#'>-</a><input type='hidden'  name='id[]' value='".$row->id."'></div></div>
               ";
           }
           
           echo $output;
       }
    }

    function updateMulti(Request $request)
    {
        $params = $request->all();
        
        for ($i = 0; $i < count($params['ten_cv_chinh']); $i ++) {
            if ($params['id'][$i] != '-1') {
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
