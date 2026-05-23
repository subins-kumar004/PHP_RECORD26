<html>
<head>
    <title>PHP Programs</title>
</head>

<body>

<h1>PHP Programs</h1>

<ul>

<?php

$files = glob("*.php");

foreach ($files as $file)
{
    if ($file != "index.php")
    {
        echo "<li><a href='$file'>$file</a></li>";
    }
}

?>

</ul>

<h2>Folders</h2>

<ul>

<?php

$folders = glob("*", GLOB_ONLYDIR);

foreach ($folders as $folder)
{
    echo "<li><a href='$folder'>$folder</a></li>";
}

?>

</ul>

</body>
</html>