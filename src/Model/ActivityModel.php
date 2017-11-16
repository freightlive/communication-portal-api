<?php
/**
 * ActivityModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalCommunicationPortal
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Communication Portal API
 *
 * Bumbal Communication API documentation
 *
 * OpenAPI spec version: 1.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalCommunicationPortal\Model;

use \ArrayAccess;

/**
 * ActivityModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalCommunicationPortal
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActivityModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ActivityModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nr' => 'string',
        'activity_type_name' => 'string',
        'status_name' => 'string',
        'reference' => 'string',
        'duration' => 'int',
        'date_time_from' => '\DateTime',
        'date_time_to' => '\DateTime',
        'eta_date_time' => '\DateTime',
        'nr_of_activities' => 'int',
        'driver_full_name' => 'string',
        'route_status' => 'string',
        'route_latest_position' => '\BumbalCommunicationPortal\Model\GeoPositionModel',
        'address' => '\BumbalCommunicationPortal\Model\AddressModel',
        'package_lines' => '\BumbalCommunicationPortal\Model\PackageLineModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nr' => null,
        'activity_type_name' => null,
        'status_name' => null,
        'reference' => null,
        'duration' => null,
        'date_time_from' => 'date-time',
        'date_time_to' => 'date-time',
        'eta_date_time' => 'date-time',
        'nr_of_activities' => null,
        'driver_full_name' => null,
        'route_status' => null,
        'route_latest_position' => null,
        'address' => null,
        'package_lines' => null
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
        'nr' => 'nr',
        'activity_type_name' => 'activity_type_name',
        'status_name' => 'status_name',
        'reference' => 'reference',
        'duration' => 'duration',
        'date_time_from' => 'date_time_from',
        'date_time_to' => 'date_time_to',
        'eta_date_time' => 'eta_date_time',
        'nr_of_activities' => 'nr_of_activities',
        'driver_full_name' => 'driver_full_name',
        'route_status' => 'route_status',
        'route_latest_position' => 'route_latest_position',
        'address' => 'address',
        'package_lines' => 'package_lines'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'nr' => 'setNr',
        'activity_type_name' => 'setActivityTypeName',
        'status_name' => 'setStatusName',
        'reference' => 'setReference',
        'duration' => 'setDuration',
        'date_time_from' => 'setDateTimeFrom',
        'date_time_to' => 'setDateTimeTo',
        'eta_date_time' => 'setEtaDateTime',
        'nr_of_activities' => 'setNrOfActivities',
        'driver_full_name' => 'setDriverFullName',
        'route_status' => 'setRouteStatus',
        'route_latest_position' => 'setRouteLatestPosition',
        'address' => 'setAddress',
        'package_lines' => 'setPackageLines'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'nr' => 'getNr',
        'activity_type_name' => 'getActivityTypeName',
        'status_name' => 'getStatusName',
        'reference' => 'getReference',
        'duration' => 'getDuration',
        'date_time_from' => 'getDateTimeFrom',
        'date_time_to' => 'getDateTimeTo',
        'eta_date_time' => 'getEtaDateTime',
        'nr_of_activities' => 'getNrOfActivities',
        'driver_full_name' => 'getDriverFullName',
        'route_status' => 'getRouteStatus',
        'route_latest_position' => 'getRouteLatestPosition',
        'address' => 'getAddress',
        'package_lines' => 'getPackageLines'
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
        $this->container['nr'] = isset($data['nr']) ? $data['nr'] : null;
        $this->container['activity_type_name'] = isset($data['activity_type_name']) ? $data['activity_type_name'] : null;
        $this->container['status_name'] = isset($data['status_name']) ? $data['status_name'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['date_time_from'] = isset($data['date_time_from']) ? $data['date_time_from'] : null;
        $this->container['date_time_to'] = isset($data['date_time_to']) ? $data['date_time_to'] : null;
        $this->container['eta_date_time'] = isset($data['eta_date_time']) ? $data['eta_date_time'] : null;
        $this->container['nr_of_activities'] = isset($data['nr_of_activities']) ? $data['nr_of_activities'] : null;
        $this->container['driver_full_name'] = isset($data['driver_full_name']) ? $data['driver_full_name'] : null;
        $this->container['route_status'] = isset($data['route_status']) ? $data['route_status'] : null;
        $this->container['route_latest_position'] = isset($data['route_latest_position']) ? $data['route_latest_position'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['package_lines'] = isset($data['package_lines']) ? $data['package_lines'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets nr
     * @return string
     */
    public function getNr()
    {
        return $this->container['nr'];
    }

    /**
     * Sets nr
     * @param string $nr Number of this Activity
     * @return $this
     */
    public function setNr($nr)
    {
        $this->container['nr'] = $nr;

        return $this;
    }

    /**
     * Gets activity_type_name
     * @return string
     */
    public function getActivityTypeName()
    {
        return $this->container['activity_type_name'];
    }

    /**
     * Sets activity_type_name
     * @param string $activity_type_name Type of this Activity
     * @return $this
     */
    public function setActivityTypeName($activity_type_name)
    {
        $this->container['activity_type_name'] = $activity_type_name;

        return $this;
    }

    /**
     * Gets status_name
     * @return string
     */
    public function getStatusName()
    {
        return $this->container['status_name'];
    }

    /**
     * Sets status_name
     * @param string $status_name Status of this Activity
     * @return $this
     */
    public function setStatusName($status_name)
    {
        $this->container['status_name'] = $status_name;

        return $this;
    }

    /**
     * Gets reference
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     * @param string $reference Reference number
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration Max duration of the activity in minutes
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets date_time_from
     * @return \DateTime
     */
    public function getDateTimeFrom()
    {
        return $this->container['date_time_from'];
    }

    /**
     * Sets date_time_from
     * @param \DateTime $date_time_from Planned start time of this activity
     * @return $this
     */
    public function setDateTimeFrom($date_time_from)
    {
        $this->container['date_time_from'] = $date_time_from;

        return $this;
    }

    /**
     * Gets date_time_to
     * @return \DateTime
     */
    public function getDateTimeTo()
    {
        return $this->container['date_time_to'];
    }

    /**
     * Sets date_time_to
     * @param \DateTime $date_time_to Planned stop time of this activity
     * @return $this
     */
    public function setDateTimeTo($date_time_to)
    {
        $this->container['date_time_to'] = $date_time_to;

        return $this;
    }

    /**
     * Gets eta_date_time
     * @return \DateTime
     */
    public function getEtaDateTime()
    {
        return $this->container['eta_date_time'];
    }

    /**
     * Sets eta_date_time
     * @param \DateTime $eta_date_time ETA date time
     * @return $this
     */
    public function setEtaDateTime($eta_date_time)
    {
        $this->container['eta_date_time'] = $eta_date_time;

        return $this;
    }

    /**
     * Gets nr_of_activities
     * @return int
     */
    public function getNrOfActivities()
    {
        return $this->container['nr_of_activities'];
    }

    /**
     * Sets nr_of_activities
     * @param int $nr_of_activities Number of activities preceding this one
     * @return $this
     */
    public function setNrOfActivities($nr_of_activities)
    {
        $this->container['nr_of_activities'] = $nr_of_activities;

        return $this;
    }

    /**
     * Gets driver_full_name
     * @return string
     */
    public function getDriverFullName()
    {
        return $this->container['driver_full_name'];
    }

    /**
     * Sets driver_full_name
     * @param string $driver_full_name Name of the driver assigned to this route
     * @return $this
     */
    public function setDriverFullName($driver_full_name)
    {
        $this->container['driver_full_name'] = $driver_full_name;

        return $this;
    }

    /**
     * Gets route_status
     * @return string
     */
    public function getRouteStatus()
    {
        return $this->container['route_status'];
    }

    /**
     * Sets route_status
     * @param string $route_status Status of the Route this Activity is planned on
     * @return $this
     */
    public function setRouteStatus($route_status)
    {
        $this->container['route_status'] = $route_status;

        return $this;
    }

    /**
     * Gets route_latest_position
     * @return \BumbalCommunicationPortal\Model\GeoPositionModel
     */
    public function getRouteLatestPosition()
    {
        return $this->container['route_latest_position'];
    }

    /**
     * Sets route_latest_position
     * @param \BumbalCommunicationPortal\Model\GeoPositionModel $route_latest_position
     * @return $this
     */
    public function setRouteLatestPosition($route_latest_position)
    {
        $this->container['route_latest_position'] = $route_latest_position;

        return $this;
    }

    /**
     * Gets address
     * @return \BumbalCommunicationPortal\Model\AddressModel
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \BumbalCommunicationPortal\Model\AddressModel $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets package_lines
     * @return \BumbalCommunicationPortal\Model\PackageLineModel[]
     */
    public function getPackageLines()
    {
        return $this->container['package_lines'];
    }

    /**
     * Sets package_lines
     * @param \BumbalCommunicationPortal\Model\PackageLineModel[] $package_lines
     * @return $this
     */
    public function setPackageLines($package_lines)
    {
        $this->container['package_lines'] = $package_lines;

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
            return json_encode(\BumbalCommunicationPortal\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BumbalCommunicationPortal\ObjectSerializer::sanitizeForSerialization($this));
    }
}


