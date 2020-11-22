<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201122015509 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE clients (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, int_key INTEGER NOT NULL, room CLOB DEFAULT NULL --(DC2Type:object)
        , wlan CLOB DEFAULT NULL --(DC2Type:object)
        , mac_address VARCHAR(255) NOT NULL)');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE client_record');
        $this->addSql('CREATE TEMPORARY TABLE __temp__room AS SELECT int_key, room_name FROM room');
        $this->addSql('DROP TABLE room');
        $this->addSql('CREATE TABLE room (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, int_key INTEGER NOT NULL, room_name VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO room (int_key, room_name) SELECT int_key, room_name FROM __temp__room');
        $this->addSql('DROP TABLE __temp__room');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT int_key, pass, user_name FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, int_key INTEGER NOT NULL, pass VARCHAR(255) NOT NULL, user_name VARCHAR(255) NOT NULL, wlan CLOB DEFAULT NULL --(DC2Type:object)
        )');
        $this->addSql('INSERT INTO user (int_key, pass, user_name) SELECT int_key, pass, user_name FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user_client AS SELECT  FROM user_client');
        $this->addSql('DROP TABLE user_client');
        $this->addSql('CREATE TABLE user_client (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user CLOB DEFAULT NULL --(DC2Type:object)
        , client CLOB DEFAULT NULL --(DC2Type:object)
        , room CLOB DEFAULT NULL --(DC2Type:object)
        , temperature INTEGER DEFAULT NULL, humidity VARCHAR(255) NOT NULL, air_pressure VARCHAR(255) DEFAULT NULL, record_date CLOB NOT NULL --(DC2Type:object)
        )');
        $this->addSql('INSERT INTO user_client () SELECT  FROM __temp__user_client');
        $this->addSql('DROP TABLE __temp__user_client');
        $this->addSql('CREATE TEMPORARY TABLE __temp__wlan AS SELECT int_key, ssid, pass FROM wlan');
        $this->addSql('DROP TABLE wlan');
        $this->addSql('CREATE TABLE wlan (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, int_key INTEGER NOT NULL, ssid VARCHAR(255) DEFAULT NULL, pass VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO wlan (int_key, ssid, pass) SELECT int_key, ssid, pass FROM __temp__wlan');
        $this->addSql('DROP TABLE __temp__wlan');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (int_key INTEGER PRIMARY KEY AUTOINCREMENT DEFAULT NULL, room_ik INTEGER DEFAULT NULL, wlan_ik INTEGER DEFAULT NULL, temperature VARCHAR(255) DEFAULT NULL COLLATE BINARY, humidity VARCHAR(255) DEFAULT NULL COLLATE BINARY, air_pressure VARCHAR(255) DEFAULT NULL COLLATE BINARY, name VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('CREATE TABLE client_record (int_key INTEGER PRIMARY KEY AUTOINCREMENT DEFAULT NULL, client_ik INTEGER DEFAULT NULL, temperature VARCHAR(255) DEFAULT NULL COLLATE BINARY, humidity VARCHAR(255) DEFAULT NULL COLLATE BINARY, air_pressure VARCHAR(255) DEFAULT NULL COLLATE BINARY, record_date DATE DEFAULT NULL)');
        $this->addSql('DROP TABLE clients');
        $this->addSql('CREATE TEMPORARY TABLE __temp__room AS SELECT int_key, room_name FROM room');
        $this->addSql('DROP TABLE room');
        $this->addSql('CREATE TABLE room (int_key INTEGER PRIMARY KEY AUTOINCREMENT DEFAULT NULL, room_name INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO room (int_key, room_name) SELECT int_key, room_name FROM __temp__room');
        $this->addSql('DROP TABLE __temp__room');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT int_key, user_name, pass FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (int_key INTEGER PRIMARY KEY AUTOINCREMENT DEFAULT NULL, user_name VARCHAR(255) DEFAULT NULL COLLATE BINARY, pass INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO user (int_key, user_name, pass) SELECT int_key, user_name, pass FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user_client AS SELECT temperature FROM user_client');
        $this->addSql('DROP TABLE user_client');
        $this->addSql('CREATE TABLE user_client (user_ik INTEGER DEFAULT NULL, client_ik INTEGER DEFAULT NULL, PRIMARY KEY(user_ik, client_ik))');
        $this->addSql('INSERT INTO user_client (user_ik) SELECT temperature FROM __temp__user_client');
        $this->addSql('DROP TABLE __temp__user_client');
        $this->addSql('CREATE TEMPORARY TABLE __temp__wlan AS SELECT int_key, ssid, pass FROM wlan');
        $this->addSql('DROP TABLE wlan');
        $this->addSql('CREATE TABLE wlan (int_key INTEGER PRIMARY KEY AUTOINCREMENT DEFAULT NULL, ssid INTEGER DEFAULT NULL, pass INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO wlan (int_key, ssid, pass) SELECT int_key, ssid, pass FROM __temp__wlan');
        $this->addSql('DROP TABLE __temp__wlan');
    }
}
