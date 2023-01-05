<?php

namespace FacebookAds\Object\ServerSide;


/**
 * Server side response to a custom endpoint
 */
class CustomEndpointResponse {
    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $param_types = array(
        'message' => 'string',
        'response_code' => 'string'
    );

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null) {
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['response_code'] = isset($data['response_code']) ? $data['response_code'] : null;
    }

    /**
     * Gets the string representation of the object
     * @return string
     */
    public function __toString() {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode($this, JSON_PRETTY_PRINT);
        }
        return json_encode($this);
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage(): string {
        return $this->container['message'];
    }

    /**
     * Gets response code
     * @return string
     */
    public function getResponseCode(): ?string {
        return $this->container['response_code'];
    }
}
