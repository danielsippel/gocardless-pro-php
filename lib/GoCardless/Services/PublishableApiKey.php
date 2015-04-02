<?php

/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Services;



/**
  *  Publishable API keys are designed to be used by the [js
  *  flow](https://developer.gocardless.com/pro/#api-endpoints-customer-bank-account-tokens).
  *  You should generate a key and then use it to make requests to the API. They
  *  do not expire, but can be disabled.
  *  
  *  Publishable API keys only
  *  have permissions to create [customer bank account
  *  tokens](https://developer.gocardless.com/pro/#api-endpoints-customer-bank-account-tokens).
  */
class PublishableApiKey extends Base
{
  
  /**
    *  Creates a publishable API key object.
    *
    *  Example URL: /publishable_api_keys
    **/
    
    public function docreate($options = array())
    {

      return $this->makeRequest("post", "/publishable_api_keys", $options);
    }

  /**
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/#overview-cursor-pagination)
    *  list of your publishable API keys
    *
    *  Example URL: /publishable_api_keys
    **/
    
    public function dolist($options = array())
    {

      return $this->makeRequest("get", "/publishable_api_keys", $options);
    }

  /**
    *  Returns all details about a single publishable API key
    *
    *  Example URL: /publishable_api_key/:identity
    *  
    *  @param identity:  Unique identifier, beginning with "PK"
    **/
    
    public function doget($identity, $options = array())
    {

      $path = $this->subUrl("/publishable_api_key/%v", array(
        "identity" => $identity
      ));

      return $this->makeRequest("get", $path, $options);
    }

  /**
    *  Updates a publishable API key. Only the `name` fields are supported. Any
    *  other fields passed will be ignored.
    *
    *  Example URL: /publishable_api_keys/:identity
    *  
    *  @param identity:  Unique identifier, beginning with "PK"
    **/
    
    public function doupdate($identity, $options = array())
    {

      $path = $this->subUrl("/publishable_api_keys/%v", array(
        "identity" => $identity
      ));

      return $this->makeRequest("put", $path, $options);
    }

  /**
    *  Disables a publishable API key. Once disabled, the publishable API key
    *  will not be usable to authenticate any requests.
    *
    *  Example URL: /publishable_api_keys/:identity/actions/disable
    *  
    *  @param identity:  Unique identifier, beginning with "PK"
    **/
    
    public function dodisable($identity, $options = array())
    {

      $path = $this->subUrl("/publishable_api_keys/%v/actions/disable", array(
        "identity" => $identity
      ));

      return $this->makeRequest("post", $path, $options);
    }



   protected function resourceClass() {
     return '\GoCardless\Resources\PublishableApiKey';
   }

  /**
    *  Get the key the response object is enclosed in in JSON.
    */
    protected function envelopeKey()
    {
      return "publishable_api_keys";
    }

}
