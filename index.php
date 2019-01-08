<?php

/**
 * Homepage
 */

// Initialisation
require_once('includes/init.php');

// Show the page header, then the rest of the HTML
include('includes/header.php');

?>

<h1>Monthlybeats - Launching Soon - Make tunes! There's still time!</h1>
<h3>Signups work - Site's still WIP but there's still time, there's still time!</h3>
<h3>So uh, ... MonthlyBeats.com is currently being developed swiftly in spare time, if you have better design skills than me (cough), or some fancy graphics you want to contribute, please get in touch on the weeklybeats discord, the clock is ticking</h3>
<?php if (Auth::getInstance()->isLoggedIn()): ?>

  <p>Hello <?php echo htmlspecialchars(Auth::getInstance()->getCurrentUser()->name); ?>. <br>You still have plenty of time before this site is officially ready, start writing tracks!

<?php else: ?>

<style type="text/css">
.links a {font-family:Georgia,serif; font-size:large}
.links a:link {color:red;}
.links a:visited {color:darkred;}
.links a:hover {text-decoration:none;color:yellowgreen;font-weight:bold;}
.links a:active {color:red;text-decoration: none}
</style>
<style type="text/css">
.links a {font-family:Georgia,serif; font-size:large}
.links a:link {color:red;}
.links a:visited {color:darkred;}
.links a:hover {text-decoration:none;color:yellowgreen;font-weight:bold;}
.links a:active {color:red;text-decoration: none}
</style>

<div class="links">
<font color=red> <p><a href="signup.php">Sign up</a> or <a href="login.php">Log in</a></p></font>
</div>


<?php endif; ?>

<?php include('includes/footer.php'); ?>
