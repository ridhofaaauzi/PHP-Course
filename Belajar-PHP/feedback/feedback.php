<?php include "inc/header.php" ?>

<?php 

    $sql = 'SELECT * FROM feedback';
    $result = mysqli_query($conn, $sql);
    $feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
?>

<h2>Paste Feedback</h2>
<?php if(empty($feedbacks)): ?>
<p class="lead mt-3">There is no feedbacks</p>
<?php endif; ?>

<?php foreach ($feedbacks as $item) :?>

<div class="card my-3 w-75">
    <div class="card-body text-center">
        <?php echo $item['body']; ?>
        <div class="text-secondary mt-2">
            By <?php echo $item['name']; ?>
            on <?php echo $item['date']; ?>
        </div>
    </div>
</div>
<?php endforeach; ?>




<?php include "inc/footer.php" ?>