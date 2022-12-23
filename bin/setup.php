<?php

declare(strict_types=1);

chdir(dirname(__DIR__));
passthru('rm -rf ./var/tmp/*');

// データベースディレクトリ作成
$dbdir = dirname(__DIR__) . '/var/db';
if (!is_dir($dbdir)) {
    mkdir($dbdir);
}

// データベース設定
$dbpath = $dbdir . '/database.sqlite3';
$pdo = new \PDO('sqlite:' . $dbpath);

// テーブルを削除
$pdo->exec('DROP TABLE IF EXISTS memos');

// テーブルを作成
$pdo->exec('CREATE TABLE memos (id INTEGER PRIMARY KEY, title TEXT)');

// 初期値を登録
$pdo->exec('INSERT INTO memos (title) VALUES ("ねずみ")');
$pdo->exec('INSERT INTO memos (title) VALUES ("うし")');
$pdo->exec('INSERT INTO memos (title) VALUES ("とら")');
