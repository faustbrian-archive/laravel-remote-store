**You can help the author become a full-time open-source maintainer by [sponsoring him on GitHub](https://github.com/sponsors/faustbrian).**

---

# Remote Storage Adapters for @laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/faustbrian/laravel-remote-store.svg?style=flat-square)](https://packagist.org/packages/faustbrian/laravel-remote-store)

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

## Testing

```bash
composer test
```

## License

This is an open-sourced software licensed under the [AGPL-3.0-or-later](LICENSE).
