<?php
class Templatectr {
    public function getPageNames() {
        if (isset($_GET["path"])) {
            switch ($_GET["path"]) {
                case "home":
                    $GLOBALS["Page-Name"] = "Home";
                    $GLOBALS["Page-Location"] = "pages/home.php";
                    break;
                default:
                   $GLOBALS["Page-Name"] = "Página no encontrada"; 
                    $GLOBALS["Page-Location"] = "pages/404.php";
            }
        } else {
            $GLOBALS["Page-Name"] = "Home";
            $GLOBALS["Page-Location"] = "pages/home.php";
        }
        $GLOBALS["Facebook-Link"] = "#";
        $GLOBALS["Twitter-Link"] = "#";
        $GLOBALS["WhatsApp-Link"] = "#";
        $GLOBALS["Youtube-Link"] = "#";
        $GLOBALS["Email-Link"] = "supportcenter@marbust.com";
    }
}

?>