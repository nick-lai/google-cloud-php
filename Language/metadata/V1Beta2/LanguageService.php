<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace GPBMetadata\Google\Cloud\Language\V1Beta2;

class LanguageService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afc3f0a34676f6f676c652f636c6f75642f6c616e67756167652f763162" .
            "657461322f6c616e67756167655f736572766963652e70726f746f121d67" .
            "6f6f676c652e636c6f75642e6c616e67756167652e763162657461321a23" .
            "676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e" .
            "70726f746f1a1f676f6f676c652f70726f746f6275662f74696d65737461" .
            "6d702e70726f746f1a17676f6f676c652f7270632f7374617475732e7072" .
            "6f746f22c8010a08446f63756d656e74123a0a047479706518012001280e" .
            "322c2e676f6f676c652e636c6f75642e6c616e67756167652e7631626574" .
            "61322e446f63756d656e742e5479706512110a07636f6e74656e74180220" .
            "012809480012190a0f6763735f636f6e74656e745f757269180320012809" .
            "480012100a086c616e677561676518042001280922360a04547970651214" .
            "0a10545950455f554e5350454349464945441000120e0a0a504c41494e5f" .
            "54455854100112080a0448544d4c100242080a06736f75726365227e0a08" .
            "53656e74656e636512350a047465787418012001280b32272e676f6f676c" .
            "652e636c6f75642e6c616e67756167652e763162657461322e5465787453" .
            "70616e123b0a0973656e74696d656e7418022001280b32282e676f6f676c" .
            "652e636c6f75642e6c616e67756167652e763162657461322e53656e7469" .
            "6d656e7422d2030a06456e74697479120c0a046e616d6518012001280912" .
            "380a047479706518022001280e322a2e676f6f676c652e636c6f75642e6c" .
            "616e67756167652e763162657461322e456e746974792e5479706512450a" .
            "086d6574616461746118032003280b32332e676f6f676c652e636c6f7564" .
            "2e6c616e67756167652e763162657461322e456e746974792e4d65746164" .
            "617461456e74727912100a0873616c69656e6365180420012802123e0a08" .
            "6d656e74696f6e7318052003280b322c2e676f6f676c652e636c6f75642e" .
            "6c616e67756167652e763162657461322e456e746974794d656e74696f6e" .
            "123b0a0973656e74696d656e7418062001280b32282e676f6f676c652e63" .
            "6c6f75642e6c616e67756167652e763162657461322e53656e74696d656e" .
            "741a2f0a0d4d65746164617461456e747279120b0a036b65791801200128" .
            "09120d0a0576616c75651802200128093a02380122790a0454797065120b" .
            "0a07554e4b4e4f574e1000120a0a06504552534f4e1001120c0a084c4f43" .
            "4154494f4e100212100a0c4f5247414e495a4154494f4e100312090a0545" .
            "56454e541004120f0a0b574f524b5f4f465f415254100512110a0d434f4e" .
            "53554d45525f474f4f44100612090a054f54484552100722da010a05546f" .
            "6b656e12350a047465787418012001280b32272e676f6f676c652e636c6f" .
            "75642e6c616e67756167652e763162657461322e546578745370616e1243" .
            "0a0e706172745f6f665f73706565636818022001280b322b2e676f6f676c" .
            "652e636c6f75642e6c616e67756167652e763162657461322e506172744f" .
            "6653706565636812460a0f646570656e64656e63795f6564676518032001" .
            "280b322d2e676f6f676c652e636c6f75642e6c616e67756167652e763162" .
            "657461322e446570656e64656e637945646765120d0a056c656d6d611804" .
            "20012809222d0a0953656e74696d656e7412110a096d61676e6974756465" .
            "180220012802120d0a0573636f726518032001280222df100a0c50617274" .
            "4f66537065656368123c0a0374616718012001280e322f2e676f6f676c65" .
            "2e636c6f75642e6c616e67756167652e763162657461322e506172744f66" .
            "5370656563682e54616712420a0661737065637418022001280e32322e67" .
            "6f6f676c652e636c6f75642e6c616e67756167652e763162657461322e50" .
            "6172744f665370656563682e417370656374123e0a046361736518032001" .
            "280e32302e676f6f676c652e636c6f75642e6c616e67756167652e763162" .
            "657461322e506172744f665370656563682e43617365123e0a04666f726d" .
            "18042001280e32302e676f6f676c652e636c6f75642e6c616e6775616765" .
            "2e763162657461322e506172744f665370656563682e466f726d12420a06" .
            "67656e64657218052001280e32322e676f6f676c652e636c6f75642e6c61" .
            "6e67756167652e763162657461322e506172744f665370656563682e4765" .
            "6e646572123e0a046d6f6f6418062001280e32302e676f6f676c652e636c" .
            "6f75642e6c616e67756167652e763162657461322e506172744f66537065" .
            "6563682e4d6f6f6412420a066e756d62657218072001280e32322e676f6f" .
            "676c652e636c6f75642e6c616e67756167652e763162657461322e506172" .
            "744f665370656563682e4e756d62657212420a06706572736f6e18082001" .
            "280e32322e676f6f676c652e636c6f75642e6c616e67756167652e763162" .
            "657461322e506172744f665370656563682e506572736f6e12420a067072" .
            "6f70657218092001280e32322e676f6f676c652e636c6f75642e6c616e67" .
            "756167652e763162657461322e506172744f665370656563682e50726f70" .
            "6572124c0a0b7265636970726f63697479180a2001280e32372e676f6f67" .
            "6c652e636c6f75642e6c616e67756167652e763162657461322e50617274" .
            "4f665370656563682e5265636970726f6369747912400a0574656e736518" .
            "0b2001280e32312e676f6f676c652e636c6f75642e6c616e67756167652e" .
            "763162657461322e506172744f665370656563682e54656e736512400a05" .
            "766f696365180c2001280e32312e676f6f676c652e636c6f75642e6c616e" .
            "67756167652e763162657461322e506172744f665370656563682e566f69" .
            "6365228d010a03546167120b0a07554e4b4e4f574e100012070a0341444a" .
            "100112070a03414450100212070a03414456100312080a04434f4e4a1004" .
            "12070a03444554100512080a044e4f554e100612070a034e554d10071208" .
            "0a0450524f4e100812070a03505254100912090a0550554e4354100a1208" .
            "0a0456455242100b12050a0158100c12090a054146464958100d224f0a06" .
            "41737065637412120a0e4153504543545f554e4b4e4f574e1000120e0a0a" .
            "50455246454354495645100112100a0c494d504552464543544956451002" .
            "120f0a0b50524f4752455353495645100322f8010a044361736512100a0c" .
            "434153455f554e4b4e4f574e1000120e0a0a414343555341544956451001" .
            "120d0a0941445645524249414c100212110a0d434f4d504c454d454e5449" .
            "56451003120a0a064441544956451004120c0a0847454e49544956451005" .
            "12100a0c494e535452554d454e54414c1006120c0a084c4f434154495645" .
            "1007120e0a0a4e4f4d494e41544956451008120b0a074f424c4951554510" .
            "09120d0a09504152544954495645100a12110a0d505245504f534954494f" .
            "4e414c100b12120a0e5245464c45584956455f43415345100c12110a0d52" .
            "454c41544956455f43415345100d120c0a08564f434154495645100e22af" .
            "010a04466f726d12100a0c464f524d5f554e4b4e4f574e1000120c0a0841" .
            "444e4f4d49414c1001120d0a09415558494c49415259100212120a0e434f" .
            "4d504c454d454e54495a4552100312100a0c46494e414c5f454e44494e47" .
            "1004120a0a06474552554e441005120a0a065245414c49531006120c0a08" .
            "49525245414c4953100712090a0553484f5254100812080a044c4f4e4710" .
            "0912090a054f52444552100a120c0a085350454349464943100b22450a06" .
            "47656e64657212120a0e47454e4445525f554e4b4e4f574e1000120c0a08" .
            "46454d494e494e451001120d0a094d415343554c494e451002120a0a064e" .
            "45555445521003227f0a044d6f6f6412100a0c4d4f4f445f554e4b4e4f57" .
            "4e100012140a10434f4e444954494f4e414c5f4d4f4f441001120e0a0a49" .
            "4d50455241544956451002120e0a0a494e4449434154495645100312110a" .
            "0d494e544552524f4741544956451004120b0a074a555353495645100512" .
            "0f0a0b5355424a554e4354495645100622400a064e756d62657212120a0e" .
            "4e554d4245525f554e4b4e4f574e1000120c0a0853494e47554c41521001" .
            "120a0a06504c5552414c100212080a044455414c100322540a0650657273" .
            "6f6e12120a0e504552534f4e5f554e4b4e4f574e100012090a0546495253" .
            "541001120a0a065345434f4e44100212090a055448495244100312140a10" .
            "5245464c45584956455f504552534f4e100422380a0650726f7065721212" .
            "0a0e50524f5045525f554e4b4e4f574e1000120a0a0650524f5045521001" .
            "120e0a0a4e4f545f50524f5045521002224a0a0b5265636970726f636974" .
            "7912170a135245434950524f434954595f554e4b4e4f574e1000120e0a0a" .
            "5245434950524f43414c100112120a0e4e4f4e5f5245434950524f43414c" .
            "100222730a0554656e736512110a0d54454e53455f554e4b4e4f574e1000" .
            "12150a11434f4e444954494f4e414c5f54454e53451001120a0a06465554" .
            "555245100212080a04504153541003120b0a0750524553454e541004120d" .
            "0a09494d504552464543541005120e0a0a504c5550455246454354100622" .
            "420a05566f69636512110a0d564f4943455f554e4b4e4f574e1000120a0a" .
            "064143544956451001120d0a094341555341544956451002120b0a075041" .
            "53534956451003229a080a0e446570656e64656e63794564676512180a10" .
            "686561645f746f6b656e5f696e64657818012001280512420a056c616265" .
            "6c18022001280e32332e676f6f676c652e636c6f75642e6c616e67756167" .
            "652e763162657461322e446570656e64656e6379456467652e4c6162656c" .
            "22a9070a054c6162656c120b0a07554e4b4e4f574e1000120a0a06414242" .
            "524556100112090a0541434f4d50100212090a05414456434c1003120a0a" .
            "064144564d4f44100412080a04414d4f44100512090a054150504f531006" .
            "12080a0441545452100712070a034155581008120b0a0741555850415353" .
            "100912060a024343100a12090a0543434f4d50100b12080a04434f4e4a10" .
            "0c12090a05435355424a100d120d0a09435355424a50415353100e12070a" .
            "03444550100f12070a034445541010120d0a09444953434f555253451011" .
            "12080a04444f424a101212080a044558504c1013120c0a08474f45535749" .
            "5448101412080a04494f424a101512080a044d41524b101612070a034d57" .
            "45101712070a034d5756101812070a034e4547101912060a024e4e101a12" .
            "0c0a084e504144564d4f44101b12090a054e5355424a101c120d0a094e53" .
            "55424a50415353101d12070a034e554d101e120a0a064e554d424552101f" .
            "12050a01501020120d0a095041524154415849531021120b0a0750415254" .
            "4d4f44102212090a0550434f4d50102312080a04504f424a102412080a04" .
            "504f53531025120b0a07504f53544e45471026120b0a07505245434f4d50" .
            "1027120b0a07505245434f4e4a1028120a0a06505245444554102912080a" .
            "0450524546102a12080a0450524550102b12090a0550524f4e4c102c1207" .
            "0a03505254102d12060a025053102e120c0a085155414e544d4f44102f12" .
            "090a0552434d4f441030120c0a0852434d4f4452454c103112090a055244" .
            "524f50103212070a035245461033120b0a0752454d4e414e541034120e0a" .
            "0a5245504152414e44554d103512080a04524f4f54103612080a04534e55" .
            "4d103712080a0453554646103812080a04544d4f44103912090a05544f50" .
            "4943103a12080a04564d4f44103b120c0a08564f434154495645103c1209" .
            "0a0558434f4d50103d120a0a06535546464958103e12090a055449544c45" .
            "103f120c0a0841445650484d4f441040120b0a0741555843415553104112" .
            "090a054155585656104212090a0544544d4f441043120b0a07464f524549" .
            "474e104412060a024b57104512080a044c495354104612080a044e4f4d43" .
            "1047120c0a084e4f4d435355424a104812100a0c4e4f4d435355424a5041" .
            "5353104912080a044e554d43104a12070a03434f50104b120e0a0a444953" .
            "4c4f4341544544104c12070a03415350104d12080a04474d4f44104e1208" .
            "0a04474f424a104f120a0a06494e464d4f44105012070a034d4553105112" .
            "090a054e434f4d50105222f6010a0d456e746974794d656e74696f6e1235" .
            "0a047465787418012001280b32272e676f6f676c652e636c6f75642e6c61" .
            "6e67756167652e763162657461322e546578745370616e123f0a04747970" .
            "6518022001280e32312e676f6f676c652e636c6f75642e6c616e67756167" .
            "652e763162657461322e456e746974794d656e74696f6e2e54797065123b" .
            "0a0973656e74696d656e7418032001280b32282e676f6f676c652e636c6f" .
            "75642e6c616e67756167652e763162657461322e53656e74696d656e7422" .
            "300a045479706512100a0c545950455f554e4b4e4f574e1000120a0a0650" .
            "524f5045521001120a0a06434f4d4d4f4e100222310a0854657874537061" .
            "6e120f0a07636f6e74656e7418012001280912140a0c626567696e5f6f66" .
            "66736574180220012805223a0a16436c617373696669636174696f6e4361" .
            "7465676f7279120c0a046e616d6518012001280912120a0a636f6e666964" .
            "656e63651802200128022298010a17416e616c797a6553656e74696d656e" .
            "745265717565737412390a08646f63756d656e7418012001280b32272e67" .
            "6f6f676c652e636c6f75642e6c616e67756167652e763162657461322e44" .
            "6f63756d656e7412420a0d656e636f64696e675f7479706518022001280e" .
            "322b2e676f6f676c652e636c6f75642e6c616e67756167652e7631626574" .
            "61322e456e636f64696e675479706522ae010a18416e616c797a6553656e" .
            "74696d656e74526573706f6e736512440a12646f63756d656e745f73656e" .
            "74696d656e7418012001280b32282e676f6f676c652e636c6f75642e6c61" .
            "6e67756167652e763162657461322e53656e74696d656e7412100a086c61" .
            "6e6775616765180220012809123a0a0973656e74656e6365731803200328" .
            "0b32272e676f6f676c652e636c6f75642e6c616e67756167652e76316265" .
            "7461322e53656e74656e6365229e010a1d416e616c797a65456e74697479" .
            "53656e74696d656e745265717565737412390a08646f63756d656e741801" .
            "2001280b32272e676f6f676c652e636c6f75642e6c616e67756167652e76" .
            "3162657461322e446f63756d656e7412420a0d656e636f64696e675f7479" .
            "706518022001280e322b2e676f6f676c652e636c6f75642e6c616e677561" .
            "67652e763162657461322e456e636f64696e6754797065226b0a1e416e61" .
            "6c797a65456e7469747953656e74696d656e74526573706f6e736512370a" .
            "08656e74697469657318012003280b32252e676f6f676c652e636c6f7564" .
            "2e6c616e67756167652e763162657461322e456e7469747912100a086c61" .
            "6e67756167651802200128092297010a16416e616c797a65456e74697469" .
            "65735265717565737412390a08646f63756d656e7418012001280b32272e" .
            "676f6f676c652e636c6f75642e6c616e67756167652e763162657461322e" .
            "446f63756d656e7412420a0d656e636f64696e675f747970651802200128" .
            "0e322b2e676f6f676c652e636c6f75642e6c616e67756167652e76316265" .
            "7461322e456e636f64696e675479706522640a17416e616c797a65456e74" .
            "6974696573526573706f6e736512370a08656e7469746965731801200328" .
            "0b32252e676f6f676c652e636c6f75642e6c616e67756167652e76316265" .
            "7461322e456e7469747912100a086c616e67756167651802200128092295" .
            "010a14416e616c797a6553796e7461785265717565737412390a08646f63" .
            "756d656e7418012001280b32272e676f6f676c652e636c6f75642e6c616e" .
            "67756167652e763162657461322e446f63756d656e7412420a0d656e636f" .
            "64696e675f7479706518022001280e322b2e676f6f676c652e636c6f7564" .
            "2e6c616e67756167652e763162657461322e456e636f64696e6754797065" .
            "229b010a15416e616c797a6553796e746178526573706f6e7365123a0a09" .
            "73656e74656e63657318012003280b32272e676f6f676c652e636c6f7564" .
            "2e6c616e67756167652e763162657461322e53656e74656e636512340a06" .
            "746f6b656e7318022003280b32242e676f6f676c652e636c6f75642e6c61" .
            "6e67756167652e763162657461322e546f6b656e12100a086c616e677561" .
            "676518032001280922500a13436c61737369667954657874526571756573" .
            "7412390a08646f63756d656e7418012001280b32272e676f6f676c652e63" .
            "6c6f75642e6c616e67756167652e763162657461322e446f63756d656e74" .
            "22610a14436c61737369667954657874526573706f6e736512490a0a6361" .
            "7465676f7269657318012003280b32352e676f6f676c652e636c6f75642e" .
            "6c616e67756167652e763162657461322e436c617373696669636174696f" .
            "6e43617465676f727922ff020a13416e6e6f746174655465787452657175" .
            "65737412390a08646f63756d656e7418012001280b32272e676f6f676c65" .
            "2e636c6f75642e6c616e67756167652e763162657461322e446f63756d65" .
            "6e74124d0a08666561747572657318022001280b323b2e676f6f676c652e" .
            "636c6f75642e6c616e67756167652e763162657461322e416e6e6f746174" .
            "6554657874526571756573742e466561747572657312420a0d656e636f64" .
            "696e675f7479706518032001280e322b2e676f6f676c652e636c6f75642e" .
            "6c616e67756167652e763162657461322e456e636f64696e67547970651a" .
            "99010a08466561747572657312160a0e657874726163745f73796e746178" .
            "18012001280812180a10657874726163745f656e74697469657318022001" .
            "280812220a1a657874726163745f646f63756d656e745f73656e74696d65" .
            "6e7418032001280812200a18657874726163745f656e746974795f73656e" .
            "74696d656e7418042001280812150a0d636c6173736966795f7465787418" .
            "062001280822e4020a14416e6e6f7461746554657874526573706f6e7365" .
            "123a0a0973656e74656e63657318012003280b32272e676f6f676c652e63" .
            "6c6f75642e6c616e67756167652e763162657461322e53656e74656e6365" .
            "12340a06746f6b656e7318022003280b32242e676f6f676c652e636c6f75" .
            "642e6c616e67756167652e763162657461322e546f6b656e12370a08656e" .
            "74697469657318032003280b32252e676f6f676c652e636c6f75642e6c61" .
            "6e67756167652e763162657461322e456e7469747912440a12646f63756d" .
            "656e745f73656e74696d656e7418042001280b32282e676f6f676c652e63" .
            "6c6f75642e6c616e67756167652e763162657461322e53656e74696d656e" .
            "7412100a086c616e677561676518052001280912490a0a63617465676f72" .
            "69657318062003280b32352e676f6f676c652e636c6f75642e6c616e6775" .
            "6167652e763162657461322e436c617373696669636174696f6e43617465" .
            "676f72792a380a0c456e636f64696e675479706512080a044e4f4e451000" .
            "12080a0455544638100112090a055554463136100212090a055554463332" .
            "100332bd080a0f4c616e67756167655365727669636512b3010a10416e61" .
            "6c797a6553656e74696d656e7412362e676f6f676c652e636c6f75642e6c" .
            "616e67756167652e763162657461322e416e616c797a6553656e74696d65" .
            "6e74526571756573741a372e676f6f676c652e636c6f75642e6c616e6775" .
            "6167652e763162657461322e416e616c797a6553656e74696d656e745265" .
            "73706f6e7365222e82d3e493022822232f763162657461322f646f63756d" .
            "656e74733a616e616c797a6553656e74696d656e743a012a12af010a0f41" .
            "6e616c797a65456e74697469657312352e676f6f676c652e636c6f75642e" .
            "6c616e67756167652e763162657461322e416e616c797a65456e74697469" .
            "6573526571756573741a362e676f6f676c652e636c6f75642e6c616e6775" .
            "6167652e763162657461322e416e616c797a65456e746974696573526573" .
            "706f6e7365222d82d3e493022722222f763162657461322f646f63756d65" .
            "6e74733a616e616c797a65456e7469746965733a012a12cb010a16416e61" .
            "6c797a65456e7469747953656e74696d656e74123c2e676f6f676c652e63" .
            "6c6f75642e6c616e67756167652e763162657461322e416e616c797a6545" .
            "6e7469747953656e74696d656e74526571756573741a3d2e676f6f676c65" .
            "2e636c6f75642e6c616e67756167652e763162657461322e416e616c797a" .
            "65456e7469747953656e74696d656e74526573706f6e7365223482d3e493" .
            "022e22292f763162657461322f646f63756d656e74733a616e616c797a65" .
            "456e7469747953656e74696d656e743a012a12a7010a0d416e616c797a65" .
            "53796e74617812332e676f6f676c652e636c6f75642e6c616e6775616765" .
            "2e763162657461322e416e616c797a6553796e746178526571756573741a" .
            "342e676f6f676c652e636c6f75642e6c616e67756167652e763162657461" .
            "322e416e616c797a6553796e746178526573706f6e7365222b82d3e49302" .
            "2522202f763162657461322f646f63756d656e74733a616e616c797a6553" .
            "796e7461783a012a12a3010a0c436c6173736966795465787412322e676f" .
            "6f676c652e636c6f75642e6c616e67756167652e763162657461322e436c" .
            "61737369667954657874526571756573741a332e676f6f676c652e636c6f" .
            "75642e6c616e67756167652e763162657461322e436c6173736966795465" .
            "7874526573706f6e7365222a82d3e4930224221f2f763162657461322f64" .
            "6f63756d656e74733a636c617373696679546578743a012a12a3010a0c41" .
            "6e6e6f746174655465787412322e676f6f676c652e636c6f75642e6c616e" .
            "67756167652e763162657461322e416e6e6f746174655465787452657175" .
            "6573741a332e676f6f676c652e636c6f75642e6c616e67756167652e7631" .
            "62657461322e416e6e6f7461746554657874526573706f6e7365222a82d3" .
            "e4930224221f2f763162657461322f646f63756d656e74733a616e6e6f74" .
            "617465546578743a012a4282010a21636f6d2e676f6f676c652e636c6f75" .
            "642e6c616e67756167652e7631626574613242144c616e67756167655365" .
            "727669636550726f746f50015a45676f6f676c652e676f6c616e672e6f72" .
            "672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f6c61" .
            "6e67756167652f763162657461323b6c616e6775616765620670726f746f" .
            "33"
        ), true);

        static::$is_initialized = true;
    }
}
