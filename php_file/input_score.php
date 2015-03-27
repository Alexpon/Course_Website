<?php session_start(); ?>


<?php
  echo $_GET['score'];
?>

<script>
	window.location.assign("input_score.php?score=" + finsco);
</script>