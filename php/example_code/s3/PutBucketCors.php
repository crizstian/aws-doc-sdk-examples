<?php
// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

/*
 * ABOUT THIS PHP SAMPLE: This sample is part of the SDK for PHP Developer Guide topic at
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/s3-examples-configuring-a-bucket.html
 *
 */
// snippet-start:[s3.php.put_bucket_cors.complete]
// snippet-start:[s3.php.put_bucket_cors.import]

require 'vendor/autoload.php';

use Aws\S3\S3Client;  
use Aws\Exception\AwsException;
// snippet-end:[s3.php.put_bucket_cors.import]


/**
 * Put bucket cors
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */

$bucketName = 'BUCKET_NAME';

// snippet-start:[s3.php.put_bucket_cors.main]
$client = new S3Client([
    'profile' => 'default',
    'region' => 'us-west-2',
    'version' => '2006-03-01'
]);

try {
    $result = $client->putBucketCors([
        'Bucket' => $bucketName, // REQUIRED
        'CORSConfiguration' => [ // REQUIRED
            'CORSRules' => [ // REQUIRED
                [
                    'AllowedHeaders' => ['Authorization'],
                    'AllowedMethods' => ['POST', 'GET', 'PUT'], // REQUIRED
                    'AllowedOrigins' => ['*'], // REQUIRED
                    'ExposeHeaders' => [],
                    'MaxAgeSeconds' => 3000
                ],
            ],
        ]
    ]);
    var_dump($result);
} catch (AwsException $e) {
    // output error message if fails
    error_log($e->getMessage());
}
 
 
// snippet-end:[s3.php.put_bucket_cors.main]
// snippet-end:[s3.php.put_bucket_cors.complete]
