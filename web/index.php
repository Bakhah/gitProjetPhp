<?php
include 'partial/header.php';
include 'lib/connection.php';
?>
<div class="container">

  <h1>PROJET</h1>

  <?php
  echo "Projet de Louis Lalleau et Franck Hourdin";
  $con = GetMyConnection();

  $sql = 'SELECT * FROM product';
  $req = mysqli_query($con, $sql);
  echo "<h3>Test d'affichage de la table product :</h3>";
  ?>
  <table class="table">
    <?php
  while ($data = mysqli_fetch_assoc($req)) {
    echo '<tr><th>'.$data[id].'</th><th>'.$data[name].'</th><th>'.$data[price].'</th><th>'.$data[price].'€</th><th>'
    .$data[id_unit].'</th></tr>';
  };
 ?>
 </table>
</div>
  <?php
  echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam diam enim, ultricies sit amet lacus et, fermentum venenatis magna. Donec a rhoncus quam, placerat tristique orci. Nam aliquet nisi eleifend, laoreet lectus et, accumsan nibh. Suspendisse ut sagittis augue. Aenean rutrum libero sapien, vel tempor eros dapibus at. Quisque finibus blandit porttitor. Duis tellus felis, efficitur id feugiat non, efficitur eget justo. Maecenas non rhoncus turpis. Nullam venenatis, quam non eleifend fermentum, felis dui mollis turpis, et venenatis ante magna vel urna. Vestibulum quis congue sem. Morbi pretium ligula purus, vitae vehicula dolor euismod quis. Donec eu mi mattis, ornare velit sed, dapibus neque. Praesent convallis, nisl quis pharetra fringilla, lectus nisl semper nibh, ac congue dolor odio et mauris. Nam arcu est, posuere ac porttitor euismod, sodales vel velit. In hac habitasse platea dictumst.

Ut diam metus, congue sit amet gravida non, interdum sed justo. Sed luctus orci tortor, id iaculis elit commodo vel. Donec condimentum risus at ornare tempus. Sed elit nunc, tempus sit amet porttitor quis, porttitor sit amet orci. Donec feugiat lobortis dolor, vel consectetur odio vulputate a. Donec est nisi, tempus ac est quis, tristique tempus libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam pharetra mattis purus, eu mollis lectus posuere quis.

Nullam varius justo ac massa blandit, tristique maximus odio pulvinar. Suspendisse posuere diam eu turpis lobortis semper. Nulla luctus et lorem nec elementum. Nullam facilisis magna a libero dapibus, a lacinia justo viverra. In feugiat quam a imperdiet mattis. Vestibulum non dolor commodo, facilisis ex et, molestie purus. Donec sodales, dolor a sollicitudin bibendum, dolor ante sollicitudin dolor, et hendrerit mauris felis eget est. Maecenas sed odio egestas, semper nisl ac, efficitur turpis. Pellentesque pharetra ipsum nec eros auctor, sed scelerisque lorem fringilla. Vivamus fermentum mauris et gravida venenatis. Aenean consectetur tellus sit amet enim convallis placerat. Mauris in sollicitudin nibh. Quisque viverra enim in bibendum vestibulum. Proin pulvinar turpis sit amet urna lobortis ornare. Ut volutpat feugiat placerat.

Nam vehicula nulla congue, congue mi eget, dictum lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nibh turpis, scelerisque ut ligula id, lobortis rutrum magna. Aenean sed tortor quis magna commodo ullamcorper eget eu arcu. In pulvinar eleifend justo nec eleifend. Nullam aliquam lacinia condimentum. Aenean porttitor elementum leo, nec suscipit justo elementum eu. Cras commodo metus sem, nec tincidunt dolor cursus sit amet. Sed vehicula risus sit amet lorem tincidunt elementum. Fusce mollis fermentum feugiat. Vivamus varius vulputate risus, quis vehicula sapien rhoncus vel. Integer porttitor tellus augue, eget laoreet neque aliquet ac. Vestibulum dui arcu, tincidunt eget purus non, dictum posuere lorem. Etiam hendrerit nunc arcu, ac sodales mi tristique nec. Curabitur dui ipsum, tempor quis felis quis, pretium aliquam purus. Aliquam vel dolor velit.

Vivamus a dapibus turpis. Aliquam a magna nec eros rutrum elementum at in odio. Curabitur orci turpis, pretium in bibendum a, cursus sit amet sapien. Etiam tempor facilisis neque ut dictum. Duis vel dui et nibh elementum lacinia. In commodo libero magna, ut aliquam nibh interdum ac. Morbi tempor tellus nec arcu imperdiet, ac aliquam quam gravida. Morbi imperdiet augue id neque condimentum volutpat. Pellentesque ullamcorper tempor lorem quis aliquam. Sed urna nibh, maximus ut placerat eu, pulvinar id odio. Nunc ornare erat eget nibh varius, quis condimentum tortor tempor. Fusce sollicitudin porttitor hendrerit.';


  include 'partial/footer.php';
  ?>
