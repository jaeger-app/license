<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./License.php
 */
namespace JaegerApp;

/**
 * Jaeger - Licensing Object
 *
 * Contains the methods for validating the host system
 *
 * @package License
 * @author Eric Lamb <eric@mithra62.com>
 */
class License
{

    /**
     * The Setting object
     * 
     * @var \JaegerApp\Settings
     */
    protected $setting = null;

    /**
     * Sets the Setting object
     * 
     * @param \JaegerApp\Settings $settings            
     * @return \JaegerApp\License
     */
    public function setSetting(\JaegerApp\Settings $settings)
    {
        $this->setting = $settings;
        return $this;
    }

    /**
     * Validates a license number is valid
     * 
     * @param string $license            
     * @return number
     */
    public function validLicense($license)
    {
        return preg_match("/^([a-z0-9]{8})-([a-z0-9]{4})-([a-z0-9]{4})-([a-z0-9]{4})-([a-z0-9]{12})$/", $license);
    }
}