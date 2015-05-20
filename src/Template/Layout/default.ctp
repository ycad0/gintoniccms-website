<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php echo $this->Html->meta('icon') ?>

        <title>
            <?php echo $this->fetch('title') ?>
        </title>

        <?= $this->Html->css('default') ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <?php echo $this->element('GintonicCMS.top_menu')?>
        <?php echo $this->Flash->render(); ?>

        <?php echo $this->fetch('content'); ?>	                    

        <footer class="footer">
          <div class="container">
            <p class="text-muted">By <a href="http://phillafrance.com">Philippe Lafrance</a> at <a href="http://gintonicweb.com">Gintonic Web</a> </p>
          </div>
        </footer>

    </body>

<?= $this->Require->req('jquery');?>
<?= $this->Require->req('bootstrap');?>
<?= $this->Require->req('app/affix');?>
<?= $this->Require->load('config'); ?>
</html>




