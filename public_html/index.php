<!DOCTYPE html>
<html>
    <head>
    </head>
 <body>
    <h1><?php echo htmlspecialchars($_GET[title]); ?></h1>
    <h2><?php echo htmlspecialchars($_GET[release]); ?></h2>
    <h3><?php echo htmlspecialchars($_GET[gross]); ?></h3>
    <img src = <?php echo htmlspecialchars($_GET[image]); ?>>
 </body>
</html>