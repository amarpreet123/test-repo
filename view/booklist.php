<html>
<head>
</head>

<body>
<table>
<tbody>
<tr> <td> title </td>
<td> author </td>

<td> description </td>
<?php
foreach ($books as $title=>$book)
{
echo'<tr> <td> <a href="index.php?book='.$book->title.">'.$book->title'
</a>
</td>
<td>'.$book->author.'</td>
<td>'.$book->description.'</td>
}
?>
</table>
</body>
<html>


