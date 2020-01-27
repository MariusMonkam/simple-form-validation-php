<?php require_once( "SNIPPETS/HEADER.php" ); ?>
<h1> Welcome</h1>


Name: <?php echo $_POST ["firstName"]; ?><br>
Email: <?php echo $_POST ["email"]; ?><br>
Phone: <?php echo $_POST ["phone"]; ?><br>
Url: <?php echo $_POST ["url"]; ?><br>
Message: <?php echo $_POST ["message"]; ?><br>
<div>

<a href="form1.php">Back form</a><br>

</div>

<?php require_once( "SNIPPETS/FOOTER.php" ); ?>