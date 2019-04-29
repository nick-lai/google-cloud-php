<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for a unique key indicating a record that contains a finding.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.RecordKey</code>
 */
class RecordKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Values of identifying columns in the given row. Order of values matches
     * the order of field identifiers specified in the scanning request.
     *
     * Generated from protobuf field <code>repeated string id_values = 5;</code>
     */
    private $id_values;
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\DatastoreKey $datastore_key
     *     @type \Google\Cloud\Dlp\V2\BigQueryKey $big_query_key
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $id_values
     *           Values of identifying columns in the given row. Order of values matches
     *           the order of field identifiers specified in the scanning request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DatastoreKey datastore_key = 2;</code>
     * @return \Google\Cloud\Dlp\V2\DatastoreKey
     */
    public function getDatastoreKey()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DatastoreKey datastore_key = 2;</code>
     * @param \Google\Cloud\Dlp\V2\DatastoreKey $var
     * @return $this
     */
    public function setDatastoreKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DatastoreKey::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryKey big_query_key = 3;</code>
     * @return \Google\Cloud\Dlp\V2\BigQueryKey
     */
    public function getBigQueryKey()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryKey big_query_key = 3;</code>
     * @param \Google\Cloud\Dlp\V2\BigQueryKey $var
     * @return $this
     */
    public function setBigQueryKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\BigQueryKey::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Values of identifying columns in the given row. Order of values matches
     * the order of field identifiers specified in the scanning request.
     *
     * Generated from protobuf field <code>repeated string id_values = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIdValues()
    {
        return $this->id_values;
    }

    /**
     * Values of identifying columns in the given row. Order of values matches
     * the order of field identifiers specified in the scanning request.
     *
     * Generated from protobuf field <code>repeated string id_values = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIdValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->id_values = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}
