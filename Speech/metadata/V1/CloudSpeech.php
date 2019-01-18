<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace GPBMetadata\Google\Cloud\Speech\V1;

class CloudSpeech
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9b190a29676f6f676c652f636c6f75642f7370656563682f76312f636c" .
            "6f75645f7370656563682e70726f746f1216676f6f676c652e636c6f7564" .
            "2e7370656563682e76311a23676f6f676c652f6c6f6e6772756e6e696e67" .
            "2f6f7065726174696f6e732e70726f746f1a19676f6f676c652f70726f74" .
            "6f6275662f616e792e70726f746f1a1e676f6f676c652f70726f746f6275" .
            "662f6475726174696f6e2e70726f746f1a1b676f6f676c652f70726f746f" .
            "6275662f656d7074792e70726f746f1a1f676f6f676c652f70726f746f62" .
            "75662f74696d657374616d702e70726f746f1a17676f6f676c652f727063" .
            "2f7374617475732e70726f746f2286010a105265636f676e697a65526571" .
            "7565737412390a06636f6e66696718012001280b32292e676f6f676c652e" .
            "636c6f75642e7370656563682e76312e5265636f676e6974696f6e436f6e" .
            "66696712370a05617564696f18022001280b32282e676f6f676c652e636c" .
            "6f75642e7370656563682e76312e5265636f676e6974696f6e417564696f" .
            "2291010a1b4c6f6e6752756e6e696e675265636f676e697a655265717565" .
            "737412390a06636f6e66696718012001280b32292e676f6f676c652e636c" .
            "6f75642e7370656563682e76312e5265636f676e6974696f6e436f6e6669" .
            "6712370a05617564696f18022001280b32282e676f6f676c652e636c6f75" .
            "642e7370656563682e76312e5265636f676e6974696f6e417564696f2299" .
            "010a1953747265616d696e675265636f676e697a6552657175657374124e" .
            "0a1073747265616d696e675f636f6e66696718012001280b32322e676f6f" .
            "676c652e636c6f75642e7370656563682e76312e53747265616d696e6752" .
            "65636f676e6974696f6e436f6e666967480012170a0d617564696f5f636f" .
            "6e74656e7418022001280c480042130a1173747265616d696e675f726571" .
            "75657374228a010a1a53747265616d696e675265636f676e6974696f6e43" .
            "6f6e66696712390a06636f6e66696718012001280b32292e676f6f676c65" .
            "2e636c6f75642e7370656563682e76312e5265636f676e6974696f6e436f" .
            "6e66696712180a1073696e676c655f7574746572616e6365180220012808" .
            "12170a0f696e746572696d5f726573756c747318032001280822b0040a11" .
            "5265636f676e6974696f6e436f6e66696712490a08656e636f64696e6718" .
            "012001280e32372e676f6f676c652e636c6f75642e7370656563682e7631" .
            "2e5265636f676e6974696f6e436f6e6669672e417564696f456e636f6469" .
            "6e6712190a1173616d706c655f726174655f686572747a18022001280512" .
            "2f0a27656e61626c655f73657061726174655f7265636f676e6974696f6e" .
            "5f7065725f6368616e6e656c180c2001280812150a0d6c616e6775616765" .
            "5f636f646518032001280912180a106d61785f616c7465726e6174697665" .
            "7318042001280512180a1070726f66616e6974795f66696c746572180520" .
            "012808123e0a0f7370656563685f636f6e746578747318062003280b3225" .
            "2e676f6f676c652e636c6f75642e7370656563682e76312e537065656368" .
            "436f6e7465787412200a18656e61626c655f776f72645f74696d655f6f66" .
            "667365747318082001280812240a1c656e61626c655f6175746f6d617469" .
            "635f70756e6374756174696f6e180b20012808120d0a056d6f64656c180d" .
            "2001280912140a0c7573655f656e68616e636564180e20012808228b010a" .
            "0d417564696f456e636f64696e6712180a14454e434f44494e475f554e53" .
            "50454349464945441000120c0a084c494e4541523136100112080a04464c" .
            "4143100212090a054d554c4157100312070a03414d521004120a0a06414d" .
            "525f57421005120c0a084f47475f4f5055531006121a0a1653504545585f" .
            "574954485f4845414445525f42595445100722200a0d537065656368436f" .
            "6e74657874120f0a077068726173657318012003280922440a105265636f" .
            "676e6974696f6e417564696f12110a07636f6e74656e7418012001280c48" .
            "00120d0a037572691802200128094800420e0a0c617564696f5f736f7572" .
            "636522550a115265636f676e697a65526573706f6e736512400a07726573" .
            "756c747318022003280b322f2e676f6f676c652e636c6f75642e73706565" .
            "63682e76312e5370656563685265636f676e6974696f6e526573756c7422" .
            "600a1c4c6f6e6752756e6e696e675265636f676e697a65526573706f6e73" .
            "6512400a07726573756c747318022003280b322f2e676f6f676c652e636c" .
            "6f75642e7370656563682e76312e5370656563685265636f676e6974696f" .
            "6e526573756c74229e010a1c4c6f6e6752756e6e696e675265636f676e69" .
            "7a654d6574616461746112180a1070726f67726573735f70657263656e74" .
            "180120012805122e0a0a73746172745f74696d6518022001280b321a2e67" .
            "6f6f676c652e70726f746f6275662e54696d657374616d7012340a106c61" .
            "73745f7570646174655f74696d6518032001280b321a2e676f6f676c652e" .
            "70726f746f6275662e54696d657374616d7022b1020a1a53747265616d69" .
            "6e675265636f676e697a65526573706f6e736512210a056572726f721801" .
            "2001280b32122e676f6f676c652e7270632e53746174757312430a077265" .
            "73756c747318022003280b32322e676f6f676c652e636c6f75642e737065" .
            "6563682e76312e53747265616d696e675265636f676e6974696f6e526573" .
            "756c74125d0a117370656563685f6576656e745f7479706518042001280e" .
            "32422e676f6f676c652e636c6f75642e7370656563682e76312e53747265" .
            "616d696e675265636f676e697a65526573706f6e73652e53706565636845" .
            "76656e7454797065224c0a0f5370656563684576656e7454797065121c0a" .
            "185350454543485f4556454e545f554e5350454349464945441000121b0a" .
            "17454e445f4f465f53494e474c455f5554544552414e4345100122a2010a" .
            "1a53747265616d696e675265636f676e6974696f6e526573756c74124a0a" .
            "0c616c7465726e61746976657318012003280b32342e676f6f676c652e63" .
            "6c6f75642e7370656563682e76312e5370656563685265636f676e697469" .
            "6f6e416c7465726e617469766512100a0869735f66696e616c1802200128" .
            "0812110a0973746162696c69747918032001280212130a0b6368616e6e65" .
            "6c5f746167180520012805227a0a175370656563685265636f676e697469" .
            "6f6e526573756c74124a0a0c616c7465726e61746976657318012003280b" .
            "32342e676f6f676c652e636c6f75642e7370656563682e76312e53706565" .
            "63685265636f676e6974696f6e416c7465726e617469766512130a0b6368" .
            "616e6e656c5f74616718022001280522770a1c5370656563685265636f67" .
            "6e6974696f6e416c7465726e617469766512120a0a7472616e7363726970" .
            "7418012001280912120a0a636f6e666964656e6365180220012802122f0a" .
            "05776f72647318032003280b32202e676f6f676c652e636c6f75642e7370" .
            "656563682e76312e576f7264496e666f22740a08576f7264496e666f122d" .
            "0a0a73746172745f74696d6518012001280b32192e676f6f676c652e7072" .
            "6f746f6275662e4475726174696f6e122b0a08656e645f74696d65180220" .
            "01280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e" .
            "120c0a04776f726418032001280932a9030a065370656563681281010a09" .
            "5265636f676e697a6512282e676f6f676c652e636c6f75642e7370656563" .
            "682e76312e5265636f676e697a65526571756573741a292e676f6f676c65" .
            "2e636c6f75642e7370656563682e76312e5265636f676e697a6552657370" .
            "6f6e7365221f82d3e493021922142f76312f7370656563683a7265636f67" .
            "6e697a653a012a1296010a144c6f6e6752756e6e696e675265636f676e69" .
            "7a6512332e676f6f676c652e636c6f75642e7370656563682e76312e4c6f" .
            "6e6752756e6e696e675265636f676e697a65526571756573741a1d2e676f" .
            "6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e222a82d3" .
            "e4930224221f2f76312f7370656563683a6c6f6e6772756e6e696e677265" .
            "636f676e697a653a012a1281010a1253747265616d696e675265636f676e" .
            "697a6512312e676f6f676c652e636c6f75642e7370656563682e76312e53" .
            "747265616d696e675265636f676e697a65526571756573741a322e676f6f" .
            "676c652e636c6f75642e7370656563682e76312e53747265616d696e6752" .
            "65636f676e697a65526573706f6e7365220028013001426c0a1a636f6d2e" .
            "676f6f676c652e636c6f75642e7370656563682e7631420b537065656368" .
            "50726f746f50015a3c676f6f676c652e676f6c616e672e6f72672f67656e" .
            "70726f746f2f676f6f676c65617069732f636c6f75642f7370656563682f" .
            "76313b737065656368f80101620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
