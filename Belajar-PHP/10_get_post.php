<?php

/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF'] ?>?name=Jonh&age=30">click</a>


<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label for="name">name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="submit" name="submit">
</form>