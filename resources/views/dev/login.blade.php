{{ Form::open(array('url' => '', 'method' => 'post')) }}
    USER: <input type="text" name="usrnm" placeholder="Név" />
    PW: <input type="password" name="pw" placeholder="Jelszó" />
    <input type="submit" value="Kész" name="sub" />
{{ Form::close() }}