# daxslab\enzona\qr\PermiteCrearUnQRDePagoAUnComercioApi

All URIs are relative to *https://apisandbox.enzona.net/qr/v1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**qrMerchantPost**](PermiteCrearUnQRDePagoAUnComercioApi.md#qrMerchantPost) | **POST** /qr/merchant | 


# **qrMerchantPost**
> \daxslab\enzona\qr\model\InlineResponse2002 qrMerchantPost($payload)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = daxslab\enzona\qr\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new daxslab\enzona\qr\Api\PermiteCrearUnQRDePagoAUnComercioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \daxslab\enzona\qr\model\Payload1(); // \daxslab\enzona\qr\model\Payload1 | Parámetros de entrada

try {
    $result = $apiInstance->qrMerchantPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermiteCrearUnQRDePagoAUnComercioApi->qrMerchantPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\daxslab\enzona\qr\model\Payload1**](../Model/Payload1.md)| Parámetros de entrada | [optional]

### Return type

[**\daxslab\enzona\qr\model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

