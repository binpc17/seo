<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<h3> FILE UPLOAD TEST</h3>
      <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file" id="file">
	<input type="hidden" name="userId" value="6">
    <input type="submit" value="Upload Image" name="submit">
</form>
    </body>
</html>
