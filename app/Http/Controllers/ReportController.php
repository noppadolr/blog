<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




     public function Dashboard(){


        DB::statement(DB::raw('SET @ty :=(SELECT concat(yearprocess-2,1001) FROM pk_byear LIMIT 1);'));
        DB::statement(DB::raw('SET @bdate :=(SELECT concat(yearprocess-1,1001) FROM pk_byear LIMIT 1);'));

/*
       $sqlbdate = "SELECT concat(yearprocess-1,'1001') FROM pk_byear LIMIT 1";
       $Bdate = DB::select($sqlbdate);
  */

       $sql="
       SELECT COUNT(*) as c
       FROM
       (
SELECT pr.HOSPCODE,pr.PID,pr.GRAVIDA,pr.LMP,pr.EDC,pr.VDRL_RESULT,pr.HB_RESULT,pr.HIV_RESULT
,pr.DATE_HCT,pr.THALASSEMIA,p.PRENAME,p.`NAME`,p.LNAME,p.BIRTH,p.NATION,p.TYPEAREA,p.DISCHARGE,p.SEX
from prenatal as pr
LEFT JOIN anc as a on pr.HOSPCODE=a.HOSPCODE and pr.PID=a.PID AND pr.GRAVIDA=a.GRAVIDA
LEFT JOIN person as p on pr.HOSPCODE=p.HOSPCODE AND pr.PID=p.PID
WHERE pr.LMP>= @ty
AND a.DATE_SERV>=@bdate
and p.TYPEAREA in (1,3)
#AND p.NATION=099
GROUP BY concat(pr.HOSPCODE,pr.PID,pr.GRAVIDA))as x";
       $data=DB::select($sql);
$sqlPersonCount = "SELECT  COUNT(*) as pc from person";
$personCount=DB::select($sqlPersonCount);
//dd($personCount);
       //dd($tyear);
     //dd($data);

       return view('pages.dashboard',['newcase'=>$data],['pc'=>$personCount]);
     }


     public function Test()
     {
         //$a = DB::Table('provider')->get();
         //$a = DB::Table('provider')->first();
        // $sql ="select count(*) from provider ";
        $sql ="select * from provider ";
         $a = DB::select($sql);
            dd($a);
             }
    public function index()
    {
        return View('report.index');
    }


public function View()
{ return "Hello Form View ReportController";
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
        //
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
}
