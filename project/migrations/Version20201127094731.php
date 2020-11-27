<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201127094731 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__client AS SELECT int_key, room_ik, owning_user_ik, mac_adress FROM client');
        $this->addSql('DROP TABLE client');
        $this->addSql('CREATE TABLE client (int_key INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, room_ik INTEGER DEFAULT NULL, owning_user_ik INTEGER DEFAULT NULL, mac_adress VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO client (int_key, room_ik, owning_user_ik, mac_adress) SELECT int_key, room_ik, owning_user_ik, mac_adress FROM __temp__client');
        $this->addSql('DROP TABLE __temp__client');
        $this->addSql('CREATE TEMPORARY TABLE __temp__client_record AS SELECT int_key, client_ik, room_ik, temperature, humidity, air_pressure, record_date FROM client_record');
        $this->addSql('DROP TABLE client_record');
        $this->addSql('CREATE TABLE client_record (int_key INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, client_ik INTEGER DEFAULT NULL, room_ik INTEGER DEFAULT NULL, temperature DOUBLE PRECISION DEFAULT NULL, humidity DOUBLE PRECISION DEFAULT NULL, air_pressure DOUBLE PRECISION DEFAULT NULL, record_date DATE DEFAULT NULL)');
        $this->addSql('INSERT INTO client_record (int_key, client_ik, room_ik, temperature, humidity, air_pressure, record_date) SELECT int_key, client_ik, room_ik, temperature, humidity, air_pressure, record_date FROM __temp__client_record');
        $this->addSql('DROP TABLE __temp__client_record');
        $this->addSql('CREATE TEMPORARY TABLE __temp__room AS SELECT int_key, user_ik, is_private, room_name FROM room');
        $this->addSql('DROP TABLE room');
        $this->addSql('CREATE TABLE room (int_key INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_ik INTEGER DEFAULT NULL, is_private BOOLEAN DEFAULT NULL, room_name VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO room (int_key, user_ik, is_private, room_name) SELECT int_key, user_ik, is_private, room_name FROM __temp__room');
        $this->addSql('DROP TABLE __temp__room');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT int_key, user_name, pass FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (int_key INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_name VARCHAR(255) DEFAULT NULL COLLATE BINARY, pass VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO user (int_key, user_name, pass) SELECT int_key, user_name, pass FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user_client AS SELECT user_ik, client_ik FROM user_client');
        $this->addSql('DROP TABLE user_client');
        $this->addSql('CREATE TABLE user_client (user_ik INTEGER NOT NULL, client_ik INTEGER NOT NULL, PRIMARY KEY(user_ik, client_ik))');
        $this->addSql('INSERT INTO user_client (user_ik, client_ik) SELECT user_ik, client_ik FROM __temp__user_client');
        $this->addSql('DROP TABLE __temp__user_client');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__client AS SELECT int_key, room_ik, owning_user_ik, mac_adress FROM client');
        $this->addSql('DROP TABLE client');
        $this->addSql('CREATE TABLE client (int_key INTEGER PRIMARY KEY AUTOINCREMENT DEFAULT NULL, room_ik INTEGER DEFAULT NULL, owning_user_ik INTEGER DEFAULT NULL, mac_adress VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO client (int_key, room_ik, owning_user_ik, mac_adress) SELECT int_key, room_ik, owning_user_ik, mac_adress FROM __temp__client');
        $this->addSql('DROP TABLE __temp__client');
        $this->addSql('CREATE TEMPORARY TABLE __temp__client_record AS SELECT int_key, client_ik, room_ik, temperature, humidity, air_pressure, record_date FROM client_record');
        $this->addSql('DROP TABLE client_record');
        $this->addSql('CREATE TABLE client_record (int_key INTEGER PRIMARY KEY AUTOINCREMENT DEFAULT NULL, client_ik INTEGER DEFAULT NULL, room_ik INTEGER DEFAULT NULL, temperature DOUBLE PRECISION DEFAULT NULL, humidity DOUBLE PRECISION DEFAULT NULL, air_pressure DOUBLE PRECISION DEFAULT NULL, record_date DATE DEFAULT NULL)');
        $this->addSql('INSERT INTO client_record (int_key, client_ik, room_ik, temperature, humidity, air_pressure, record_date) SELECT int_key, client_ik, room_ik, temperature, humidity, air_pressure, record_date FROM __temp__client_record');
        $this->addSql('DROP TABLE __temp__client_record');
        $this->addSql('CREATE TEMPORARY TABLE __temp__room AS SELECT int_key, user_ik, is_private, room_name FROM room');
        $this->addSql('DROP TABLE room');
        $this->addSql('CREATE TABLE room (int_key INTEGER PRIMARY KEY AUTOINCREMENT DEFAULT NULL, user_ik INTEGER DEFAULT NULL, is_private BOOLEAN DEFAULT NULL, room_name VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO room (int_key, user_ik, is_private, room_name) SELECT int_key, user_ik, is_private, room_name FROM __temp__room');
        $this->addSql('DROP TABLE __temp__room');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT int_key, user_name, pass FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (int_key INTEGER PRIMARY KEY AUTOINCREMENT DEFAULT NULL, user_name VARCHAR(255) DEFAULT NULL, pass VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO user (int_key, user_name, pass) SELECT int_key, user_name, pass FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user_client AS SELECT user_ik, client_ik FROM user_client');
        $this->addSql('DROP TABLE user_client');
        $this->addSql('CREATE TABLE user_client (user_ik INTEGER DEFAULT NULL, client_ik INTEGER DEFAULT NULL, PRIMARY KEY(user_ik, client_ik))');
        $this->addSql('INSERT INTO user_client (user_ik, client_ik) SELECT user_ik, client_ik FROM __temp__user_client');
        $this->addSql('DROP TABLE __temp__user_client');
    }
}
