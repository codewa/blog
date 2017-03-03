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

    	return view('front.home.index')->with(compact(['articles','cate']));

    }
}
