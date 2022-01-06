<?php
function getDB() {
    $db_name = DSN_NAME;
    $db_host = DSN_HOST;
    $user = DSN_ID;
    $password = DSN_PW;

    $DB = new Db($db_host, $db_name, $user, $password, DSN_PORT);

    return $DB;
}

function getDBGlobalVariable()
{
    $DB = getDB();
    return $DB;
}


function getTestDB() {
    $db_name = TEST_DSN_NAME;
    $db_host = TEST_DSN_HOST;
    $user = TEST_DSN_ID;
    $password = TEST_DSN_PW;

    $DB = new Db($db_host, $db_name, $user, $password, DSN_PORT);

    return $DB;
}

function getTestDBGlobalVariable()
{
    global $TDB;

    if ( $TDB ) return $TDB;

    $TDB = getTestDB();
    return $TDB;
}