<?php
use App\Login;
?>

{{ Form::open(array('url' => 'dev', 'method' => 'post')) }}
    USER: <input type="text" name="usrnm" placeholder="Név" /> <br />
    PW: <input type="password" name="pw" placeholder="Jelszó" />
    <input type="submit" value="Kész" name="sub" />
{{ Form::close() }}