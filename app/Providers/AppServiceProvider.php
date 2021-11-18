<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use League\CommonMark\GithubFlavoredMarkdownConverter;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Str::macro('markdown', function ($content) {
            $converter = new GithubFlavoredMarkdownConverter([
                'html_input' => 'strip',
                'allow_unsafe_links' => false,
            ]);

            return $converter->convertToHtml($content);
        });
    }
}
