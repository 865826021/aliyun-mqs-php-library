<?php
require_once( 'mqs.sdk.class.php' );
$mqs = new mqs(
        array(
            'accessKeyId'       => 'ACSD5gEOatfmybgZ',
            'accessKeySecret'   => '***********',
            'accessOwnerId'     => '9wlxk9n7le',
            'accessQueue'       => 'console',
            'accessRegion'      => 'cn-hangzhou'
        )
    );


// Push
$do = $mqs->sendMessage(
    array(
        'MessageBody' => '12.',
        'DelaySeconds' => 0,
        'Priority' => 8
    )
);
print_r( $do );
echo "\r\n";
echo "\r\n";
echo "\r\n";

// Read    读取
$read = $mqs->receiveMessage();
print_r($read);
echo "\r\n";
echo "\r\n";
echo "\r\n";

// Delete  移除
$do = $mqs->dropMessage(
    array(
        //'ReceiptHandle' => $read['Message']['ReceiptHandle']
        'ReceiptHandle' => '1-ODU4OTkzNDU5NS0xNDA1ODQ5Mjc5LTItOA=='
    )
);
print_r( $do );
echo "\r\n";
echo "\r\n";
echo "\r\n";

