<?php
/*!
 * Employee class.
 *
 * @since 1.0.0
 *
 * @package    cts robert noakes
 * @subpackage Employee
 */

if (!defined('ABSPATH'))
{
	exit;
}

/**
 * Class used to implement the Employee functionality.
 *
 * @since 1.0.0
 */
final class Employee {
	/**
	 * Employee's name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @var    string
	 */
	public $name;
	
	/**
	 * Employee's position.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @var    string
	 */
	public $position;
	
	/**
	 * Employee's salary.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @var    float
	 */
	public $salary;
	
	/**
	 * Constructor function.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @param  string $name     Employee's name.
	 * @param  string $position Employee's position.
	 * @param  string $salary   Employee's salary.
	 * @return void
	 */
	public function __construct( $name = '', $position = '', $salary = '' ) {
		$this->name = $name;
		$this->position = $position;
		$this->salary = $salary;
	}
	
	/**
	 * Get the employee's name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @return void
	 */
	public function get_name() {
		return $this->name;
	}
	
	/**
	 * Get the employee's position.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @return void
	 */
	public function get_position() {
		return $this->position;
	}
	
	/**
	 * Get the employee's salary.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @return void
	 */
	public function get_salary() {
		return $this->salary;
	}
	
	/**
	 * Get the employee's information.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @return void
	 */
	public function get_employee_info() {
		return esc_html($this->name) . '<br />'
		. esc_html($this->position) . '<br />'
		. sprintf(
			_x( '$%1$f/yr.', 'Salary', 'cts-robert-noakes' ),
			number_format($this->salary)
		);
	}
}
