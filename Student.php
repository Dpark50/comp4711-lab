<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 2017-09-07
 * Time: 4:35 PM
 */

class Student {
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
}