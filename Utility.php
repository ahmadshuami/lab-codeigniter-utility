<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Utility
 * 
 * @package     Library
 * @author     	Ahmad Shuami  <shuami79@yahoo.com>
 * @copyright   Copyright (c) 2019, Ahmad Shuami
 * 
 * @license     MIT License     <https://opensource.org/licenses/MIT>
 * @link        https://www.bicarailmu.com
 * @link        https://github.com/ahmadshuami/lab-codeigniter-utility
 * 
 * @version     1.0.4
 */
class Utility {

    protected $myUtility;

    public function __construct()
    {
        $this->myUtility =& get_instance();
    }

    /**
     * new_csrf
     * 
     * Reset crsf token
     *
     * @return mixed
     */
    public function new_csrf() 
    {
        $csrf_name = $this->myUtility->security->get_csrf_token_name();
        $csrf_hash = $this->myUtility->security->get_csrf_hash();

        // csrf_name => change it accordingly in config.php file
        echo json_encode(['csrf_name' => $csrf_name, 'csrf_hash' => $csrf_hash]);
    }

    /**
     * custom_month
     * 
     * Return month in Bahasa Malaysia
     *
     * @param  string $mydate
     *
     * @return string
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
     * custom_day
     * 
     * Return day in Bahasa Malaysia
     *
     * @param  string $myday
     *
     * @return void
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
