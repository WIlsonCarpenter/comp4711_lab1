<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Represents a student with a name, emails, and grades.
 *
 * @author Wilson Carpenter
 */
class Student {
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    } 
    
    /**
     * Add an email the the student
     * @param string $which the type of email (home, work, etc...)
     * @param string $address the corresponding email address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * Add a grade to the student
     * @param int|float $grade the grade to add
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    } 
    
    /**
     * Calculate the student's grade average
     * @return int|float
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        
        return $total / count($this->grades);
    } 
    
    /**
     * Return a formatted version of the student with all information
     * @return string
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        
        foreach($this->emails as $which=>$what) {
            $result .= $which . ': '. $what. "\n";
        }
        $result .= "\n";
        
        return '<pre>'.$result.'</pre>';
    } 
}
