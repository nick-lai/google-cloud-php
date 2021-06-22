<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privatecatalog/v1beta1/private_catalog.proto

namespace Google\Cloud\PrivateCatalog\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines how to access a Git Source.
 *
 * Generated from protobuf message <code>google.cloud.privatecatalog.v1beta1.GitSource</code>
 */
class GitSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Location of the Git repo to build.
     *
     * Generated from protobuf field <code>string repo = 1;</code>
     */
    private $repo = '';
    /**
     * Directory, relative to the source root, in which to run the build.
     * This must be a relative path. If a step's `dir` is specified and is an
     * absolute path, this value is ignored for that step's execution.
     *
     * Generated from protobuf field <code>string dir = 2;</code>
     */
    private $dir = '';
    protected $ref;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $repo
     *           Location of the Git repo to build.
     *     @type string $dir
     *           Directory, relative to the source root, in which to run the build.
     *           This must be a relative path. If a step's `dir` is specified and is an
     *           absolute path, this value is ignored for that step's execution.
     *     @type string $commit
     *           The revision commit to use.
     *     @type string $branch
     *           The revision branch to use.
     *     @type string $tag
     *           The revision tag to use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Privatecatalog\V1Beta1\PrivateCatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Location of the Git repo to build.
     *
     * Generated from protobuf field <code>string repo = 1;</code>
     * @return string
     */
    public function getRepo()
    {
        return $this->repo;
    }

    /**
     * Location of the Git repo to build.
     *
     * Generated from protobuf field <code>string repo = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRepo($var)
    {
        GPBUtil::checkString($var, True);
        $this->repo = $var;

        return $this;
    }

    /**
     * Directory, relative to the source root, in which to run the build.
     * This must be a relative path. If a step's `dir` is specified and is an
     * absolute path, this value is ignored for that step's execution.
     *
     * Generated from protobuf field <code>string dir = 2;</code>
     * @return string
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * Directory, relative to the source root, in which to run the build.
     * This must be a relative path. If a step's `dir` is specified and is an
     * absolute path, this value is ignored for that step's execution.
     *
     * Generated from protobuf field <code>string dir = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDir($var)
    {
        GPBUtil::checkString($var, True);
        $this->dir = $var;

        return $this;
    }

    /**
     * The revision commit to use.
     *
     * Generated from protobuf field <code>string commit = 3;</code>
     * @return string
     */
    public function getCommit()
    {
        return $this->readOneof(3);
    }

    public function hasCommit()
    {
        return $this->hasOneof(3);
    }

    /**
     * The revision commit to use.
     *
     * Generated from protobuf field <code>string commit = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCommit($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The revision branch to use.
     *
     * Generated from protobuf field <code>string branch = 4;</code>
     * @return string
     */
    public function getBranch()
    {
        return $this->readOneof(4);
    }

    public function hasBranch()
    {
        return $this->hasOneof(4);
    }

    /**
     * The revision branch to use.
     *
     * Generated from protobuf field <code>string branch = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBranch($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The revision tag to use.
     *
     * Generated from protobuf field <code>string tag = 5;</code>
     * @return string
     */
    public function getTag()
    {
        return $this->readOneof(5);
    }

    public function hasTag()
    {
        return $this->hasOneof(5);
    }

    /**
     * The revision tag to use.
     *
     * Generated from protobuf field <code>string tag = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->whichOneof("ref");
    }

}
