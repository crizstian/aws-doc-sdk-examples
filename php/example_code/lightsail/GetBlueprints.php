<?php
// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

/*
 * ABOUT THIS PHP SAMPLE => This sample is part of the SDK for PHP Developer Guide topic at
 *
 *
 */
// snippet-start:[lightsail.php.get_blueprints.complete]
// snippet-start:[lightsail.php.get_blueprints.import]
require 'vendor/autoload.php';

use Aws\Exception\AwsException;
use Aws\Lightsail\LightsailClient;

// snippet-end:[lightsail.php.get_blueprints.import]

/**
 * Get a list of available EC2 instance images or blueprints from Amazon Lightsail.
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */

//Create a Lightsail Client
// snippet-start:[lightsail.php.get_blueprints.main] 
$client = new Aws\Lightsail\LightsailClient([
    'profile' => 'default',
    'version' => '2016-11-28',
    'region' => 'us-east-2'
]);

try {
    $result = $client->getBlueprints([
        'includeInactive' => false,
    ]);
    foreach ($result['blueprints'] as $blueprint) {
        print("Blueprint - " . $blueprint['blueprintId'] . ": " . $blueprint['name'] . " version " . $blueprint['version'] . " for " . $blueprint['platform'] . "\n");
        print($blueprint['description'] . "\n\n");
    }
    var_dump($result);
} catch (AwsException $e) {
    // output error message if fails
    echo $e->getMessage() . "\n";
}
// snippet-end:[lightsail.php.get_blueprints.main]
// snippet-end:[lightsail.php.get_blueprints.complete] 
// snippet-sourceauthor:[jschwarzwalder (AWS)]