<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardlessPro\Resources;

/**
  * Mandate PDFs allow you to easily display [scheme-rules
  * compliant](#ui-compliance-requirements) Direct Debit mandates to your
  * customers.
  */
class MandatePdf extends Base
{



  /**
    * The date and time at which the `url` will expire (30 minutes after the
    * original request).
    *
    * @return string
    */
    public function expires_at()
    {
        $field = 'expires_at';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * The URL at which this mandate PDF can be viewed until it expires at the
    * date and time specified by `expires_at`. You should not store this URL or
    * rely on its structure remaining the same.
    *
    * @return string
    */
    public function url()
    {
        $field = 'url';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }


  /**
    * Returns a string representation of the project.
    *
    * @return string 
    */
    public function __toString()
    {
        $ret = 'MandatePdf Class (';
        $ret .= print_r($this->data, true);
        return $ret;
    }
}