<?php require_once( "SNIPPETS/HEADER.php" ); ?>

<div class="container text-center">
  <h1>Javascript Form Validation Test</h1>
  <h3>Sign Up Form </h3>
  
  <form name="myform" class="border border-width-2 justify-content-between" action="welcome.php" onsubmit=" validate()" method="post">
  firstName: <input type="text" class="mt-2" name="firstName"><br>
  Email: <input type="text" class="mt-2" name="email"><br>
  Mobile: <input type="text" class="mt-2" name="mobile"><br>
  Address: <textarea class="mt-2" name="address"></textarea><br>
  <input type="submit" value="Submit">
  </form>
</div>

<?php require_once( "SNIPPETS/FOOTER.php" ); ?>