<?php
/*
+---+
| 1 | 
+---+
Print the sentence: Welcome to PHP!
*/
echo "Welcome to PHP!";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 2 | 
+---+
Print the sentence: PHP stands for "Hypertext Preprocessor"!
*/
$content = 'PHP stands for';
$fullform = ' "Hypertext Preprocessor!" ';
$sentence = $content;
$sentence .= " ";
$sentence .= $fullform;
echo "$sentence";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
*/
$text = 'PHP stands for';
$fullform = ' "Hypertext Preprocessor!" ';
$sentence = $content;
$sentence .= " ";
$sentence .= $fullform;

echo "<p>$sentence</p>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/
   
$html = 'HTML - Stands for Hypertext Markup Language';
$css = 'CSS - Stands for Cascading Stylesheet';
$js = 'JS - Stands for JavaScript';
$php = 'PHP - Stands for Hypertext Preprocessor';
$sql = 'SQL - Stands for Structural Query Language';

echo "$html<br>"; 
echo "$css<br>";
echo "$js<br>";
echo "$php<br>";
echo "$sql";
   
// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - <ul> ... </ul>:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/

echo "<ul>
        <li>HTML - Stands for Hypertext Markup Language</li>
        <li>CSS - Stands for Cascading Stylesheet</li>
        <li>JS - Stands for JavaScript</li>
        <li>PHP - Stands for Hypertext Preprocessor</li>
        <li>SQL - Stands for Structural Query Language</li>
    </ul>"

?>