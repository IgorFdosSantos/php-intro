<?php
    session_start();

    function setNameErrorMessage(string $message): void {
        $_SESSION['Name-Error'] = $message;
    }

    function getNameErrorMessage(): ?string{
        if(isset($_SESSION['Name-Error'])){
            return $_SESSION['Name-Error'];
        }
        return null;
    }

    function setAgeErrorMessage(string $message): void {
        $_SESSION['Age-Error'] = $message;
    }

    function getAgeErrorMessage(): ?string{
        if(isset($_SESSION['Age-Error'])){
            return $_SESSION['Age-Error'];
        }
        return null;
    }

    function setSuccessMessage(string $message): void {
        $_SESSION['Success-Message'] = $message;
    }

    function getSuccessMessage(): ?string{
        if(isset($_SESSION['Success-Message'])){
            return $_SESSION['Success-Message'];
        }
        return null;
    }

    function unSetErrorMessage(): void {
        if(isset($_SESSION['Name-Error'])){
            unset($_SESSION['Name-Error']);
        }
        if(isset($_SESSION['Age-Error'])){
            unset($_SESSION['Age-Error']);
        }
    }

    function unSetSuccessMessage(): void {
        if(isset($_SESSION['Success-Message'])){
            unset($_SESSION['Success-Message']);
        }
    }