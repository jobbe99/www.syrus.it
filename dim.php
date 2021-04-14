<?php

//document.location="'.$PHP_SELF.'?screen_check=done&Width=\"+screen.width+\"&Height=\"+screen.height;

/*
$var1 = "https://core.clickfraud.it/tracking?kw=cyber%20lex&net=g&url=https://www.cyberlex.net&camp=9338172643&device=c&gclid=Cj0KCQiAyp7yBRCwARIsABfQsnQsSWhGJ6ui4nJ_VI93KWnZv3QuHhlSp5gVkReDpmV5IyppY8TSxiMaApv8EALw_wcB&x=900&y=1200";
*/
print('222'.$_SERVER["HTTP_REFERER"]);

exit;
header("Location: https://core.clickfraud.it/getDim?x=950&y=500");	
?>	