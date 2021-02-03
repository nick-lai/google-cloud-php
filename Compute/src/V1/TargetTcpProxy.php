<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Target TCP Proxy resource.
 * A target TCP proxy is a component of a TCP Proxy load balancer. Global forwarding rules reference target TCP proxy, and the target proxy then references an external backend service. For more information, read TCP Proxy Load Balancing overview. (== resource_for {$api_version}.targetTcpProxies ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.TargetTcpProxy</code>
 */
class TargetTcpProxy extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = '';
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     */
    private $description = '';
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     */
    private $id = '';
    /**
     * [Output Only] Type of the resource. Always compute#targetTcpProxy for target TCP proxies.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = '';
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = '';
    /**
     * Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetTcpProxy.ProxyHeader proxy_header = 160374142;</code>
     */
    private $proxy_header = 0;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     */
    private $self_link = '';
    /**
     * URL to the BackendService resource.
     *
     * Generated from protobuf field <code>string service = 105105077;</code>
     */
    private $service = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#targetTcpProxy for target TCP proxies.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type int $proxy_header
     *           Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $service
     *           URL to the BackendService resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return $this->creation_timestamp;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#targetTcpProxy for target TCP proxies.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * [Output Only] Type of the resource. Always compute#targetTcpProxy for target TCP proxies.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetTcpProxy.ProxyHeader proxy_header = 160374142;</code>
     * @return int
     */
    public function getProxyHeader()
    {
        return $this->proxy_header;
    }

    /**
     * Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetTcpProxy.ProxyHeader proxy_header = 160374142;</code>
     * @param int $var
     * @return $this
     */
    public function setProxyHeader($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\TargetTcpProxy\ProxyHeader::class);
        $this->proxy_header = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * URL to the BackendService resource.
     *
     * Generated from protobuf field <code>string service = 105105077;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * URL to the BackendService resource.
     *
     * Generated from protobuf field <code>string service = 105105077;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

}
