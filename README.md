<h1 align="center"> laravel-filesystem-oss </h1>

<p align="center"> .</p>

## Installing

```shell
$ composer require byrnes2014/laravel-filesystem-oss -vvv
```

Then in your `config/app.php` add this line to providers array:

```php
Jacobcyl\AliOSS\AliOssServiceProvider::class,
```

## Contributing

```php

'disks'=>[
    ...
    'oss' => [
            'driver'        => 'oss',
            'access_id'     => '<Your Aliyun OSS AccessKeyId>',
            'access_key'    => '<Your Aliyun OSS AccessKeySecret>',
            'bucket'        => '<OSS bucket name>',
            'endpoint'      => '<the endpoint of OSS, E.g: oss-cn-hangzhou.aliyuncs.com | custom domain, E.g:img.abc.com>', 
            'isCName'       => <true|false> 
            'debug'         => <true|false>
    ],
    ...
]
```

## Usage

```php
use Illuminate\Support\Facades\Storage;
```  

> Then You can use all APIs of laravel Storage

```php
Storage::disk('oss'); // if default filesystems driver is oss, you can skip this step

Storage::put('path/to/file/file.jpg', $contents)
```

## License

MIT