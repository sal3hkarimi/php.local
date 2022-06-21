<?php include "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php if (isset($_POST['send'])): ?>
    <?php echo $_POST['send']; ?>
    <?php var_dump($_POST['send']); ?>
<?php endif; ?>

<?php echo "azim git"; ?>

<form action="">
    <input type="radio" name="bg" value="red">red
    <input type="radio" name="bg" value="blue">blue
    <input type="radio" name="bg" value="green">green
    <input type="submit" name="send">
</form>
</body>
</html>


