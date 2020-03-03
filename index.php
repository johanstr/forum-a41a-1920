<?php
@include_once('app/templates/bovenstuk.php');
@include_once('app/database/db.php');

if(dbConnect()) {
   dbQuery('SELECT threads.*, users.username, COUNT(topics.id) AS topics
FROM threads
INNER JOIN users ON threads.user_id = users.id
INNER JOIN topics ON threads.id = topics.thread_id
GROUP BY threads.id');

   $threads = dbGetAll();
} else {
    die();
}
?>
                <?php foreach($threads as $thread): ?>

                  <!-- BEGIN VAN EEN THREAD -->
                  <a href="" class="collection-item avatar collection-link">
                     <img src="img/icon-php.png" alt="" class="circle">
                     <div class="row">
                        <div class="col s9">
                           <div class="row last-row">
                              <div class="col s12">
                                 <span class="title"><?php echo $thread['title']; ?></span>
                                 <p><?= substr($thread['content'],0,200) . '....' ?></p>
                              </div>
                           </div>
                           <div class="row last-row">
                              <div class="col s12 post-timestamp">Moderator: <?= $thread['username']; ?></div>
                           </div>
                        </div>
                        <div class="col s3">
                           <h6 class="title center-align">Statistieken</h6>
                           <p class="center-align"><?= $thread['topics']; ?> topic(s)</p>
                        </div>
                     </div>
                  </a>
                  <!-- EINDE VAN EEN THREAD -->
            <?php endforeach; ?>

<?php
@include_once('app/templates/onderstuk.php');

