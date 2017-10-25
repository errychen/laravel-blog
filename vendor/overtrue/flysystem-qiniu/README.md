<h1 align="center">Flysystem Qiniu</h1>

<p align="center">:floppy_disk: Flysystem adapter for the Qiniu storage.</p>

<p align="center">
<a href="https://travis-ci.org/overtrue/flysystem-qiniu"><img src="https://travis-ci.org/overtrue/flysystem-qiniu.svg?branch=master" alt="Build Status"></a>
<a href="https://packagist.org/packages/overtrue/flysystem-qiniu"><img src="https://poser.pugx.org/overtrue/flysystem-qiniu/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/overtrue/flysystem-qiniu"><img src="https://poser.pugx.org/overtrue/flysystem-qiniu/v/unstable.svg" alt="Latest Unstable Version"></a>
<a href="https://scrutinizer-ci.com/g/overtrue/flysystem-qiniu/?branch=master"><img src="https://scrutinizer-ci.com/g/overtrue/flysystem-qiniu/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
<a href="https://scrutinizer-ci.com/g/overtrue/flysystem-qiniu/?branch=master"><img src="https://scrutinizer-ci.com/g/overtrue/flysystem-qiniu/badges/coverage.png?b=master" alt="Code Coverage"></a>
<a href="https://packagist.org/packages/overtrue/flysystem-qiniu"><img src="https://poser.pugx.org/overtrue/flysystem-qiniu/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/overtrue/flysystem-qiniu"><img src="https://poser.pugx.org/overtrue/flysystem-qiniu/license" alt="License"></a>
</p>


# Requirement

- PHP >= 5.5.9

# Installation

```shell
$ composer require "overtrue/flysystem-qiniu" -vvv
```

# Usage

```php
use League\Flysystem\Filesystem;
use Overtrue\Flysystem\Qiniu\QiniuAdapter;

$accessKey = 'xxxxxx';
$secretKey = 'xxxxxx';
$domain = 'xxxx.bkt.clouddn.com';
$bucket = 'test-bucket-name';
$adapter = new QiniuAdapter($ak, $sk, $bucket, $domain);

$flysystem = new League\Flysystem\Filesystem($adapter);

```

## API

```php
bool $flysystem->write('file.md', 'contents'));

bool $flysystem->update('file.md', 'new contents'));

bool $flysystem->rename('foo.md', 'bar.md'));

bool $flysystem->copy('foo.md', 'foo2.md'));

bool $flysystem->delete('file.md'));

bool $flysystem->has('file.md'));

string|false $flysystem->read('file.md'));

array $flysystem->listContents());

array $flysystem->getMetadata('file.md'));

int $flysystem->getSize('file.md'));

string $flysystem->getMimetype('file.md'));

$flysystem->getTimestamp('file.md'));

```

# For Laravel

[overtrue/laravel-qiniu](https://github.com/overtrue/laravel-qiniu)

# License

MIT
