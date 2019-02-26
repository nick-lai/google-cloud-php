<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KeyManagementService.GetCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.GetCryptoKeyVersion].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.GetCryptoKeyVersionRequest</code>
 */
class GetCryptoKeyVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The [name][google.cloud.kms.v1.CryptoKeyVersion.name] of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to get.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The [name][google.cloud.kms.v1.CryptoKeyVersion.name] of the
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to get.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The [name][google.cloud.kms.v1.CryptoKeyVersion.name] of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to get.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The [name][google.cloud.kms.v1.CryptoKeyVersion.name] of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to get.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
