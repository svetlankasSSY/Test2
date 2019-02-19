<?php

//controller - место откуда вызывается наша модель, которую затем передаём в view

require './upload.php';


//model - место, где у меня код, который отвечает за бизнес-логику моего проекта
uploadImage($_FILES['image']);


//view
include 'view.php';
?>