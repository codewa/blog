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
		dd($articles);
    	return view('front.home.index')->with(compact(['articles','cate']));

    }
}
