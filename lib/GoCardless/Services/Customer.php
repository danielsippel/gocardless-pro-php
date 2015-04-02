<?php

/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Services;



/**
  *  Customer objects hold the contact details for a customer. A customer can
  *  have several [customer bank
  *  accounts](https://developer.gocardless.com/pro/#api-endpoints-customer-bank-accounts),
  *  which in turn can have several Direct Debit
  *  [mandates](https://developer.gocardless.com/pro/#api-endpoints-mandates).
  */
class Customer extends Base
{
  
  /**
    *  Creates a new customer object.
    *
    *  Example URL: /customers
    **/
    
    public function docreate($options = array())
    {

      return $this->makeRequest("post", "/customers", $options);
    }

  /**
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/#overview-cursor-pagination)
    *  list of your customers.
    *
    *  Example URL: /customers
    **/
    
    public function dolist($options = array())
    {

      return $this->makeRequest("get", "/customers", $options);
    }

  /**
    *  Retrieves the details of an existing customer.
    *
    *  Example URL: /customers/:identity
    *  
    *  @param identity:  Unique identifier, beginning with "CU".
    **/
    
    public function doget($identity, $options = array())
    {

      $path = $this->subUrl("/customers/%v", array(
        "identity" => $identity
      ));

      return $this->makeRequest("get", $path, $options);
    }

  /**
    *  Updates a customer object. Supports all of the fields supported when
    *  creating a customer.
    *
    *  Example URL: /customers/:identity
    *  
    *  @param identity:  Unique identifier, beginning with "CU".
    **/
    
    public function doupdate($identity, $options = array())
    {

      $path = $this->subUrl("/customers/%v", array(
        "identity" => $identity
      ));

      return $this->makeRequest("put", $path, $options);
    }



   protected function resourceClass() {
     return '\GoCardless\Resources\Customer';
   }

  /**
    *  Get the key the response object is enclosed in in JSON.
    */
    protected function envelopeKey()
    {
      return "customers";
    }

}
