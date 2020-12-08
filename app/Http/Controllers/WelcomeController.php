<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class WelcomeController extends Controller
{
    use SEOToolsTrait;

    public function index()
    {
        $this->seo()->setTitle('亨利的世界', false);
        $this->seo()->metatags()->addMeta('title', '');
        $this->seo()->metatags()->addMeta('author', '李亨利');
        $this->seo()->setDescription('李亨利 - 分享程式設計開發、體育、動漫及遊戲各類最新大小事，有興趣的事物皆會追蹤，讓自己有前進的力量。');
        $this->seo()->opengraph()->setUrl('https://henrywar.blogspot.com/');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->twitter()->setSite('亨利的世界');
        $this->seo()->jsonLd()->setType('Article');
        return view('welcome');
    }
}
