<?php

/**
 * Creat, alert function
 * @param $msg
 * @param $type
 */
function creatAlert($msg, $type = "danger"){
    return "<p class=\"alert alert-{$type} d-flex justify-content-between\">{$msg}<button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";
}

/**
 * Creat, Retention of old information (পুরানো তথ্য ধরে রাখা)
 * @param $fields_name
 */
function old ($field_name){
    return $_POST[$field_name] ?? '';
}

/**
 * Creat, Reset form after successfully submission 
 * @param $
 */
function resetForm(){
    return $_POST = [];
}

/**
 * Creat, Every field required function
 * @param $fieled_name
 */
function checkRequired($field_name){
    if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
        if (empty($_POST[$field_name])){
            return "<p class=\"text-danger\">required*</p>";
        }else{
            return "";
        }
    }
}


?>