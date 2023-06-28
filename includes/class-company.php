<?php
/*!
 * Company class.
 *
 * @since 1.0.0
 *
 * @package    cts robert noakes
 * @subpackage Company
 */

if (!defined('ABSPATH'))
{
	exit;
}

/**
 * Class used to implement the Company functionality.
 *
 * @since 1.0.0
 */
final class Company {
	/**
	 * Company employees.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @var    string
	 */
	public $employees;
	
	/**
	 * Constructor function.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @param  array $employees Company employees.
	 * @return void
	 */
	public function __construct( $employees = array() ) {
		$this->employees = $employees;
	}
	
	/**
	 * Add an employee.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @param  Employee $employee Employee to add.
	 * @return void
	 */
	public function add_employee( $employee = null ) {
		if ( !empty( $employee ) ) {
			$this->employees[] = $employee;
		}
	}
	
	/**
	 * Get the employees.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @return void
	 */
	public function get_employees() {
		return $this->employees;
	}
	
	/**
	 * Get the employee count.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @return void
	 */
	public function get_employee_count() {
		return count( $this->employees );
	}
	
	/**
	 * Get the average employee salary.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @return void
	 */
	public function get_average_salary() {
		$total = 0;
		
		foreach ($this->employees as $employee) {
			$total += $employee->get_salary();
		}
		
		return number_format( $total / count( $this->employees ) );
	}
}
