<?php
// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

/*
 *  ABOUT THIS PHP SAMPLE: This sample is part of the KMS Developer Guide topic at
 *  https://docs.aws.amazon.com/kms/latest/developerguide/programming-keys.html
 *
 *
 *
 */
// snippet-start:[kms.php.decrypt.complete]
// snippet-start:[kms.php.decrypt.import]

require 'vendor/autoload.php';

use Aws\Kms\KmsClient; 
use Aws\Exception\AwsException;
// snippet-end:[kms.php.decrypt.import]

/**
 * Creating an Amazon KMS client.
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */

// Create a KmsClient 
// snippet-start:[kms.php.decrypt.main]
$KmsClient = new Aws\Kms\KmsClient([
    'profile' => 'default',
    'version' => '2014-11-01',
    'region' => 'us-east-2'
]);

$ciphertext = 'Place your cipher text blob here';

try {
    $result = $KmsClient->decrypt([
        'CiphertextBlob' => $ciphertext,
    ]);
    $plaintext = $result['Plaintext'];
    var_dump($plaintext);
} catch (AwsException $e) {
    // Output error message if fails
    echo $e->getMessage();
    echo "\n";
}
 
 
// snippet-end:[kms.php.decrypt.main]
// snippet-end:[kms.php.decrypt.complete]

