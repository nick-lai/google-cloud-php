<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/audit_log.proto

namespace Google\Cloud\Audit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Authentication information for the operation.
 *
 * Generated from protobuf message <code>google.cloud.audit.AuthenticationInfo</code>
 */
class AuthenticationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The email address of the authenticated user making the request.
     *
     * Generated from protobuf field <code>string principal_email = 1;</code>
     */
    private $principal_email = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $principal_email
     *           The email address of the authenticated user making the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\AuditLog::initOnce();
        parent::__construct($data);
    }

    /**
     * The email address of the authenticated user making the request.
     *
     * Generated from protobuf field <code>string principal_email = 1;</code>
     * @return string
     */
    public function getPrincipalEmail()
    {
        return $this->principal_email;
    }

    /**
     * The email address of the authenticated user making the request.
     *
     * Generated from protobuf field <code>string principal_email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPrincipalEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->principal_email = $var;

        return $this;
    }

}

