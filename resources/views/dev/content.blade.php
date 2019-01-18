<?php

//echo $pw;
if (!empty($name))
{
    $reward =App\Login::login($name,$pw);
    echo '<h1> Bullshit: '.$reward.'</h1>';
    
}else
{
         echo "<div style='background-color:rgba(255,255,255,0.3); border-radius:20px' class='col-md-5 p-lg-5 mx-auto my-5'>";

    ?>
    @include('dev.login')
</div>
<?php
} //if (!empty($name)) else vége
    ?>