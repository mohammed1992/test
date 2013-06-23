<html>
<head>
<title>My Form</title>
<meta charset="UTF-8" />
</head>
<body>

<?php //echo validation_errors(); ?>

<?php 
echo form_open('user/add'); 
echo 'Username';
echo form_input(array('name'=>'username','id '=>'username'));
echo '</br>';
echo 'City';
echo form_input(array('name'  =>   'city','id '   =>   'city'));
echo '</br>';
echo form_submit('mysubmit', 'Add');

echo form_close(); 

?>

</form>

</body>
</html>
