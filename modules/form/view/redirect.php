<?php

header("refresh:3;url=/jpform/form");



if (isset($recordedsaved)) {

    echo $recordedsaved;
}


if (isset($unsubmessage)) {

    echo $unsubmessage;
}
?>
