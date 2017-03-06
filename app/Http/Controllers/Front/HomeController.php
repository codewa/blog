<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use FrontRepository;
class HomeController extends Controller
{
    public function index()
    {
    	$articles = FrontRepository::getArticles();
    	$cate = FrontRepository::getAllCategory();
		$returnData['articles'] = $articles;
		$returnData['cate']     = $cate;

//		return view('front.home.index')->with(compact(['articles','cate']));
		return response()->view('front.home.index',$returnData)->header("content-type:text/html; charset=utf-8");
    }
}
