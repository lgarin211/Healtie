<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');



$apiInstance = new Swagger\Client\Api\BarcodeScanApi(
    
    
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/inputfile"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->barcodeScanImage($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeScanApi->barcodeScanImage: ', $e->getMessage(), PHP_EOL;
}
?>