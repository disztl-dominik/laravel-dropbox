<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use Spatie\Dropbox\Client;
use Spatie\FlysystemDropbox\DropboxAdapter;
use Illuminate\Filesystem\FilesystemAdapter;
use App\Services\DropboxTokenService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /*Storage::extend('dropbox', function ($app, $config) {
            // $client = new Client($config['authorization_token']);
            $client = new Client([
                'app_key '     => $config['app_key'],
                'app_secret' => $config['app_secret'],
                'oauth2_refresh_token' => $config['refresh_token'],
            ]);
            $adapter = new DropboxAdapter($client);

            return new FilesystemAdapter(
                new Filesystem($adapter),
                $adapter,
                $config
            );
        });*/

        Storage::extend('dropbox', function ($app, $config) {

            /** @var DropboxTokenService $tokenService */
            $tokenService = $app->make(DropboxTokenService::class);

            // Always returns a valid (possibly refreshed) access token
            $accessToken = $tokenService->getAccessToken();

            $client = new Client($accessToken);

            $adapter = new DropboxAdapter($client);

            return new FilesystemAdapter(
                new Filesystem($adapter),
                $adapter,
                $config
            );
        });
    }
}
