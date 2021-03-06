<?php
  /*
    AA_LOAD_FUNCTIONS
    Functions that are needed before any other class loads,
      AA_x is named like so be cause load type is loaded alphabetically,
      making AA_x the the first in list.
  */

  /*Tries to load a class.*/
    function load_class( $class_name )
      {
        if (!class_exists( $class_name ))
          App::Error("Class '<b>$class_name</b>' couldn't be found.", "Please make sure this class exists.");
        else return new $class_name;
      }
