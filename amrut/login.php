<?php

if(isset($_POST['submit'])){
    if($_POST['name']==='Admin' && $_POST['password'] === 'password'){
        header('Location: index1.php');
    }

    else{
        echo('undefined user');
    }
}

?>