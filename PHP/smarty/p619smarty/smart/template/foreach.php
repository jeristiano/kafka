
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
            <li>����ѭ������{$v@total}</li>
            {/if}
            {foreachelse}
            û��ֽ
            {/foreach}
        </ul>
    </body>
</html>