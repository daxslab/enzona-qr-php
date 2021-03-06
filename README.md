# enzona-qr-php

***This is a work in progress, there are rough corners and the 
API can change witouth previuos warnings. 
Not recommended for production usage.***

PHP Client library for interacting with [EnZona's QR API](https://api.enzona.net). 

This client was generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project.

- API version: v1.0.0
- Package version: 1.0.0

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/daxslab/enzona-qr-php.git"
    }
  ],
  "require": {
    "daxslab/enzona-qr": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/enzona-qr-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = daxslab\enzona\qr\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new daxslab\enzona\qr\Api\ObtieneLaInformacinDeUnQRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$qr_code = "qr_code_example"; // string | Código del QR a buscar

try {
    $result = $apiInstance->qrQrCodeGet($qr_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObtieneLaInformacinDeUnQRApi->qrQrCodeGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://apisandbox.enzona.net/qr/v1.0.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ObtieneLaInformacinDeUnQRApi* | [**qrQrCodeGet**](docs/Api/ObtieneLaInformacinDeUnQRApi.md#qrqrcodeget) | **GET** /qr/{qr_code} | 
*PermiteCrearUnQRDePagoAUnComercioApi* | [**qrMerchantPost**](docs/Api/PermiteCrearUnQRDePagoAUnComercioApi.md#qrmerchantpost) | **POST** /qr/merchant | 
*PermiteCrearUnQRParaHacerUnPagoEntrePersonas_Api* | [**qrAccountPost**](docs/Api/PermiteCrearUnQRParaHacerUnPagoEntrePersonas_Api.md#qraccountpost) | **POST** /qr/account | 


## Documentation For Models

 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [Payload](docs/Model/Payload.md)
 - [Payload1](docs/Model/Payload1.md)


## Documentation For Authorization


## default

- **Type**: OAuth
- **Flow**: implicit
- **Authorization URL**: https://apisandbox.enzona.net/authorize
- **Scopes**: 
 - **enzona_business_qr**: enzona_business_qr






