<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report_revenue_detail;

class reportRevenueDetailController extends Controller
{
    public function index(Request $request){
        $arrayInput = $request->all();

        $model = new Report_revenue_detail();

        $results = $model->Search($arrayInput);

        $return = [
            'status' => '1',
            'code' => '200',
            'data' => $results
        ];

        return response()->json($return);

    }

    public function create(Request $request)
    {
        $request->validate([
            'report_id'=>'required|integer',
            'customers'=>'required|integer',
        ]);

        $arrayInput = $request->all();

        $model = new Report_revenue_detail();

        $results = $model->createv2($arrayInput);

        $return = [
            'status' => '1',
            'code' => '200',
            'data' => $results
        ];

        return response()->json($return);

    }

    public function detail(Request $request, $id)
    {
        $model = new Report_revenue_detail();

        $Report_revenue_detail =  $model->detail( $id);

        $return = [
            'status' => '1',
            'code' => '200',
            'data' => $Report_revenue_detail
        ];
        return response()->json($return);
    }

    public function delete(Request $request, $id)
    {
        
        $model = new Report_revenue_detail();

        $Report_revenue_detail =  $model->deletev2( $id);

        $return = [
            'status' => '1',
            'code' => '200',
            'message' => 'deleted'
        ];
        return response()->json($return);
    }

    public function update(Request $request, $id)
    {

        $arrayInput = $request->all();

        $model = new Report_revenue_detail();

        $Report_revenue_detail =$model->updatev2($arrayInput, $id);
        
        $return = [
            'status' => '1',
            'code' => '200',
            'data' => $Report_revenue_detail
        ];
        
        return response()->json($return);
    }
}
