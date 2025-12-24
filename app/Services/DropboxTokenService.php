<?php

namespace App\Services;

use GuzzleHttp\Client as HttpClient;
use Illuminate\Support\Facades\Cache;

class DropboxTokenService
{
    public function getAccessToken(): string
    {
        return Cache::remember('dropbox_access_token', 3300, function () {
            return $this->refresh();
        });
    }

    protected function refresh(): string
    {
        $http = new HttpClient();

        $response = $http->post('https://api.dropboxapi.com/oauth2/token', [
            'form_params' => [
                'grant_type'    => 'refresh_token',
                'refresh_token' => config('filesystems.disks.dropbox.refresh_token'),
                'client_id'     => config('filesystems.disks.dropbox.app_key'),
                'client_secret' => config('filesystems.disks.dropbox.app_secret'),
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        return $data['access_token'];
    }
}
