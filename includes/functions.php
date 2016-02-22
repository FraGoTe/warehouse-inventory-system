<?php

use Zend\I18n\Translator\Translator;

$errors = array();

/**
 * Function for Remove escapes special
 * characters in a string for use in an SQL statement
 * 
 * @global resource $con
 * @param string $str
 * @return mixed
 */
function real_escape($str)
{
    global $con;
    $escape = mysqli_real_escape_string($con, $str);
    
    return $escape;
}

/**
 * Function for Remove html characters
 * 
 * @param string $str
 * @return string
 */
function remove_junk($str)
{
    $str = nl2br($str);
    $str = htmlspecialchars(strip_tags($str, ENT_QUOTES));
    
    return $str;
}

/**
 * Function for Uppercase first character
 * 
 * @param string $str
 * @return string
 */
function first_character($str)
{
    $val = str_replace('-', " ", $str);
    $val = ucfirst($val);
    
    return $val;
}

/**
 * Function for Checking input fields not empty
 * 
 * @global string $errors
 * @param string $var
 * @return string
 */
function validate_fields($var)
{
    global $errors;
    foreach ($var as $field) {
        $val = remove_junk($_POST[$field]);
        if (isset($val) && $val == '') {
            $errors = $field . " can't be blank.";
            return $errors;
        }
    }
}

/**
 * Function for Display Session Message
 * Ex echo displayt_msg($message);
 * 
 * @param string $msg
 * @return string
 */
function display_msg($msg = '')
{
    $output = array();
    if (!empty($msg)) {
        foreach ($msg as $key => $value) {
            $output = "<div class=\"alert alert-{$key}\">";
            $output .= "<a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>";
            $output .= remove_junk(first_character($value));
            $output .= "</div>";
        }
        return $output;
    } else {
        return "";
    }
}

/**
 * Function for redirect
 * 
 * @param string $url
 * @param boolean $permanent
 */
function redirect($url, $permanent = false)
{
    if (headers_sent() === false) {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit;
}

/**
 * Function for find out total saleing price, buying price and profit
 * 
 * @param double $totals
 * @return array
 */
function total_price($totals)
{
    $sum = 0;
    $sub = 0;
    foreach ($totals as $total) {
        $sum += $total['total_saleing_price'];
        $sub += $total['total_buying_price'];
        $profit = $sum - $sub;
    }
    
    return array($sum, $profit);
}

/**
 * Function for Readable date time
 * 
 * @param string $str
 * @return string | null
 */
function read_date($str)
{
    if ($str) {
        return date('F j, Y, g:i:s a', strtotime($str));
    } else {
        return null;
    }
}

/**
 * Function for  Readable Make date time
 * 
 * @return string
 */
function make_date()
{
    return strftime("%Y-%m-%d %H:%M:%S", time());
}

/**
 * Function for  Readable date time
 * 
 * @staticvar int $count
 * @return integer
 */
function count_id()
{
    static $count = 1;
    
    return $count++;
}

/**
 * Function for Creting random string
 * 
 * @param integer $length
 * @return string
 */
function randString($length = 5)
{
    $str = '';
    $cha = "0123456789abcdefghijklmnopqrstuvwxyz";

    for ($x = 0; $x < $length; $x++) {
        $str .= $cha[mt_rand(0, strlen($cha))];
    }
    
    return $str;
}

/**
 * Function for getting the translated text
 * 
 * @param string $text
 * @return Translator
 */
function text()
{
    global $session;
    
    if (empty($session->language)) {
        $session->language = 'es_ES';
    }
  
    $langDir = SITE_ROOT . DS . '..' . DS . 'language' . DS;
 
    $translator = new Translator();
    $translator->addTranslationFilePattern(
        'gettext', 
        $langDir, 
        '%s.mo'
    );
    $translator->setLocale($session->language);
    //echo $translator->setLocale($session->language);exit;
    return $translator;
}

?>