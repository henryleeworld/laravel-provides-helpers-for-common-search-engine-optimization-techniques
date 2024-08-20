<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class WelcomeController extends Controller
{
    use SEOToolsTrait;

    public function index()
    {
        $this->seo()->setTitle(config('app.name'), false);
        $this->seo()->metatags()->addMeta('title', '');
        $this->seo()->metatags()->addMeta('author', __('Henry Lee'));
        $this->seo()->setDescription(__(':name - Share the latest events in programming development, sports, animation, and games. You will track everything you are interested in, so that you have the power to move forward.', ['name' => __('Henry Lee')]));
        $this->seo()->opengraph()->setUrl('https://henrywar.blogspot.com/');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->twitter()->setSite(config('app.name'));
        $this->seo()->jsonLd()->setType('Article');
        return view('welcome');
    }
}
