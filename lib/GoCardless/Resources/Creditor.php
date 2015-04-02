<?php

/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Resources;

/**
  *  Each
  *  [payment](https://developer.gocardless.com/pro/#api-endpoints-payments)
  *  taken through the API is linked to a "creditor", to whom the payment is
  *  then paid out. In most cases your organisation will have a single
  *  "creditor", but the API also supports collecting payments on behalf of
  *  others.
  *  
  *  Please get in touch if you wish to use this endpoint.
  *  Currently, for Anti Money Laundering reasons, any creditors you add must be
  *  directly related to your organisation.
  */
class Creditor
{
  
    
    private $data;
    private $response;

    public function __construct($data, $response = null)
    {
      if ($data === null)
      {
        throw new \Exception('Data cannot be null');
      }
      $this->response = $response;
      $this->data = $data;
    }
  
    
    
    public function address_line1()
    {
      return $this->data->address_line1;
    }
  
    
    public function address_line2()
    {
      return $this->data->address_line2;
    }
  
    
    public function address_line3()
    {
      return $this->data->address_line3;
    }
  
    
    public function city()
    {
      return $this->data->city;
    }
  
    
    public function country_code()
    {
      return $this->data->country_code;
    }
  
    
    public function created_at()
    {
      return $this->data->created_at;
    }
  
    
    public function id()
    {
      return $this->data->id;
    }
  
    
    public function links()
    {
      return $this->data->links;
    }
  
    
    public function name()
    {
      return $this->data->name;
    }
  
    
    public function postal_code()
    {
      return $this->data->postal_code;
    }
  
    
    public function region()
    {
      return $this->data->region;
    }
  
    
    public function response() {
      return $this->response;
    }


}
