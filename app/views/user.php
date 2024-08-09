<?php $this->layout('master', ['title' => $title]); ?>

<!-- < ?php $this->start('css'); ?>
  <link rel="stylesheet" href="/css/styles.css">
< ?php $this->stop(); ?> -->

<h1>User</h1>
<!-- <p>Hello, <?php echo $this->e($name); ?></p> -->
 <form action="/user/update/7" method="post">
    <input type="text" name="fistName" value="Roberto">
    <input type="text" name="lastName" value="Gomes">
    <input type="email" name="email" value="jrggroberto@gmail.com">
    <input type="password" name="password" value="123">

    <button type="submit">Cadastrar</button>
 </form>



<!-- < ?php $this->start('js'); ?>
  <script>
    alert('Hey');
  </script>
< ?php $this->stop(); ?> -->