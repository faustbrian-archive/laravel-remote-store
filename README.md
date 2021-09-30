**You can help the author become a full-time open-source maintainer by [sponsoring him on GitHub](https://github.com/sponsors/faustbrian).**

---

# Remote Storage Adapters for @laravel

[![PHP](https://badgen.net/packagist/php/faustbrian/laravel-remote-store)](https://packagist.org/packages/faustbrian/laravel-remote-store)
[![Latest Version](https://badgen.net/packagist/v/faustbrian/laravel-remote-store)](https://packagist.org/packages/faustbrian/laravel-remote-store)

## Installation

```bash
composer require faustbrian/laravel-remote-store
```

## Usage

```php
<?php

use Faust\RemoteStore\StoreFactory;

// Create store instance for gist.github.com
$store = StoreFactory::make("gist");

// Create file
$file = new FileDataTransferObject([
    'name' => 'hello.txt',
    'data' => 'Hello World',
]);

// Store the file
$remoteHash = $store->create($file);

// Read the file
var_dump($store->read($remoteHash));

// Update the file
$store->update($file);

// Delete the file
$store->delete($file);
```

## Configuration

Depending on which store you wish to you use you will need to provide different configuration values.

### `.env`

```ini
IPFS_GATEWAY=http://127.0.0.1:8080
IPFS_API=http://127.0.0.1:5001/api/v0

PINATA_KEY=
PINATA_SECRET=

INFURA_USERNAME=
INFURA_PASSWORD=

GITHUB_TOKEN=
GITHUB_USER=
GITHUB_REPO=
```

### `config/services.php`

```php
<?php

declare(strict_types=1);

return [

    // Default contents here...

    'github' => [
        'token'      => env('GITHUB_TOKEN'),
        'username'   => env('GITHUB_USER'),
        'repository' => env('GITHUB_REPO'),
    ],

    'ipfs' => [
        'gateway' => env('IPFS_GATEWAY'),
        'api'     => env('IPFS_API'),
    ],

    'infura' => [
        'username' => env('INFURA_USERNAME'),
        'password' => env('INFURA_PASSWORD'),
    ],

    'pinata' => [
        'key'    => env('PINATA_KEY'),
        'secret' => env('PINATA_SECRET'),
    ],

];
```

## Testing

```bash
composer test
```

## License

This is an open-sourced software licensed under the [AGPL-3.0-or-later](LICENSE).
