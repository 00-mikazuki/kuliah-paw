<?php 
function validate(&$errors, $field_list, $field_name, $pattern) 
{
	if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
		$errors[$field_name] = 'required';
	else if (!preg_match($pattern, $field_list[$field_name]))
		$errors[$field_name] = 'invalid';
}

// validasi required
function is_empty_fill(&$errors, $field_list, $field_name) {
  if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
		$errors[$field_name] = 'required';
}

// validasi alfabet
function is_alphabet(&$errors, $field_list, $field_name) {
  $pattern = "/^[A-z\s]+$/";
  if (!preg_match($pattern, $field_list[$field_name]))
		$errors[$field_name] = 'invalid';
}

// validasi numerik
function is_numeric(&$errors, $field_list, $field_name) {
  $pattern = "/^[0-9]+$/";
  if (!preg_match($pattern, $field_list[$field_name]))
		$errors[$field_name] = 'invalid';
}

// validasi alfanumerik
function is_alphanumeric(&$errors, $field_list, $field_name) {
  $pattern = "/^[A-Za-z0-9]+$/";
  if (!preg_match($pattern, $field_list[$field_name]))
		$errors[$field_name] = 'invalid';
}

// validasi panjang digit
function is_n_digits(&$errors, $field_list, $field_name, $n) {
  $pattern = "/^[0-9]{{$n}}$/";
  if(!preg_match($pattern, $field_list[$field_name])) {
    $errors[$field_name] = 'invalid';
  }
}

// validasi panjang karakter
function is_n_chars(&$errors, $field_list, $field_name, $n) {
  $pattern = "/^[A-Za-z0-9]{{$n}}$/";
  if(!preg_match($pattern, $field_list[$field_name])) {
    $errors[$field_name] = 'invalid';
  }
}