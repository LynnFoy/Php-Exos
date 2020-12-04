<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
$topics = array ('I','You','He/She','We','You','They');

foreach($topics as $topics){
    if ($topics == "He/She") {
        echo "$topics codes<br/>";
    } else {
        echo "$topics code<br/>";
    }
}
?>
</body>
</html>