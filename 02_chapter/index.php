<?php

# LANGUAGE BASICS

# CASE INSENSITIVE (Functions and Classes)
// echo "HELLO";
// ECHO "HELLO";
// EcHo "HELLO";

# CASE SENSITIVE (Variables)

# Semicolon to separate statements;

# Whitespace doesn't matter in a php

# Commenting 
# # short comment
# // second type of comment
/*
    multiline of comment
    <?php echo "this is also comment"; ?>
*/ 

# Variable names
# start with $

# CONSTANTS
// define("NAME", "AUDI");
// echo(NAME);

# Keywords

# Data types
# SCALAR 
# - integers
# - floating
# - strings
# - booleans

# --------------
# - arrays
# - object

# --------------
# - resource
# - NULL

# intval
# is_float
# is_real
# is_string


// $n = 1213;

// echo is_string($n);

# ARRAY
# Group of values which you can identify by position
// $ar = [];
// $ar['name'] = "Niko";
// $ar[1] = "123";
// print_r($ar);

// foreach($ar as $key => $element){
//     echo "$key => $element \n";
// }

# CHECKING
# is_array

# NULL
# Null
# null

# VARIABLE VARIABLES
// $foo = "bar";
// $$foo = "baz";
// echo $bar;

# VARIABLES REFERENCES
// $bigLongVariableName = "PHP";
// $short = & $bigLongVariableName;

// $bigLongVariableName .= " the best language";
// echo $short;
// echo "\n";
// $short = "Python";
// echo $bigLongVariableName;
// echo "\n";
// echo $short;
// echo "\n";
// unset($short);
// echo $bigLongVariableName;
// echo "\n";

// function &retRef(){
//     $var = "PHP";
    
//     return $var;
// }

// $nikoo = & retRef();
// echo $nikoo;

// print_r($GLOBALS);

# STATIC VARIABLES

// function updateCounter(){
//     static $counter = 0;
    
//     echo $counter . "\n";
//     $counter++;
// }


// updateCounter();
// updateCounter();
// updateCounter();
// updateCounter();

# FUNCTION PARAMETERS
// function greeting($name){
//     echo "Hello $name";
// }

// greeting("nikooo");

# GARBAGE COLLECTION
// - reference counting - reference counting ensures that memory is returned to the operating system when it is no longer needed
// - copy-on-write - ensures that memory isn’t wasted when you copy values between variables

// - SYMBOL TABLE
// A symbol table is an array that maps variable names to the positions
// of their values in memory.

$a = 100000;
$b = $a;
$c = $b;

// print_r(get_defined_vars());

function print_mem()
{
   /* Currently used memory */
   $mem_usage = memory_get_usage();
   
   /* Peak memory usage */
   $mem_peak = memory_get_peak_usage();

   echo 'The script is now using: <strong>' . round($mem_usage / 1024) . 'KB</strong> of memory.<br>';
   echo 'Peak usage: <strong>' . round($mem_peak / 1024) . 'KB</strong> of memory.<br><br>';
}

print_mem();