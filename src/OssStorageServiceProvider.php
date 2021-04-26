<?php
namespace Byrnes2014\LaravelFilesystem\Oss;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use OSS\OssClient;
use Byrnes2014\Flysystem\Oss\OssAdapter;

class OssStorageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Storage::extend('oss',function ($app,$config) {
            $accessId  = $config['access_id'];
            $accessKey = $config['access_key'];
            $bucket    = $config['bucket'];
            $endpoint   = $config['endpoint'];
            $isCname   = $config['isCname'];

            $client = new OssClient($accessId, $accessKey, $endpoint, $isCname);
            $adapter = new OssAdapter($client,$bucket);

            return new Filesystem($adapter);
        });
    }
}
