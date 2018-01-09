require_once("../lib/Core.php");
session_start();

$core = new Core();
$twig = $core->initTwig();

echo $twig->render("default.twig");