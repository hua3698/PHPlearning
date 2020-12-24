<?php

define("pi",3.1415);

echo pi*10;
echo "<br>";

// 常數一旦宣告，不能再變更。pi宣告為3.1415後，就不能再定義為0.15155
define("pi", 0.15155);
echo pi*10;


?>