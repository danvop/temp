<?php

$string = 'hello.
helllo
i glad to see you again.';

var_dump($string);
// echo $string;

// echo htmlspecialchars($string);

echo "<div><b>String without nl2br:</b></div>";
echo "<div>".$string."</div>";
echo "<div><b>String with nl2br:</b></div>";

echo "<div>".nl2br($string)."</div>";

