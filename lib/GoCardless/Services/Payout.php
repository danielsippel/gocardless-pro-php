<?php

/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Services;



/**
  *  Payouts represent transfers from GoCardless to a
  *  [creditor](https://developer.gocardless.com/pro/#api-endpoints-creditors).
  *  Each payout contains the funds collected from one or many
  *  [payments](https://developer.gocardless.com/pro/#api-endpoints-payments).
  *  Payouts are created automatically after a payment has been successfully
  *  collected.
  */
class Payout extends Base
{
  
  /**
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/#overview-cursor-pagination)
    *  list of your payouts.
    *
    *  Example URL: /payouts
    **/
    
    public function dolist($options = array())
    {

      return $this->makeRequest("get", "/payouts", $options);
    }

  /**
    *  Retrieves the details of a single payout.
    *
    *  Example URL: /payouts/:identity
    *  
    *  @param identity:  Unique identifier, beginning with "PO"
    **/
    
    public function doget($identity, $options = array())
    {

      $path = $this->subUrl("/payouts/%v", array(
        "identity" => $identity
      ));

      return $this->makeRequest("get", $path, $options);
    }



   protected function resourceClass() {
     return '\GoCardless\Resources\Payout';
   }

  /**
    *  Get the key the response object is enclosed in in JSON.
    */
    protected function envelopeKey()
    {
      return "payouts";
    }

}
