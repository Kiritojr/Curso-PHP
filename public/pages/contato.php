<?php 
  get('message');
?>

<form action="/pages/forms/contato.php" method="POST" role="form">
  <legend>Contato</legend>

  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name" placeholder="Input name">
  </div>

  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" name="email" placeholder="Input email">
  </div>

  <div class="form-group">
    <label for="subject">Assunto</label>
    <input type="text" class="form-control" name="subject" placeholder="Input subject matter">
  </div>

  <div class="form-group">
    <label for="message">Menssagem</label>
    <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
