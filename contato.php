<?php
echo "
<form>
  <fieldset>
    <legend>Contato</legend>
    <div class='form-group row'>
      <label for='staticEmail' class='col-sm-2 col-form-label'>Nosso email: </label>
      <div class='col-sm-10'>
        <input type='text' readonly='' class='form-control-plaintext' id='staticEmail' value='ContatoCalcNutricao@gmail.com'>
      </div>
    </div>
    <div class='form-group'>
      <label for='exampleInputEmail1'>Email address</label>
      <input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter email'>
      <small id='emailHelp' class='form-text text-muted'>We will never share your email with anyone else.</small>
    </div>
    <div class='form-group'>
      <label for='exampleInputPassword1'>Password</label>
      <input type='password' class='form-control' id='exampleInputPassword1' placeholder='Password'>
    </div>
    <div class='form-group'>
      <label for='exampleSelect1'>Example select</label>
      <select class='form-control' id='exampleSelect1'>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class='form-group'>
      <label for='exampleSelect2'>Example multiple select</label>
      <select multiple='' class='form-control' id='exampleSelect2'>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class='form-group'>
      <label for='exampleTextarea'>Mensagem</label>
      <textarea class='form-control' id='mensagem' rows='3'></textarea>
    </div>
</form>";

?>