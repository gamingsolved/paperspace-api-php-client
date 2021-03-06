<?php
/**
 * CreateMachineParams
 *
 * PHP version 5
 *
 * @category Class
 * @package  Gamingsolved\Paperspace\Api\Client\Version0_1_3
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Paperspace REST API
 *
 * Inofficial Swagger representation of the [Paperspace REST API](https://paperspace.github.io/paperspace-node/), provided by the [GamingSolved Paperspace API PHP Client project](https://github.com/gamingsolved/paperspace-api-php-client).
 *
 * OpenAPI spec version: 0.1.3
 * Contact: info@gamingsolved.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model;

use \ArrayAccess;

/**
 * CreateMachineParams Class Doc Comment
 *
 * @category    Class
 * @package     Gamingsolved\Paperspace\Api\Client\Version0_1_3
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateMachineParams implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateMachineParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'region' => 'string',
        'machineType' => 'string',
        'size' => 'int',
        'billingType' => 'string',
        'machineName' => 'string',
        'templateId' => 'string',
        'assignPublicIp' => 'bool',
        'networkId' => 'string',
        'teamId' => 'string',
        'userId' => 'string',
        'email' => 'string',
        'password' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'notificationEmail' => 'string',
        'scriptId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'region' => null,
        'machineType' => null,
        'size' => 'int32',
        'billingType' => null,
        'machineName' => null,
        'templateId' => null,
        'assignPublicIp' => null,
        'networkId' => null,
        'teamId' => null,
        'userId' => null,
        'email' => null,
        'password' => null,
        'firstName' => null,
        'lastName' => null,
        'notificationEmail' => null,
        'scriptId' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'region' => 'region',
        'machineType' => 'machineType',
        'size' => 'size',
        'billingType' => 'billingType',
        'machineName' => 'machineName',
        'templateId' => 'templateId',
        'assignPublicIp' => 'assignPublicIp',
        'networkId' => 'networkId',
        'teamId' => 'teamId',
        'userId' => 'userId',
        'email' => 'email',
        'password' => 'password',
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'notificationEmail' => 'notificationEmail',
        'scriptId' => 'scriptId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'region' => 'setRegion',
        'machineType' => 'setMachineType',
        'size' => 'setSize',
        'billingType' => 'setBillingType',
        'machineName' => 'setMachineName',
        'templateId' => 'setTemplateId',
        'assignPublicIp' => 'setAssignPublicIp',
        'networkId' => 'setNetworkId',
        'teamId' => 'setTeamId',
        'userId' => 'setUserId',
        'email' => 'setEmail',
        'password' => 'setPassword',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'notificationEmail' => 'setNotificationEmail',
        'scriptId' => 'setScriptId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'region' => 'getRegion',
        'machineType' => 'getMachineType',
        'size' => 'getSize',
        'billingType' => 'getBillingType',
        'machineName' => 'getMachineName',
        'templateId' => 'getTemplateId',
        'assignPublicIp' => 'getAssignPublicIp',
        'networkId' => 'getNetworkId',
        'teamId' => 'getTeamId',
        'userId' => 'getUserId',
        'email' => 'getEmail',
        'password' => 'getPassword',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'notificationEmail' => 'getNotificationEmail',
        'scriptId' => 'getScriptId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const REGION_EAST_COAST__NY2 = 'East Coast (NY2)';
    const REGION_WEST_COAST__CA1 = 'West Coast (CA1)';
    const MACHINE_TYPE_AIR = 'Air';
    const MACHINE_TYPE_STANDARD = 'Standard';
    const MACHINE_TYPE_PRO = 'Pro';
    const MACHINE_TYPE_ADVANCED = 'Advanced';
    const MACHINE_TYPE_GPU = 'GPU+';
    const MACHINE_TYPE_P5000 = 'P5000';
    const MACHINE_TYPE_C1 = 'C1';
    const MACHINE_TYPE_C2 = 'C2';
    const MACHINE_TYPE_C3 = 'C3';
    const MACHINE_TYPE_C4 = 'C4';
    const MACHINE_TYPE_C5 = 'C5';
    const MACHINE_TYPE_C6 = 'C6';
    const MACHINE_TYPE_C7 = 'C7';
    const MACHINE_TYPE_C8 = 'C8';
    const MACHINE_TYPE_C9 = 'C9';
    const MACHINE_TYPE_C10 = 'C10';
    const BILLING_TYPE_HOURLY = 'hourly';
    const BILLING_TYPE_MONTHLY = 'monthly';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRegionAllowableValues()
    {
        return [
            self::REGION_EAST_COAST__NY2,
            self::REGION_WEST_COAST__CA1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMachineTypeAllowableValues()
    {
        return [
            self::MACHINE_TYPE_AIR,
            self::MACHINE_TYPE_STANDARD,
            self::MACHINE_TYPE_PRO,
            self::MACHINE_TYPE_ADVANCED,
            self::MACHINE_TYPE_GPU,
            self::MACHINE_TYPE_P5000,
            self::MACHINE_TYPE_C1,
            self::MACHINE_TYPE_C2,
            self::MACHINE_TYPE_C3,
            self::MACHINE_TYPE_C4,
            self::MACHINE_TYPE_C5,
            self::MACHINE_TYPE_C6,
            self::MACHINE_TYPE_C7,
            self::MACHINE_TYPE_C8,
            self::MACHINE_TYPE_C9,
            self::MACHINE_TYPE_C10,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getBillingTypeAllowableValues()
    {
        return [
            self::BILLING_TYPE_HOURLY,
            self::BILLING_TYPE_MONTHLY,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['machineType'] = isset($data['machineType']) ? $data['machineType'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['billingType'] = isset($data['billingType']) ? $data['billingType'] : null;
        $this->container['machineName'] = isset($data['machineName']) ? $data['machineName'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['assignPublicIp'] = isset($data['assignPublicIp']) ? $data['assignPublicIp'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['notificationEmail'] = isset($data['notificationEmail']) ? $data['notificationEmail'] : null;
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['region'] === null) {
            $invalid_properties[] = "'region' can't be null";
        }
        $allowed_values = $this->getRegionAllowableValues();
        if (!in_array($this->container['region'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'region', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['machineType'] === null) {
            $invalid_properties[] = "'machineType' can't be null";
        }
        $allowed_values = $this->getMachineTypeAllowableValues();
        if (!in_array($this->container['machineType'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'machineType', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['size'] === null) {
            $invalid_properties[] = "'size' can't be null";
        }
        if ($this->container['billingType'] === null) {
            $invalid_properties[] = "'billingType' can't be null";
        }
        $allowed_values = $this->getBillingTypeAllowableValues();
        if (!in_array($this->container['billingType'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'billingType', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['machineName'] === null) {
            $invalid_properties[] = "'machineName' can't be null";
        }
        if ($this->container['templateId'] === null) {
            $invalid_properties[] = "'templateId' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['region'] === null) {
            return false;
        }
        $allowed_values = $this->getRegionAllowableValues();
        if (!in_array($this->container['region'], $allowed_values)) {
            return false;
        }
        if ($this->container['machineType'] === null) {
            return false;
        }
        $allowed_values = $this->getMachineTypeAllowableValues();
        if (!in_array($this->container['machineType'], $allowed_values)) {
            return false;
        }
        if ($this->container['size'] === null) {
            return false;
        }
        if ($this->container['billingType'] === null) {
            return false;
        }
        $allowed_values = $this->getBillingTypeAllowableValues();
        if (!in_array($this->container['billingType'], $allowed_values)) {
            return false;
        }
        if ($this->container['machineName'] === null) {
            return false;
        }
        if ($this->container['templateId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $allowed_values = $this->getRegionAllowableValues();
        if (!in_array($region, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'region', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets machineType
     * @return string
     */
    public function getMachineType()
    {
        return $this->container['machineType'];
    }

    /**
     * Sets machineType
     * @param string $machineType
     * @return $this
     */
    public function setMachineType($machineType)
    {
        $allowed_values = $this->getMachineTypeAllowableValues();
        if (!in_array($machineType, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'machineType', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['machineType'] = $machineType;

        return $this;
    }

    /**
     * Gets size
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param int $size Storage size for the machine in GB
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets billingType
     * @return string
     */
    public function getBillingType()
    {
        return $this->container['billingType'];
    }

    /**
     * Sets billingType
     * @param string $billingType Either 'monthly' or 'hourly' billing
     * @return $this
     */
    public function setBillingType($billingType)
    {
        $allowed_values = $this->getBillingTypeAllowableValues();
        if (!in_array($billingType, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'billingType', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['billingType'] = $billingType;

        return $this;
    }

    /**
     * Gets machineName
     * @return string
     */
    public function getMachineName()
    {
        return $this->container['machineName'];
    }

    /**
     * Sets machineName
     * @param string $machineName A memorable name for this machine
     * @return $this
     */
    public function setMachineName($machineName)
    {
        $this->container['machineName'] = $machineName;

        return $this;
    }

    /**
     * Gets templateId
     * @return string
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     * @param string $templateId Template id of the template to use for creating this machine
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets assignPublicIp
     * @return bool
     */
    public function getAssignPublicIp()
    {
        return $this->container['assignPublicIp'];
    }

    /**
     * Sets assignPublicIp
     * @param bool $assignPublicIp Assign a new public ip address on machine creation
     * @return $this
     */
    public function setAssignPublicIp($assignPublicIp)
    {
        $this->container['assignPublicIp'] = $assignPublicIp;

        return $this;
    }

    /**
     * Gets networkId
     * @return string
     */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
     * Sets networkId
     * @param string $networkId If creating on a specific network, specify its id
     * @return $this
     */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;

        return $this;
    }

    /**
     * Gets teamId
     * @return string
     */
    public function getTeamId()
    {
        return $this->container['teamId'];
    }

    /**
     * Sets teamId
     * @param string $teamId If creating the machine for a team, specify the team id
     * @return $this
     */
    public function setTeamId($teamId)
    {
        $this->container['teamId'] = $teamId;

        return $this;
    }

    /**
     * Gets userId
     * @return string
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     * @param string $userId If assigning to an existing user other than yourself, specify the user id
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email If creating a new user for this machine, specify their email address
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password If creating a new user, specify their password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets firstName
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     * @param string $firstName If creating a new user, specify their first name
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     * @param string $lastName If creating a new user, specify their last name
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets notificationEmail
     * @return string
     */
    public function getNotificationEmail()
    {
        return $this->container['notificationEmail'];
    }

    /**
     * Sets notificationEmail
     * @param string $notificationEmail Send a notification to this email address when complete
     * @return $this
     */
    public function setNotificationEmail($notificationEmail)
    {
        $this->container['notificationEmail'] = $notificationEmail;

        return $this;
    }

    /**
     * Gets scriptId
     * @return string
     */
    public function getScriptId()
    {
        return $this->container['scriptId'];
    }

    /**
     * Sets scriptId
     * @param string $scriptId The script id of a script to be run on startup
     * @return $this
     */
    public function setScriptId($scriptId)
    {
        $this->container['scriptId'] = $scriptId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Gamingsolved\Paperspace\Api\Client\Version0_1_3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Gamingsolved\Paperspace\Api\Client\Version0_1_3\ObjectSerializer::sanitizeForSerialization($this));
    }
}


