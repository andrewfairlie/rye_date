<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WD+P Date
*
* @package     ExpressionEngine
* @category    Plugin
* @author      WD+P
* @copyright   Copyright (c) 2015, Andrew Fairlie
* @link        http://wdandp.co.uk/
*/

$plugin_info = array(
'pi_name'         => 'WD+P Date',
'pi_version'      => '1.0',
'pi_author'       => 'WD+P',
'pi_author_url'   => 'http://wdandp.co.uk/',
'pi_description'  => 'Lets you use ExpressionEngine date formatting on any date string'
);

class Wdandp_date {
  public $return_data = "";

  public function __construct()
  {
    $this->EE =& get_instance();
    $date = $this->EE->TMPL->fetch_param('date');
    $format = $this->EE->TMPL->fetch_param('format');
    $this->return_data = $this->EE->localize->format_date($format, $date);
  }
}
