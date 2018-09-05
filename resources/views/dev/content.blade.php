<?php

//echo $pw;
if (!empty($name))
{

    echo App\Login::login($name,$pw);
}else
{
   
    ?>
    @include('dev.login')
<?php
}
    ?>