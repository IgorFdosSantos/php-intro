<?php
    include "services/session-message.service.php";
    include "services/data-validation.service.php";
    include "services/competitor-category.service.php";

    $name = $_POST['name'];
    $age = $_POST['age'];
    
    defineCompetitorCategory($name, $age);
    header('location: index.php');