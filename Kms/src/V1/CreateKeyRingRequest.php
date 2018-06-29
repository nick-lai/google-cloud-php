<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeyManagementService.CreateKeyRing][google.cloud.kms.v1.KeyManagementService.CreateKeyRing].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.CreateKeyRingRequest</code>
 */
class CreateKeyRingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the location associated with the
     * [KeyRings][google.cloud.kms.v1.KeyRing], in the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Required. It must be unique within a location and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`
     *
     * Generated from protobuf field <code>string key_ring_id = 2;</code>
     */
    private $key_ring_id = '';
    /**
     * A [KeyRing][google.cloud.kms.v1.KeyRing] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.KeyRing key_ring = 3;</code>
     */
    private $key_ring = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct();
    }

    /**
     * Required. The resource name of the location associated with the
     * [KeyRings][google.cloud.kms.v1.KeyRing], in the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the location associated with the
     * [KeyRings][google.cloud.kms.v1.KeyRing], in the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. It must be unique within a location and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`
     *
     * Generated from protobuf field <code>string key_ring_id = 2;</code>
     * @return string
     */
    public function getKeyRingId()
    {
        return $this->key_ring_id;
    }

    /**
     * Required. It must be unique within a location and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`
     *
     * Generated from protobuf field <code>string key_ring_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyRingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_ring_id = $var;

        return $this;
    }

    /**
     * A [KeyRing][google.cloud.kms.v1.KeyRing] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.KeyRing key_ring = 3;</code>
     * @return \Google\Cloud\Kms\V1\KeyRing
     */
    public function getKeyRing()
    {
        return $this->key_ring;
    }

    /**
     * A [KeyRing][google.cloud.kms.v1.KeyRing] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.KeyRing key_ring = 3;</code>
     * @param \Google\Cloud\Kms\V1\KeyRing $var
     * @return $this
     */
    public function setKeyRing($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Kms\V1\KeyRing::class);
        $this->key_ring = $var;

        return $this;
    }

}

