# awscli install
# note: http://docs.aws.amazon.com/ja_jp/streams/latest/dev/kinesis-tutorial-cli-installation.html
sudo pip install awscli

#############
# use sqs
#############
# queue list
aws sqs --profile your.profile list-queues

# send message
aws sqs --profile your.profile send-message --queue-url https://sqs.ap-northeast-1.amazonaws.com/751612800344/test --message-body hoge

# send message
aws sqs --profile your.profile receive-message --queue-url https://sqs.ap-northeast-1.amazonaws.com/751612800344/test

# delete message
aws sqs --profile your.profile delete-message --queue-url https://sqs.ap-northeast-1.amazonaws.com/751612800344/test --receipt-handle XXXXXXXXXXXXXX
