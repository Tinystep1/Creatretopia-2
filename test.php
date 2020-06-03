<?php
//This is a comment.
#This is also acomment.
/*This is used to comment out a large block of text.*/
?>

<?php
echo "This will be displayed on the page.";
print "this function will cause this text to be displayed as well.";
echo "Baslash allows me to use quotation marks inside quotation marks \"like this.\"";
print "It also works in the print function \"like this.\"";
?>

<?php
$you = "Yvette";
$me = "Alice";
print $you . $me;
print $you . "" . $me;
print "my name is $me";
?>

<?php
$colleague = 0;
$colleague = 1;
$colleague = 2;
$colleague = 3;
$colleague = 4;
$colleague = 5;
$colleague = 6;
$knowThemLevel["Regina"] = "very well";
$knowThemLevel["Isaac"] = "extremely well";
$knowThemLevel["Beverley"] = "well";
$knowThemLevel["Talesin"] = "somewhat well";
$knowThemLevel["Dalton"] = "somewhat well";
$knowThemLevel["Adam"] = "by name";
$knowThemLevel["Chris"] = "by name";
print "My colleagues are " . $colleague[0] . ", " . $colleague[1] . ", " . $colleague[2] . ", " . $colleague[3] . ", " . $colleague[4] . ", " . $colleague[5] . ", and " . $colleague[6];
print "I know Regina " . $knowThemLevel["Regina"] . " from work.";
?>

<?php
$a = true;
$b = true;
$c = false;
//Expression is TRUE
$a && $b;
//Expression is TRUE
$a || $c;
//Expression is TRUE
$b xor $c;
//Expression is FALSE
! $a;
?>