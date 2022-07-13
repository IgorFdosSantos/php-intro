<?php
    session_start();

    function setErrorMessage(string $message): void {
        $_SESSION['Error'] = $message;
    }

    function getErrorMessage(): ?string{
        if(isset($_SESSION['Error'])){
            return $_SESSION['Error'];
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
        if(isset($_SESSION['Error'])){
            unset($_SESSION['Error']);
        }
    }

    function unSetSuccessMessage(): void {
        if(isset($_SESSION['Success-Message'])){
            unset($_SESSION['Success-Message']);
        }
    }