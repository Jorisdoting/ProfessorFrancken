<?php

namespace Francken\Association\News;

use Faker\Generator;
use Francken\Association\News\Cache\Repository as CachedNewsRepository;
use Francken\Association\News\Eloquent\Repository as EloquentNewsRepository;
use Francken\Association\News\Fake\FakeNews;
use Francken\Association\News\InMemory\Repository as InMemoryNewsRepository;
use Francken\Association\News\Repository;
use Francken\Association\News\Xml\WordpressNewsIterator;
use Illuminate\Cache\Repository as CacheRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;

final class ServiceProvider extends RouteServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Francken\Association\News\Http';

    public function register()
    {
        if (config('francken.news.type') == 'fake') {
            $this->app->bind(Repository::class, function ($app) {
                $faker = $app->make(Generator::class);
                $faker->seed(31415);
                $fakeNews = new FakeNews($faker, 100);
                return new InMemoryNewsRepository($fakeNews->all());
            });
        } elseif (config('francken.news.type') == 'eloquent') {
            $this->app->bind(Repository::class, function ($app) {
                return $app->make(EloquentNewsRepository::class);
            });

            $this->app->when(\Francken\Association\News\Http\AdminNewsController::class)
                ->needs(Repository::class)
                ->give(function () {
                    // Show unpublished news
                    return new EloquentNewsRepository(true);

                });
        } else {
            $this->app->bind(Repository::class, function ($app) {
                $filename = config('francken.news.xml');
                $authors = config('francken.news.authors');
                $boards = $this->app->make(\Francken\Domain\Boards\BoardRepository::class);

                return new CachedNewsRepository(
                    new InMemoryNewsRepository(
                        iterator_to_array(
                            new WordpressNewsIterator(
                                $filename,
                                $authors,
                                $boards
                            )
                        )
                    ),
                    $app->make(CacheRepository::class)
                );
            });
        }
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace, 'middleware' => ['web']], function ($router) {
            $router->get('association/news', "NewsController@index");
            $router->get('association/news/archive', "NewsController@archive");
            $router->get('association/news/{item}', "NewsController@show");

            $router->group(['middleware' => ['auth']], function () use ($router) {
                $router->put('admin/association/news/publish/{item}', 'AdminNewsController@publish');
                $router->put('admin/association/news/archive/{item}', 'AdminNewsController@archive');
                $router->get('admin/association/news/{item}/preview', 'AdminNewsController@preview');
                $router->resource('admin/association/news', 'AdminNewsController');
            });
        });
    }
}
