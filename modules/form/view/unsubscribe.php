<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Untitled Document</title>
    </head>

    <body>

        <? ?>

        <?php
        echo $EmailExistsMessage;
        echo '<br>';
        echo $query[0]->email;
        ?>

        <form action="/form/unsubscribe" method="post">
            <input name="record" type="hidden" value="<? echo $query[0]->id ?>" />
            <input name="button" type="submit" value="unsubscribe" />
        </form>
    </body>
</html>