// This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.
<?php

/* ------- Outputting Content ------- */

// Echo - Output strings, numbers, html, etc
echo 'Hello', "World";
echo 1337;
echo '<h1>Hello</h1><h2>World</h2>';

// print - Similar to echo, but a bit slower
print 'Hello';
print 1337;

// print_r - Gives a bit more info. Can be used to print arrays
print_r('Hello');
print_r([13, 37, 42]);

// var_dump - Even more info like data type and length
var_dump('Hello');
var_dump([13, 37, 42]);

// Escaping characters with a backslash
echo "Is your name O\'reilly?";

/* ------------ Comments ------------ */

// This is a single line comment

/*
* This is a multi-line comment
*
* It can be used to comment out a block of code
*/

// If there is more content after the PHP, such as this file, you do need the ending tag. Otherwise you do not.
?>

<!-- You can output any HTML that you want within a .php file -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My PHP Website</title>
</head>
<body>
  <!-- You can output PHP including variables, etc -->
  <h1>Hello <?php echo 'Zelda'; ?></h1>
  <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
  <h1>Hello <?= 'Link' ?></h1>
</body>
</html>