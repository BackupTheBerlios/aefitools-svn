<?
if (!isset($_SESSION["mainparam"])) {
    session_register("mainparam");
}
if (!isset($_SESSION["db"])) {
    session_register("db");
}
if (!isset($_SESSION["dbname"])) {
    session_register("dbname");
}
if (!isset($_SESSION["dbuser"])) {
    session_register("dbuser");
}
if (!isset($_SESSION["dbpass"])) {
    session_register("dbpass");
}
if (!isset($_SESSION["validuser"])) {
    session_register("validuser");
    $_SESSION["validuser"] = 0;
}
if (!isset($_SESSION["userid"])) {
    session_register("userid");
}
if (!isset($_SESSION["isadmin"])) {
    session_register("isadmin");
}
if (!isset($myencoding)) {
    session_register("myencoding");
    $_SESSION["myencoding"] = "iso-8859-1";
}
if (!isset($user_lang)) {
    session_register("myencoding");
    session_register("user_lang");
    $_SESSION["user_lang"] = "english";
}
if (!isset($chits_debug)) {
    session_register("debug");
    $_SESSION["chits_debug"] = false;
}
if (!isset($patient_id)) {
    session_register("patient_id");
}
if (!isset($consult_id)) {
    session_register("consult_id");
}
if (!isset($recordlevel)) {
    session_register("recordlevel");
}
if (!isset($gamedb)) {
    session_register("gamedb");
}
if (!isset($datanode)) {
    session_register("datanode");
    $_SESSION["datanode"] = array();
    $_SESSION["datanode"]["name"] = '';
}
if (!isset($user_role)) {
    session_register("user_role");
}
if (!isset($microtimer1)) {
    session_register("microtime1");
}
if (!isset($microtimer2)) {
    session_register("microtime2");
}
if (!isset($microtimer3)) {
    session_register("microtime3");
}

?>
