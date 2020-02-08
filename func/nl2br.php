<?php

$string = 'hello.
helllo
i glad to see you again.';

var_dump(nl2br(htmlspecialchars($string)));
// echo $string;

// echo htmlspecialchars($string);

echo "<div>".nl2br($string)."</div>";

