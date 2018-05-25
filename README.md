# CCP API Client
Cloud Commerce Pro API Client for Laravel 

This package is in its very early stages but will be added to frequently, feel free to get in touch to make suggestions and all pull requests are welcome.

### Getting Started

Install with composer 

```
composer require aaronkaa/ccpclient
```

Publish the config with :

```
php artisan vendor:publish
```

Add your 'brand_id' and 'hash' to config/ccpapi.php file and that should be everything set.

### Usage

At the minute, each seperate service has its own object :

```php
use AKaa\CCPClient\Client\ProductClient;
use AKaa\CCPClient\Client\ProductRangeClient;
use AKaa\CCPClient\Client\ProductOptionClient;
use AKaa\CCPClient\Client\OrderClient;
use AKaa\CCPClient\Client\PaymentClient;
use AKaa\CCPClient\Client\CustomerClient;
```

To use the API, get an instance of the service youd like to use 

```php
$productClient = new ProductClient();

$result = $productClient->getProductByID(12345);
```

The current return from this would be the standard response from CCP with a top level result object (ie. 'getProductByManufacturerSKUResult' from getProductByManufacturerSKU) and 'Success', 'ErrorLevel', 'Content' and 'Errors' below this.