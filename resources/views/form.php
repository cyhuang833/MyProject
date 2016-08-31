<html>
<body>

<?php

echo Form::open(array('url' => 'create'));

echo '<h3> User Name</h3>';
echo Form::text('userName');//this is the name to access the DATA

echo '<h3> User Account</h3>';
echo Form::text('userAccount');

echo '<h3> Branch</h3>';
echo Form::select('branch', array('1' => 'Taipei', '2' => 'Tainan'));

echo '<br/>';
echo Form::submit('Click Me!');
echo Form::close();
?>

</body>
</html>