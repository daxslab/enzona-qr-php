# daxslab\enzona\qr\ObtieneLaInformacinDeUnQRApi

All URIs are relative to *https://apisandbox.enzona.net/qr/v1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**qrQrCodeGet**](ObtieneLaInformacinDeUnQRApi.md#qrQrCodeGet) | **GET** /qr/{qr_code} | 


# **qrQrCodeGet**
> \daxslab\enzona\qr\model\InlineResponse2001 qrQrCodeGet($qr_code)



### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qr_code** | **string**| Código del QR a buscar |

### Return type

[**\daxslab\enzona\qr\model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

