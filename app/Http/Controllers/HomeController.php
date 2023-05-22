<?php

namespace App\Http\Controllers;

use App\Models\cdepartment;
use App\Models\publicad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function fresh()
    {
        return view('Frontend.pages.fresh');
    }
    public function maps()
    {
        $cdepartment= cdepartment::all();
        $allpublicad = publicad::all();
        $east= publicad::where('cdid' , '=' , 1)->get();
        //$west= publicad::where('cdid' , '=' , 2)->get();
       // $sini= publicad::where('cdid' , '=' , 3)->get();
       // $middle= publicad::where('cdid' , '=' , 4)->get();

       // $publicad = DB::table('publicad')->join('cdepartment' ,'cdepartment.id' ,'=' ,'publicad.cdid')
//->select('publicad.*' )
//->first();
//view('Frontend.pages.Maps' ,compact('cdepartment','publicad' ,'east','west','sini','middle'));

       // $relatedpublicad =publicad::where('cdid' , '=' , $publicad->cdid)->get();
        return view('Frontend.pages.Maps' ,compact('cdepartment','allpublicad' ,'east'));
    }
}
