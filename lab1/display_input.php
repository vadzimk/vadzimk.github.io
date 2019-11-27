<?php
if (($_POST['func'] == "") || ($_POST['text1'] == "")) {
    header("location: convert_form.html");
    exit;
}

$result = $_POST['func']($_POST['text1']);
?>
<html>
<head><title>Conversion results</title></head>
<body>
<?php echo "$result"; ?>
<p><a href="convert_form.html">go again!</a></p>
</body>
</html>
