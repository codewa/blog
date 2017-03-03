<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use FrontRepository;
use Illuminate\Http\Response;
class HomeController extends Controller
{
    public function index()
    {
    	$articles = FrontRepository::getArticles();
    	$cate = FrontRepository::getAllCategory();
		$offset = 86400; //1天
		$expire = gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
		return response()->view('haopinjia.www.index');

    }
}
