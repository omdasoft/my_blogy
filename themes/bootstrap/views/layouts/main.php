<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/assets/bootstrap/css/bootstrap.min.css');?>
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/assets/style.css');?>

  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
  <div class="container">
    <?php $this->renderPartial("//layouts/_header"); ?>
    <main class="main">
      <?php echo $content; ?>
    </main>
    <footer class="text-center">
      <h5>all rights reserved @2021</h5>
    </footer>
  </div>
  <script type="text/javascript" src="<?php echo Yii::app()->baseUrl . '/assets/bootstrap/js/bootstrap.min.js'; ?>"></script>
</body>
</html>