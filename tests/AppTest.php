<?php

use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class AppTest extends Orchestra\Testbench\TestCase
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);

        $app['config']->set('minify.config.ignore_environments', ['local', 'testing']);
        $app->make('Illuminate\Contracts\Http\Kernel')->pushMiddleware('Illuminate\Session\Middleware\StartSession');
    }

    /**
     * getPackageProviders
     *
     * @param  App $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \Yab\Quarx\QuarxProvider::class,
            \Collective\Html\HtmlServiceProvider::class,
            \Collective\Html\HtmlServiceProvider::class,
            \Yab\Laracogs\LaracogsProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Form' => \Collective\Html\FormFacade::class,
            'HTML' => \Collective\Html\HtmlFacade::class,
            'FormMaker' => \Yab\Laracogs\Facades\FormMaker::class,
            'InputMaker' => \Yab\Laracogs\Facades\InputMaker::class,
            'Crypto' => \Yab\Laracogs\Utilities\Crypto::class,
        ];
    }

    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();
        $this->withFactories(__DIR__.'/../src/Models/Factories');
        $this->artisan('migrate', [
            '--database' => 'testbench',
            '--realpath' => realpath(__DIR__.'/../src/Migrations'),
        ]);
        $this->artisan('vendor:publish', [
            '--provider' => 'Yab\Quarx\QuarxProvider',
        ]);
        $this->withoutMiddleware();
        $this->withoutEvents();
    }

    /*
    |--------------------------------------------------------------------------
    | Landing
    |--------------------------------------------------------------------------
    */

    public function testIndex()
    {
        $this->withoutMiddleware();
        $response = $this->call('GET', '/quarx/dashboard');
        $this->assertEquals(200, $response->getStatusCode());
    }
}
