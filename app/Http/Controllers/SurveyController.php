<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    public function getLocationData(){
      return DB::table('locations')->get();
    }

    public function uploadSurvey(Request $request){
      $insert =
      DB::table('survey_reports')->insert([
        'user_id' => $request->user_id,
        'location_id' => $request->location_id,
        'qualified' => $request->qualified,
        'verified' => $request->verified,
        'information' => $request->information,
        'image' => 'dummy'
      ]);
      if($insert) return "success";
      else return "failed";
    }
}
