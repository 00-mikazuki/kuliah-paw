<?php 
function is_empty_fill(&$errors, $field_list, $field_name) {
  if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
		$errors[$field_name] = 'required';
}

function validate_email(&$errors, $field_list, $field_name) {
  $pattern = "/^[\w\.\-]{2,}@[yahoo.com|outlook.com|hotmail.com]+$/";
  if(!preg_match($pattern, $field_list[$field_name])) {
    $errors[$field_name] = 'invalid';
  }
}

function validate_password(&$errors, $field_list, $field_name) {
  $pattern = "/^[A-Z]{1,}+[A-z(\#|\$|\@|\!|\^|\&|\*){2}(0-9)+]{7,}+$/";
  if(!preg_match($pattern, $field_list[$field_name])) {
    $errors[$field_name] = 'invalid';
  }
}
?>