
<?php
switch ($menupont) {
    case "vevo";
        require_once './vevo.php';
        break;
    case "futar";
        require_once './futar.php';
        break;
    case "rendelesek";
        require_once './rendelesek.php';
        break;
    case "kilepes";
        require_once './kilepes.php';
        break;
    default:
        break;
}


