<html>
<head>
<title>File handling </title>
</head>
<body>
<h2>File Handling Functions</h2>
<?php
echo "<br><b>Read data from file1</b>";
$filename = "file1.txt";
$fileread = fopen($filename, "r");
if ($fileread == false)
{
echo "File cannot open";
}
$filesize = filesize($filename);
echo "<br>File Size: $filesize bytes<br>";
echo "File Content: " . fread($fileread, $filesize) . "<br>";
fclose($fileread);
echo "<br><b>Writing data to file2</b>";
$filename = "file2.txt";
$filewrite = fopen($filename, "w+");
if ($filewrite == false)
{
echo "File cannot be open for writing";
}
$content = "Welcome to MACFAST <br>";
fwrite($filewrite, $content);
fclose($filewrite);
echo "<br>Writing Content is : Welcome to MACFAST. <br>";
echo "File written successfully.<br>";
echo "<br><b>Append data to existing file2</b>";
$fileappend = fopen("file2.txt", "a+");
if ($fileappend == false)
{



echo "File cannot open";
}
$appcontent = "I am Subin";
fwrite($fileappend,$appcontent);
fclose($fileappend);
$getcontent = file_get_contents("file2.txt");
echo "<br>File appended successfully.<br>";
echo "File content after appending: $getcontent <br>";
echo "<br><b>Rename a file</b>";
rename("file2.txt", "file3.txt");
echo "<br>File renamed successfully : file2.txt to file3.txt<br>";
echo "<br><b>Copy file</b>";
copy("file3.txt","copyfile.txt");
echo "<br>Copy data successfully <br>";
echo "Copied content is: " . file_get_contents("copyfile.txt");
?>
</body>
</html>