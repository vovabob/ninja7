<form action="" method="post">
  <input type="hidden" id="jokeid" name="jokeid" value="<?=$joke['id'];?>">
  <label for="joketext">Type your joke:</label>
  <textarea id="joketext" name="joketext" rows="3" cols="40"><?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8')?></textarea>
  <input type="submit" value="Save">
</form>
