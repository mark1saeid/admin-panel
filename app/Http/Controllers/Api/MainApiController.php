<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Host;
use App\Models\IptvUser;

use Illuminate\Http\Request;
use \Validator;


class MainApiController extends Controller
{
    public function index(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'username' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                "message" => "missing username",
            ], 404);
        }


        return response()->json([
            'success'=>true,
            'user'=>IptvUser::where('username',$request->username)->first()==null?false:true,
           'hosts'=>Host::select('link')->pluck('link'),
           // 'hosts'=>$this->special(),
            'info'=>Contact::all()->first()
        ]);
    }


    public function special(){
        $agents = Host::all();
        $array = array();
        $i = 0;
        foreach ($agents as $host){
            $array["host$i"]=$host->link;
            $i++;
        }

       return $array;

    }



}
