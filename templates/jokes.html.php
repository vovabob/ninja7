<!-- templates/jokes.html.php -->

<!-- NB: if coming from 'deletejoke.php, the $jokes contains 
    a PDOStatement object (instead of an array).   -->
<p><?= $totalJokes ?> jokes are stored in the IJDB.</p>
<?php foreach ($jokes as $joke): ?>
<blockquote>
  <p>
  <?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?>
  (by <a href="mailto:<?= htmlspecialchars($joke['email'],ENT_QUOTES,'UTF-8'); ?>"><?= htmlspecialchars($joke['name'],ENT_QUOTES,'UTF-8'); ?></a>
  on <?= $joke['jokedate']; ?>)
  <a href="editjoke.php?id=<?=$joke['id']?>">Edit</a>

  <form action="deletejoke.php" method="post">
    <input type="hidden" name="id" value="<?= $joke['id'] ?>">
    <input type="submit" value="Delete">
  </form>
  </p>
</blockquote>
<?php endforeach; ?>
