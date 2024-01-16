<?php
// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

/*
 *  ABOUT THIS PHP SAMPLE: This sample is part of the SDK for PHP Developer Guide topic at
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/cw-examples-sending-events.html
 *
 *
 *
 */
// snippet-start:[cloudwatchevents.php.put_rule.complete]
// snippet-start:[cloudwatchevents.php.put_rule.import]

require 'vendor/autoload.php';

use Aws\CloudWatchEvents\CloudWatchEventsClient; 
use Aws\Exception\AwsException;
// snippet-end:[cloudwatchevents.php.put_rule.import]

/**
 * Put Rule
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */
 
// snippet-start:[cloudwatchevents.php.put_rule.main]
$client = new Aws\cloudwatchevents\cloudwatcheventsClient([
    'profile' => 'default',
    'region' => 'us-west-2',
    'version' => '2015-10-07'
]);

try {
    $result = $client->putRule(array(
        'Name' => 'DEMO_EVENT', // REQUIRED
        'RoleArn' => 'IAM_ROLE_ARN',
        'ScheduleExpression' => 'rate(5 minutes)',
        'State' => 'ENABLED',
    ));
    var_dump($result);
} catch (AwsException $e) {
    // output error message if fails
    error_log($e->getMessage());
}
 
 
// snippet-end:[cloudwatchevents.php.put_rule.main]
// snippet-end:[cloudwatchevents.php.put_rule.complete]

