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
		$offset = 86400; //1天
		$expire = gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
		$returnData['articles'] = $articles;
		$returnData['cate']     = $cate;
		return response()->view('font.home.index',$returnData)->header('Cache-Control', 'public')
				->header('Content-Type', 'text/html; charset=utf-8')
				->header('Expires',$expire);
    }
}
