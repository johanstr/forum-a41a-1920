<?php
$db_connection = null;
$db_statement = null;

function dbConnect()
{
   global $db_connection;

   try {
      $db_connection = new PDO(
         'mysql:host=localhost;dbname=forum_klas1',
         'root',
         'root'
      );
   } catch(PDOException $e) {
      return false;
   }

   return true;
}

function dbQuery($sql)
{
   global $db_statement, $db_connection;

   $db_statement =
      $db_connection->prepare($sql);
   $db_statement->execute();
}

function dbGetAll()
{
   global $db_statement;

   return $db_statement->fetchAll(PDO::FETCH_ASSOC);
}