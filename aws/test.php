<?php
// @see https://docs.aws.amazon.com/ja_jp/sdk-for-php/v3/developer-guide/sqs-examples-send-receive-messages.html
// @see https://docs.aws.amazon.com/aws-sdk-php/v3/api/api-sqs-2012-11-05.html
require 'vendor/autoload.php';

use Aws\Sqs\SqsClient;
use Aws\Exception\AwsException;

$queueUrl = "https://sqs.ap-northeast-1.amazonaws.com/751612800344/test";

$client = new SqsClient([
    'profile' => 'your.profile',
    'region' => 'ap-northeast-1',
    'version' => 'latest'
]);

try {
    $result = $client->receiveMessage(array(
        'AttributeNames' => ['SentTimestamp'],
        'MaxNumberOfMessages' => 10,
        'MessageAttributeNames' => ['All'],
        'QueueUrl' => $queueUrl,
        'WaitTimeSeconds' => 0,
        // @see https://docs.aws.amazon.com/ja_jp/AWSSimpleQueueService/latest/SQSDeveloperGuide/sqs-visibility-timeout.html#configuring-visibility-timeout
        // ↓ ここが WaitTimeSeconds 以下だと削除できない
        //'VisibilityTimeout' => 0
    ));

    if (count($result->get('Messages')) === 0) {
        echo "No messages in queue. \n";
        return;
    }

    foreach ($result->get('Messages') as $message) {
        var_dump($message);
        $result = $client->deleteMessage([
            'QueueUrl' => $queueUrl,
            'ReceiptHandle' => $message['ReceiptHandle']
        ]);
        var_dump($result);
    }
} catch (AwsException $e) {
// output error message if fails
    error_log($e->getMessage());
}