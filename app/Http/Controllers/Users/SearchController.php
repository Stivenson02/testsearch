<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stakeholder;
use App\Traits\PurgeSpring;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    use PurgeSpring;


    public function showme (Request $request){

        $data=$request->all();

        $word= $this->clear_string($data['name']);
        $word= $this->find_space($word);
        $word= $this->fonemas($word);

        $names=Stakeholder::select('id','name',
        DB::raw('ROUND((100 *'.strlen($word).')/LENGTH(name)) AS probability'))
        ->where('name','regexp',$word)
        ->orderBy('probability','desc')
        ->get();
        
    
        return $names;
        
    }

}
