<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/assets.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A result of IAM Policy search, containing information of an IAM policy.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.IamPolicySearchResult</code>
 */
class IamPolicySearchResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The full resource name of the resource associated with this IAM policy.
     * Example:
     * `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`.
     * See [Cloud Asset Inventory Resource Name
     * Format](https://cloud.google.com/asset-inventory/docs/resource-name-format)
     * for more information.
     * To search against the `resource`:
     * * use a field query. Example: `resource:organizations/123`
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     */
    private $resource = '';
    /**
     * The project that the associated GCP resource belongs to, in the form of
     * projects/{PROJECT_NUMBER}. If an IAM policy is set on a resource (like VM
     * instance, Cloud Storage bucket), the project field will indicate the
     * project that contains the resource. If an IAM policy is set on a folder or
     * orgnization, the project field will be empty.
     * To search against the `project`:
     * * specify the `scope` field as this project in your search request.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     */
    private $project = '';
    /**
     * The IAM policy directly set on the given resource. Note that the original
     * IAM policy can contain multiple bindings. This only contains the bindings
     * that match the given query. For queries that don't contain a constrain on
     * policies (e.g., an empty query), this contains all the bindings.
     * To search against the `policy` bindings:
     * * use a field query:
     *     - query by the policy contained members. Example:
     *       `policy:amy&#64;gmail.com`
     *     - query by the policy contained roles. Example:
     *       `policy:roles/compute.admin`
     *     - query by the policy contained roles' included permissions. Example:
     *       `policy.role.permissions:compute.instances.create`
     *
     * Generated from protobuf field <code>.google.iam.v1.Policy policy = 3;</code>
     */
    private $policy = null;
    /**
     * Explanation about the IAM policy search result. It contains additional
     * information to explain why the search result matches the query.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicySearchResult.Explanation explanation = 4;</code>
     */
    private $explanation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource
     *           The full resource name of the resource associated with this IAM policy.
     *           Example:
     *           `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`.
     *           See [Cloud Asset Inventory Resource Name
     *           Format](https://cloud.google.com/asset-inventory/docs/resource-name-format)
     *           for more information.
     *           To search against the `resource`:
     *           * use a field query. Example: `resource:organizations/123`
     *     @type string $project
     *           The project that the associated GCP resource belongs to, in the form of
     *           projects/{PROJECT_NUMBER}. If an IAM policy is set on a resource (like VM
     *           instance, Cloud Storage bucket), the project field will indicate the
     *           project that contains the resource. If an IAM policy is set on a folder or
     *           orgnization, the project field will be empty.
     *           To search against the `project`:
     *           * specify the `scope` field as this project in your search request.
     *     @type \Google\Cloud\Iam\V1\Policy $policy
     *           The IAM policy directly set on the given resource. Note that the original
     *           IAM policy can contain multiple bindings. This only contains the bindings
     *           that match the given query. For queries that don't contain a constrain on
     *           policies (e.g., an empty query), this contains all the bindings.
     *           To search against the `policy` bindings:
     *           * use a field query:
     *               - query by the policy contained members. Example:
     *                 `policy:amy&#64;gmail.com`
     *               - query by the policy contained roles. Example:
     *                 `policy:roles/compute.admin`
     *               - query by the policy contained roles' included permissions. Example:
     *                 `policy.role.permissions:compute.instances.create`
     *     @type \Google\Cloud\Asset\V1\IamPolicySearchResult\Explanation $explanation
     *           Explanation about the IAM policy search result. It contains additional
     *           information to explain why the search result matches the query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        parent::__construct($data);
    }

    /**
     * The full resource name of the resource associated with this IAM policy.
     * Example:
     * `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`.
     * See [Cloud Asset Inventory Resource Name
     * Format](https://cloud.google.com/asset-inventory/docs/resource-name-format)
     * for more information.
     * To search against the `resource`:
     * * use a field query. Example: `resource:organizations/123`
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The full resource name of the resource associated with this IAM policy.
     * Example:
     * `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`.
     * See [Cloud Asset Inventory Resource Name
     * Format](https://cloud.google.com/asset-inventory/docs/resource-name-format)
     * for more information.
     * To search against the `resource`:
     * * use a field query. Example: `resource:organizations/123`
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * The project that the associated GCP resource belongs to, in the form of
     * projects/{PROJECT_NUMBER}. If an IAM policy is set on a resource (like VM
     * instance, Cloud Storage bucket), the project field will indicate the
     * project that contains the resource. If an IAM policy is set on a folder or
     * orgnization, the project field will be empty.
     * To search against the `project`:
     * * specify the `scope` field as this project in your search request.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * The project that the associated GCP resource belongs to, in the form of
     * projects/{PROJECT_NUMBER}. If an IAM policy is set on a resource (like VM
     * instance, Cloud Storage bucket), the project field will indicate the
     * project that contains the resource. If an IAM policy is set on a folder or
     * orgnization, the project field will be empty.
     * To search against the `project`:
     * * specify the `scope` field as this project in your search request.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * The IAM policy directly set on the given resource. Note that the original
     * IAM policy can contain multiple bindings. This only contains the bindings
     * that match the given query. For queries that don't contain a constrain on
     * policies (e.g., an empty query), this contains all the bindings.
     * To search against the `policy` bindings:
     * * use a field query:
     *     - query by the policy contained members. Example:
     *       `policy:amy&#64;gmail.com`
     *     - query by the policy contained roles. Example:
     *       `policy:roles/compute.admin`
     *     - query by the policy contained roles' included permissions. Example:
     *       `policy.role.permissions:compute.instances.create`
     *
     * Generated from protobuf field <code>.google.iam.v1.Policy policy = 3;</code>
     * @return \Google\Cloud\Iam\V1\Policy|null
     */
    public function getPolicy()
    {
        return isset($this->policy) ? $this->policy : null;
    }

    public function hasPolicy()
    {
        return isset($this->policy);
    }

    public function clearPolicy()
    {
        unset($this->policy);
    }

    /**
     * The IAM policy directly set on the given resource. Note that the original
     * IAM policy can contain multiple bindings. This only contains the bindings
     * that match the given query. For queries that don't contain a constrain on
     * policies (e.g., an empty query), this contains all the bindings.
     * To search against the `policy` bindings:
     * * use a field query:
     *     - query by the policy contained members. Example:
     *       `policy:amy&#64;gmail.com`
     *     - query by the policy contained roles. Example:
     *       `policy:roles/compute.admin`
     *     - query by the policy contained roles' included permissions. Example:
     *       `policy.role.permissions:compute.instances.create`
     *
     * Generated from protobuf field <code>.google.iam.v1.Policy policy = 3;</code>
     * @param \Google\Cloud\Iam\V1\Policy $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iam\V1\Policy::class);
        $this->policy = $var;

        return $this;
    }

    /**
     * Explanation about the IAM policy search result. It contains additional
     * information to explain why the search result matches the query.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicySearchResult.Explanation explanation = 4;</code>
     * @return \Google\Cloud\Asset\V1\IamPolicySearchResult\Explanation|null
     */
    public function getExplanation()
    {
        return isset($this->explanation) ? $this->explanation : null;
    }

    public function hasExplanation()
    {
        return isset($this->explanation);
    }

    public function clearExplanation()
    {
        unset($this->explanation);
    }

    /**
     * Explanation about the IAM policy search result. It contains additional
     * information to explain why the search result matches the query.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicySearchResult.Explanation explanation = 4;</code>
     * @param \Google\Cloud\Asset\V1\IamPolicySearchResult\Explanation $var
     * @return $this
     */
    public function setExplanation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicySearchResult\Explanation::class);
        $this->explanation = $var;

        return $this;
    }

}

