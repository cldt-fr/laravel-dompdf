<?php

namespace Barryvdh\DomPDF\Tests;

use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\ServiceProvider;
use Illuminate\Support\Facades\View;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    public static $latestResponse = null;

    protected function setUp() : void
    {
        parent::setUp();

        View::addLocation(__DIR__.'/views');
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return string[]
     */
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return string[]
     */
    protected function getPackageAliases($app)
    {
        return [
            'PDF' => Pdf::class,
            'Pdf' => Pdf::class,
        ];
    }
}
