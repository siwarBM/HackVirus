<?php namespace October\Rain\Foundation\Bootstrap;

use Illuminate\Contracts\Foundation\Application;
use October\Rain\Filesystem\Filesystem;
use October\Rain\Support\ClassLoader;

class RegisterClassLoader
{
    /**
     * Register The October Auto Loader
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function bootstrap(Application $app)
    {
        $loader = new ClassLoader(
            new Filesystem,
            $app->basePath(),
            $app->getCachedClassesPath()
        );

        $app->instance(ClassLoader::class, $loader);

        $loader->register();

        $loader->addDirectories([
            'modules',
            'plugins'
        ]);

        $app->after(function () use ($loader) {
            $loader->build();
        });
    }
}
