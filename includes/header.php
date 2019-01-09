<!DOCTYPE html>
<html>
<head>
  <title><?php if (isset($page_title)): ?><?php echo $page_title; ?> | <?php endif; ?>Monthly Beats (Launching officially soon!)</title>
  <meta charset="utf-8" /> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.18.0/css/uikit.gradient.min.css" />
  <link rel="stylesheet" href="/css/styles.css" />


  <link rel="shortcut icon" href="https://Monthlybeats.com/favicon.ico" type="image/x-icon">
  <link rel="icon" href="https://Monthlybeats.com/favicon.ico" type="image/x-icon">

<link rel="apple-touch-icon" sizes="57x57" href="https://Monthlybeats.com/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://Monthlybeats.com/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://Monthlybeats.com/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://Monthlybeats.com/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://Monthlybeats.com/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://Monthlybeats.com/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://Monthlybeats.com/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://Monthlybeats.com/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://Monthlybeats.com/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="https://Monthlybeats.com/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://Monthlybeats.com/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://Monthlybeats.com/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://Monthlybeats.com/favicon-16x16.png">
<link rel="manifest" href="https://Monthlybeats.com/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="https://Monthlybeats.com/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">




</head>
<body>

  <nav role="navigation" class="uk-navbar">
    <a href="/" class="uk-navbar-brand">Monthlybeats (Coming soon)</a>

    <div class="uk-navbar-flip">
      <ul class="uk-navbar-nav">
        <?php if (Auth::getInstance()->isLoggedIn()): ?>

          <?php if (Auth::getInstance()->isAdmin()): ?>
            <li><a href="/admin/users">Admin</a></li>
          <?php endif; ?>
          <li><a href="/profile.php">Profile</a></li>
          <li><a href="/logout.php">Logout</a></li>

        <?php else: ?>

          <li><a href="/login.php">Login</a></li>

        <?php endif; ?>

      </ul>
    </div>
  </nav>

  <div id="content">


  <tr class="main">


