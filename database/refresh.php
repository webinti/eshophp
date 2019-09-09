<?php



require_once (__DIR__ . '/../bootstrap.php');

$pdo = pdo();

$pdo->exec("
    DO $$ DECLARE
r RECORD;
BEGIN
    FOR r IN (SELECT tablename FROM pg_tables WHERE schemaname = current_schema()) LOOP
        EXECUTE 'DROP TABLE IF EXISTS ' || quote_ident(r.tablename) || ' CASCADE';
    END LOOP;
END $$;"
);

$pdo ->exec('CREATE TABLE admins (
  id SERIAL,
  name TEXT UNIQUE,
  password TEXT
)');