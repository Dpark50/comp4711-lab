<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 2017-09-07
 * Time: 4:35 PM
 */

class Student {
    /* Student constructor */
    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /* Add email to the emails array */
    function add_email($which, $address)
    {
        $this->emails[$which] = $address;
    }

    /* Add grades to the grades array */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /* Calculates the average grade */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /* String representation of the student that includes their full name, average grade, and emails */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}