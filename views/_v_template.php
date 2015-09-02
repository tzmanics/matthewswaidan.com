<!DOCTYPE html>
<html>
<head>
<title><?php if (isset($title)) echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="/css/master.css">

<!-- Controller Specific JS/CSS -->
<?php if (isset($client_files_head)) echo $client_files_head; ?>
</head>
<body>
<header>
  <nav>
  <ul>
    <li><a href="#">PAGE 1</a></li>
    <li><a href="#">PAGE 2</a></li>
    <li><a href="#">PAGE 3</a></li>
  </ul>
</nav>
</header>

<div id='content'>
  <?php if (isset($content)) echo $content; ?>
</div>

<?php if (isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>
