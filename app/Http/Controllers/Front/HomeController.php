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
		header("content-type:text/html; charset=utf-8");
		$offset = 86400 * 3;
		$expire = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
		header($expire);
	  	return view('front.home.index')->with(compact(['articles','cate']));

    }
}
