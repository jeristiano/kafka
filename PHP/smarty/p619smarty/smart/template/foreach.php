
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ui</title>
    </head>
    <body>
        {$info = array(1,2,3,4,5)}
        <ul>
            {foreach $info as $v}
            <li>{$v}</li>
            {if $v@last}
            <li>本次循环次数{$v@total}</li>
            {/if}
            {foreachelse}
            没有纸
            {/foreach}
        </ul>
    </body>
</html>