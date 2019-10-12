# daxslab\enzona\qr\PermiteCrearUnQRParaHacerUnPagoEntrePersonas_Api

All URIs are relative to *https://apisandbox.enzona.net/qr/v1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**qrAccountPost**](PermiteCrearUnQRParaHacerUnPagoEntrePersonas_Api.md#qrAccountPost) | **POST** /qr/account | 


# **qrAccountPost**
> \daxslab\enzona\qr\model\InlineResponse200 qrAccountPost($payload)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = daxslab\enzona\qr\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new daxslab\enzona\qr\Api\PermiteCrearUnQRParaHacerUnPagoEntrePersonas_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \daxslab\enzona\qr\model\Payload(); // \daxslab\enzona\qr\model\Payload | Parámetros de entrada

try {
    $result = $apiInstance->qrAccountPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermiteCrearUnQRParaHacerUnPagoEntrePersonas_Api->qrAccountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\daxslab\enzona\qr\model\Payload**](../Model/Payload.md)| Parámetros de entrada | [optional]

### Return type

[**\daxslab\enzona\qr\model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

