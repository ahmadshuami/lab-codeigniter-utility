<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Utility
 * 
 * @package     Library (CodeIgniter 3)
 * @author     	Ahmad Shuami  <shuamilabs@gmail.com>
 * @copyright   Copyright (c) 2019, Ahmad Shuami
 * 
 * @license     MIT License     <https://opensource.org/licenses/MIT>
 * @link        https://shuamilabs.blogspot.com
 * @link        https://github.com/ahmadshuami/lab-codeigniter-utility
 * 
 * @version     1.0.4
 */
class Utility {

    protected $myUtility;

    /**
     * __construct
     * 
     */
    public function __construct()
    {
        $this->myUtility =& get_instance();
    }

    /**
     * Reset crsf token.
     *
     * @return array
     */
    public function new_csrf() 
    {
        $csrf_name = $this->myUtility->security->get_csrf_token_name();
        $csrf_hash = $this->myUtility->security->get_csrf_hash();

        // csrf_name: This name is based on what has been declared in config.php file
        echo json_encode(['csrf_name' => $csrf_name, 'csrf_hash' => $csrf_hash]);
    }

    /**
     * Return month in Bahasa Malaysia.
     *
     * @param  string $mydate
     * @return string $returnMonth
     */
    public function custom_month($myDate)
    {
        $arrMonth = [
            ['January','Januari'],
            ['February','Februari'],
            ['March','Mac'],
            ['April','April'],
            ['May','Mei'],
            ['June','Jun'],
            ['July','Julai'],
            ['August','Ogos'],
            ['September','September'],
            ['October','Oktober'],
            ['November','November'],
            ['December','Disember']
        ];

        foreach ($arrMonth as $month) {
            if (date("F", strtotime($myDate)) == $month[0]) {
                $returnMonth = str_replace($month[0], $month[1], date("d F Y", strtotime($myDate)));
            }
        }

        return $returnMonth;
    }

    /**
     * Return day in Bahasa Malaysia.
     *
     * @param  string $myDay
     * @return string $returnDay
     */
    public function custom_day($myDay)
    {
        $arrDay = [
            ['Sunday','Ahad'],
            ['Monday','Isnin'],
            ['Tuesday','Selasa'],
            ['Wednesday','Rabu'],
            ['Thursday','Khamis'],
            ['Friday','Jumaat'],
            ['Saturday','Sabtu']
        ];

        foreach ($arrDay as $day) {
            if(date("l", strtotime($myDay)) == $day[0]) {
                $returnDay = str_replace($day[0], $day[1], date("l", strtotime($myDay)));
            }
        }

        return $returnDay;
    }
}
