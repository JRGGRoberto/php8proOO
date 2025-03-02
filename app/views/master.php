<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title><?php echo $this->e($title); ?></title>
    <?php echo $this->section('css'); ?>
</head>
<body>
    <?php $this->insert('partials/header'); ?>
    <div class="container">

        

        <?php echo $this->section('content'); ?>

    </div>

    <?php echo $this->section('js'); ?>
    
</body>
</html>

