<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190601082113 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE fias_version_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE stead (steadguid UUID NOT NULL, number VARCHAR(255) NOT NULL, regioncode VARCHAR(2) NOT NULL, postalcode VARCHAR(6) NOT NULL, ifnsfl VARCHAR(4) NOT NULL, ifnsul VARCHAR(4) NOT NULL, okato VARCHAR(11) NOT NULL, oktmo VARCHAR(11) NOT NULL, parentguid UUID DEFAULT NULL, steadid UUID DEFAULT NULL, operstatus VARCHAR(255) NOT NULL, startdate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, enddate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updatedate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, livestatus VARCHAR(255) NOT NULL, divtype VARCHAR(255) NOT NULL, normdoc UUID DEFAULT NULL, PRIMARY KEY(steadguid))');
        $this->addSql('COMMENT ON COLUMN stead.steadguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN stead.parentguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN stead.steadid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN stead.normdoc IS \'(DC2Type:uuid)\'');
        $this->addSql('CREATE TABLE flat_type (fltypeid INT NOT NULL, name VARCHAR(255) NOT NULL, shortname VARCHAR(255) NOT NULL, PRIMARY KEY(fltypeid))');
        $this->addSql('CREATE TABLE normative_document_type (ndtypeid INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(ndtypeid))');
        $this->addSql('CREATE TABLE center_status (centerstid INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(centerstid))');
        $this->addSql('CREATE TABLE fias_version (id INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, version INT NOT NULL, url VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE house (houseid UUID NOT NULL, houseguid UUID DEFAULT NULL, aoguid UUID DEFAULT NULL, housenum VARCHAR(20) NOT NULL, strstatus INT NOT NULL, eststatus INT NOT NULL, statstatus INT NOT NULL, ifnsfl VARCHAR(4) NOT NULL, ifnsul VARCHAR(4) NOT NULL, okato VARCHAR(11) NOT NULL, oktmo VARCHAR(11) NOT NULL, postalcode VARCHAR(6) NOT NULL, startdate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, enddate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updatedate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, counter INT NOT NULL, divtype INT NOT NULL, PRIMARY KEY(houseid))');
        $this->addSql('COMMENT ON COLUMN house.houseid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN house.houseguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN house.aoguid IS \'(DC2Type:uuid)\'');
        $this->addSql('CREATE TABLE actual_status (actstatid INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(actstatid))');
        $this->addSql('CREATE TABLE structure_status (strstatid INT NOT NULL, name VARCHAR(255) NOT NULL, shortname VARCHAR(255) NOT NULL, PRIMARY KEY(strstatid))');
        $this->addSql('CREATE TABLE operation_status (operstatid INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(operstatid))');
        $this->addSql('CREATE TABLE current_status (curentstid INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(curentstid))');
        $this->addSql('CREATE TABLE room_type (rmtypeid INT NOT NULL, name VARCHAR(255) NOT NULL, shortname VARCHAR(255) NOT NULL, PRIMARY KEY(rmtypeid))');
        $this->addSql('CREATE TABLE estate_status (eststatid INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(eststatid))');
        $this->addSql('CREATE TABLE address_object_type (kodtst INT NOT NULL, level INT NOT NULL, socrname VARCHAR(255) NOT NULL, scname VARCHAR(255) NOT NULL, PRIMARY KEY(kodtst))');
        $this->addSql('CREATE TABLE interval_status (intvstatid INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(intvstatid))');
        $this->addSql('CREATE TABLE normative_document (normdocid UUID NOT NULL, docname VARCHAR(500) NOT NULL, docdate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, docnum VARCHAR(255) NOT NULL, doctype VARCHAR(255) NOT NULL, PRIMARY KEY(normdocid))');
        $this->addSql('COMMENT ON COLUMN normative_document.normdocid IS \'(DC2Type:uuid)\'');
        $this->addSql('CREATE TABLE address_object (aoid UUID NOT NULL, aoguid UUID DEFAULT NULL, parentguid UUID DEFAULT NULL, nextid UUID DEFAULT NULL, formalname VARCHAR(255) NOT NULL, offname VARCHAR(255) NOT NULL, shortname VARCHAR(255) NOT NULL, aolevel INT NOT NULL, regioncode VARCHAR(2) NOT NULL, areacode VARCHAR(3) NOT NULL, autocode VARCHAR(1) NOT NULL, citycode VARCHAR(3) NOT NULL, ctarcode VARCHAR(3) NOT NULL, placecode VARCHAR(4) NOT NULL, plancode VARCHAR(4) NOT NULL, streetcode VARCHAR(4) NOT NULL, extrcode VARCHAR(4) NOT NULL, sextcode VARCHAR(3) NOT NULL, plaincode VARCHAR(15) NOT NULL, currstatus INT NOT NULL, actstatus INT NOT NULL, livestatus INT NOT NULL, centstatus INT NOT NULL, operstatus INT NOT NULL, ifnsfl VARCHAR(4) NOT NULL, ifnsul VARCHAR(4) NOT NULL, terrifnsfl VARCHAR(4) NOT NULL, terrifnsul VARCHAR(4) NOT NULL, okato VARCHAR(11) NOT NULL, oktmo VARCHAR(11) NOT NULL, postalcode VARCHAR(6) NOT NULL, startdate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, enddate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updatedate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, divtype INT NOT NULL, PRIMARY KEY(aoid))');
        $this->addSql('COMMENT ON COLUMN address_object.aoid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN address_object.aoguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN address_object.parentguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN address_object.nextid IS \'(DC2Type:uuid)\'');
        $this->addSql('CREATE TABLE room (roomid UUID NOT NULL, roomguid UUID DEFAULT NULL, houseguid UUID DEFAULT NULL, regioncode VARCHAR(2) NOT NULL, flatnumber VARCHAR(50) NOT NULL, flattype INT NOT NULL, postalcode VARCHAR(6) NOT NULL, startdate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, enddate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updatedate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, operstatus VARCHAR(255) NOT NULL, livestatus VARCHAR(255) NOT NULL, normdoc UUID DEFAULT NULL, PRIMARY KEY(roomid))');
        $this->addSql('COMMENT ON COLUMN room.roomid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN room.roomguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN room.houseguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN room.normdoc IS \'(DC2Type:uuid)\'');
        $this->addSql('CREATE TABLE house_state_status (housestid INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(housestid))');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP SEQUENCE fias_version_id_seq CASCADE');
        $this->addSql('DROP TABLE stead');
        $this->addSql('DROP TABLE flat_type');
        $this->addSql('DROP TABLE normative_document_type');
        $this->addSql('DROP TABLE center_status');
        $this->addSql('DROP TABLE fias_version');
        $this->addSql('DROP TABLE house');
        $this->addSql('DROP TABLE actual_status');
        $this->addSql('DROP TABLE structure_status');
        $this->addSql('DROP TABLE operation_status');
        $this->addSql('DROP TABLE current_status');
        $this->addSql('DROP TABLE room_type');
        $this->addSql('DROP TABLE estate_status');
        $this->addSql('DROP TABLE address_object_type');
        $this->addSql('DROP TABLE interval_status');
        $this->addSql('DROP TABLE normative_document');
        $this->addSql('DROP TABLE address_object');
        $this->addSql('DROP TABLE room');
        $this->addSql('DROP TABLE house_state_status');
    }
}
