<?php

/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Resources;

/**
  *  Customer objects hold the contact details for a customer. A customer can
  *  have several [customer bank
  *  accounts](https://developer.gocardless.com/pro/#api-endpoints-customer-bank-accounts),
  *  which in turn can have several Direct Debit
  *  [mandates](https://developer.gocardless.com/pro/#api-endpoints-mandates).
  */
class Customer
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
  
    
    public function email()
    {
      return $this->data->email;
    }
  
    
    public function family_name()
    {
      return $this->data->family_name;
    }
  
    
    public function given_name()
    {
      return $this->data->given_name;
    }
  
    
    public function id()
    {
      return $this->data->id;
    }
  
    
    public function metadata()
    {
      return $this->data->metadata;
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
