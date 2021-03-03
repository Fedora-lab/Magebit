<?php
function validate($email){
      if (empty($email)) {
        Databases::$errors="Empty";
        return null;
      }
      elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // if Email is not correct,we are returning null,else we return true,and parsing $email to the fecth function
       Databases::$errors="Re-enter Email";
       return null;
      }elseif (preg_match('/.co$/',$email)) {
       Databases::$errors="Ending wiht .co";
       return null;
       }
    return true;
    }
?>