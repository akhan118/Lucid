<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


echo'ADMIN';
echo '<br>';


for ($i = 0; $i < count($query); $i++) {

    $id = $query[$i]->id;
    $firstname = $query[$i]->firstname;
    $lastname = $query[$i]->lastname;
    $email = $query[$i]->email;

    echo <<<END


<form action="" method="post">
<table width="200" border="1">
  <tr>
    <th scope="col">$firstname</th>
    <th scope="col">$lastname</th>
    <th scope="col">$email</th>
    <th scope="col"><input name="id" type="hidden" value="$id" /></th>
    <th scope="col"><input name="deleteuser" type="submit" value="Delete" /></th>
  </tr>
</table>
</form>
END;

    echo '<br>';
}
?>
