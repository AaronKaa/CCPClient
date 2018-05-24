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

```
use AKaa\CCPCLient\Client\ProductClient;
use AKaa\CCPCLient\Client\ProductRangeClient;
use AKaa\CCPCLient\Client\ProductOptionClient;
use AKaa\CCPCLient\Client\OrderClient;
use AKaa\CCPCLient\Client\PaymentClient;
use AKaa\CCPCLient\Client\CustomerClient;
```

To use the API, get an instance of the service youd like to use 

```
$productClient = new ProductClient();

$result = $productClient->getProductByID(12345);
```

The current return from this would be the standard response from CCP with a top level result object (ie. 'getProductByManufacturerSKUResult' from getProductByManufacturerSKU) and 'Success', 'ErrorLevel', 'Content' and 'Errors' below this.