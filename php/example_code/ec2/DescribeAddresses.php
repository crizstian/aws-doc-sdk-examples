<?php
// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

// snippet-start:[ec2.php.describe_addresses.complete]
// snippet-start:[ec2.php.describe_addresses.import]

require 'vendor/autoload.php';

use Aws\Ec2\Ec2Client;
// snippet-end:[ec2.php.describe_addresses.import]
/**
 * Describe Addresses
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */
 
// snippet-start:[ec2.php.describe_addresses.main]
$ec2Client = new Aws\Ec2\Ec2Client([
    'region' => 'us-west-2',
    'version' => '2016-11-15',
    'profile' => 'default'
]);

$result = $ec2Client->describeAddresses();

var_dump($result);
 
 
// snippet-end:[ec2.php.describe_addresses.main]
// snippet-end:[ec2.php.describe_addresses.complete]

