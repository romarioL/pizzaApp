<?php 

require_once __DIR__ . '/../../app/Config/Config.php';
?>
<!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8"/>
     <title><?php echo $this->getTitle(); ?></title>
     <meta name="author" content="Romário Sousa">
     <meta name="description" content="<?php echo $this->getDescription(); ?>">
     <meta name="keywords" content="<?php echo  $this->getKeywords();?>"> 
    <link rel="stylesheet" href="<?php echo DIRCSS . 'style.css'; ?>">
    <?php  echo $this->addHead(); ?>
 </head>
 <body>
    <div class="nav">
        <a href="<?php  echo DIRPAGE; ?>">Home</a>
    </div>
     <div class="header">
        <hr>

     	<?php echo $this->addHeader(); ?>

     </div>
     <div class="main">
     	<?php echo $this->addMain(); ?>
     </div>
     <div class="footer"> 
        2019 - TODOS OS DIREITOS RESERVADOS WEB DESIGN EM FOCO
     	<?php  echo $this->addFooter();?> 
     </div>
 </body>
 </html>