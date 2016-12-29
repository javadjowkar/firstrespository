<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1 id="myH1">This is a Heading</h1>
<p>This is a paragraph.</p>

<form action="page.php" method="post">

    <p>Name: <input type="text" name="name"> </p>
    <p>Family: <input type="text" name="fname"> </p>
    <p><input type="submit" value="send"> </p>

</form>

<pre>
    <?php
    print_r($_COOKIE);
    ?>
</pre>

</body>

</html>
