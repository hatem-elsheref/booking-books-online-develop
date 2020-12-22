<?php

function redirect($route){
    header('Location:'.APP_URL.'/'.$route);
}