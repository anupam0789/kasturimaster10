<?php  
namespace App\Helpers;

class CommonHelper
{
    public static function dateFormat($date='', $format = 'd M Y')
    { 
        if(empty($date))
            $date = date($format); 
            $tmp_date = strtotime($date);
            return date($format, $tmp_date);
    }

    public function selectSearch(Request $request)
    {
        dd(1);
    	$movies = [];
        if($request->has('q')){
            $search = $request->q;
            $movies =Movie::select("id", "name")
            		->where('name', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($movies);
    }
}
 
 