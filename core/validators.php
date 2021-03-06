<?php
function validateDate($date, $format)
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

function  checkEmail($email) {
	if (!preg_match("/( [a-zA-Z0-9] )+( [a-zA-Z0-9\._-] )*@( [a-zA-Z0-9_-] )+( [a-zA-Z0-9\._-])/" , $email)) {
		return false;
	}
	return true;
}