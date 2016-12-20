@extends('layouts.index')
@section('title')
<title>{{$article->title}} - 小海君博客</title>
@endsection
@section('css')
<link href="{{asset('front/plugins/highlight/styles/monokai-sublime.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('promo')
<section class="breadcrumbs-v5 bg-position-fixed breadcrumbs-v5-bg-img-v4">
    <div class="container">
        <h2 class="breadcrumbs-v5-title">I am 小海君</h2>
    </div>
</section>
<section class="breadcrumbs-v1">
    <div class="container">
        <h2 class="breadcrumbs-v1-title">Article</h2>
        <ol class="breadcrumbs-v1-links">
            <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="{{url('cate/'.$article->category_id)}}"><i class="fa fa-navicon"></i> {{$category}}</a></li>
            <li class="active">{{$article->title}}</li>
        </ol>
    </div>
</section>
@endsection
@section('content')
<article class="blog-grid margin-b-30">
    <!-- Blog Grid Content -->
    <div class="blog-grid-content">
        <h2 class="blog-grid-title-lg">{{$article->title}}</h2>

        @if($article->img)
        <img class="img-responsive margin-b-20" src="{{$article->img}}" alt="">
        @endif
        {!!$article->content_html!!}
        
    </div>
    <!-- End Blog Grid Content -->
    <div class="divider-v1"><div class="divider-v1-element"><i class="divider-v1-icon fa fa-skyatlas"></i></div></div>

    <!-- Blog Comment -->
    <div class="bg-color-white margin-b-30">
        <div class="blog-single-post-content">
            <div class="heading-v1 text-center margin-b-50">
                <h2 class="heading-v1-title">Leave a comment</h2>
            </div>
            <div id="SOHUCS" sid="{{$article->id}}" ></div>
            <div id="cyQing" role="cylabs" data-use="qing"></div>
            <script type="text/javascript">
                (function(){
                    var appid = 'cysKVceXe';
                    var conf = 'prod_eb8d5ea26d786d662430676c16737435';
                    var width = window.innerWidth || document.documentElement.clientWidth;
                    if (width < 960) {
                        window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("http://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })();
            </script>
        </div>
    </div>
</article>
@endsection
@section('rightSide')
<div class="blog-sidebar margin-b-30">
    <div class="blog-sidebar-content scrollbar">
        <h3 class="portfolio-item-subitem-title">Published</h3>
        <p class="portfolio-item-subitem-paragraph">{{$article->created_at}}</p>
        <hr>
        <h3 class="portfolio-item-subitem-title">Categories</h3>
        <a class="portfolio-item-category" href="{{url('cate/'.$article->id)}}">{{$category}}</a>
        <hr>
        <h3 class="portfolio-item-subitem-title">Tags</h3>
        <ul class="list-unstyled tags-v2 margin-b-20">
            @if($article->tag)
            @foreach($article->tag as $v)
            <li><a href="{{url('tag/'.$v->id)}}">{{$v->name}}</a></li>
            @endforeach
            @endif
        </ul>
        <hr>
        <h3 class="portfolio-item-subitem-title">Share</h3>
        <ul class="list-inline">
            <li class="theme-icons-wrap"><a href="#"><i class="theme-icons theme-icons-base-hover theme-icons-xs radius-circle fa fa-facebook"></i></a></li>
            <li class="theme-icons-wrap"><a href="#"><i class="theme-icons theme-icons-base-hover theme-icons-xs radius-circle fa fa-twitter"></i></a></li>
            <li class="theme-icons-wrap"><a href="#"><i class="theme-icons theme-icons-base-hover theme-icons-xs radius-circle fa fa-pinterest-p"></i></a></li>
            <li class="theme-icons-wrap"><a href="#"><i class="theme-icons theme-icons-base-hover theme-icons-xs radius-circle fa fa-dribbble"></i></a></li>
            <li class="theme-icons-wrap"><a href="#"><i class="theme-icons theme-icons-base-hover theme-icons-xs radius-circle fa fa-instagram"></i></a></li>
        </ul>
    </div>
</div>
@parent
@endsection
@section('js')
<script type="text/javascript" src="{{asset('front/plugins/highlight/highlight.pack.js')}}"></script>
<script>
    hljs.initHighlighting();
</script>
@endsection