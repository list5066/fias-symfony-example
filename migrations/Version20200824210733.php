<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Base structure migrations.
 */
final class Version20200824210733 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Base structure migrations.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE actual_status (actstatid INT NOT NULL, name VARCHAR(100) NOT NULL, PRIMARY KEY(actstatid))');
        $this->addSql('CREATE TABLE address_object (aoid UUID NOT NULL, aoguid UUID NOT NULL, parentguid UUID DEFAULT NULL, previd UUID DEFAULT NULL, nextid UUID DEFAULT NULL, code VARCHAR(17) DEFAULT NULL, formalname VARCHAR(120) NOT NULL, offname VARCHAR(120) DEFAULT NULL, shortname VARCHAR(10) NOT NULL, aolevel INT NOT NULL, regioncode VARCHAR(2) NOT NULL, areacode VARCHAR(3) NOT NULL, autocode VARCHAR(1) NOT NULL, citycode VARCHAR(3) NOT NULL, ctarcode VARCHAR(3) NOT NULL, placecode VARCHAR(3) NOT NULL, plancode VARCHAR(4) NOT NULL, streetcode VARCHAR(4) DEFAULT NULL, extrcode VARCHAR(4) NOT NULL, sextcode VARCHAR(3) NOT NULL, plaincode VARCHAR(15) DEFAULT NULL, currstatus INT DEFAULT NULL, actstatus INT NOT NULL, livestatus INT NOT NULL, centstatus INT NOT NULL, operstatus INT NOT NULL, ifnsfl VARCHAR(4) DEFAULT NULL, ifnsul VARCHAR(4) DEFAULT NULL, terrifnsfl VARCHAR(4) DEFAULT NULL, terrifnsul VARCHAR(4) DEFAULT NULL, okato VARCHAR(11) DEFAULT NULL, oktmo VARCHAR(11) DEFAULT NULL, postalcode VARCHAR(6) DEFAULT NULL, startdate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, enddate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updatedate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, divtype INT NOT NULL, normdoc UUID DEFAULT NULL, PRIMARY KEY(aoid))');
        $this->addSql('CREATE INDEX addressobject_aoguid_idx ON address_object (aoguid)');
        $this->addSql('COMMENT ON COLUMN address_object.aoid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN address_object.aoguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN address_object.parentguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN address_object.previd IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN address_object.nextid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN address_object.normdoc IS \'(DC2Type:uuid)\'');
        $this->addSql('CREATE TABLE address_object_type (kodtst VARCHAR(4) NOT NULL, level INT NOT NULL, socrname VARCHAR(50) NOT NULL, scname VARCHAR(10) DEFAULT NULL, PRIMARY KEY(kodtst))');
        $this->addSql('CREATE TABLE center_status (centerstid INT NOT NULL, name VARCHAR(100) NOT NULL, PRIMARY KEY(centerstid))');
        $this->addSql('CREATE TABLE current_status (curentstid INT NOT NULL, name VARCHAR(100) NOT NULL, PRIMARY KEY(curentstid))');
        $this->addSql('CREATE TABLE estate_status (eststatid INT NOT NULL, name VARCHAR(20) NOT NULL, shortname VARCHAR(20) DEFAULT NULL, PRIMARY KEY(eststatid))');
        $this->addSql('CREATE TABLE fias_version (version INT NOT NULL, url VARCHAR(255) NOT NULL, created TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(version))');
        $this->addSql('CREATE TABLE flat_type (fltypeid INT NOT NULL, name VARCHAR(20) NOT NULL, shortname VARCHAR(20) DEFAULT NULL, PRIMARY KEY(fltypeid))');
        $this->addSql('CREATE TABLE house (houseid UUID NOT NULL, houseguid UUID NOT NULL, aoguid UUID NOT NULL, housenum VARCHAR(20) DEFAULT NULL, strstatus INT DEFAULT NULL, eststatus INT NOT NULL, statstatus INT NOT NULL, ifnsfl VARCHAR(4) DEFAULT NULL, ifnsul VARCHAR(4) DEFAULT NULL, okato VARCHAR(11) DEFAULT NULL, oktmo VARCHAR(11) DEFAULT NULL, postalcode VARCHAR(6) DEFAULT NULL, startdate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, enddate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updatedate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, counter INT NOT NULL, divtype INT NOT NULL, regioncode VARCHAR(2) DEFAULT NULL, terrifnsfl VARCHAR(4) DEFAULT NULL, terrifnsul VARCHAR(4) DEFAULT NULL, buildnum VARCHAR(50) DEFAULT NULL, strucnum VARCHAR(50) DEFAULT NULL, normdoc UUID DEFAULT NULL, cadnum VARCHAR(100) DEFAULT NULL, PRIMARY KEY(houseid))');
        $this->addSql('COMMENT ON COLUMN house.houseid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN house.houseguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN house.aoguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN house.normdoc IS \'(DC2Type:uuid)\'');
        $this->addSql('CREATE TABLE normative_document (normdocid UUID NOT NULL, docname VARCHAR(1000) DEFAULT NULL, docdate TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, docnum VARCHAR(250) DEFAULT NULL, doctype INT NOT NULL, docimgid UUID DEFAULT NULL, PRIMARY KEY(normdocid))');
        $this->addSql('COMMENT ON COLUMN normative_document.normdocid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN normative_document.docimgid IS \'(DC2Type:uuid)\'');
        $this->addSql('CREATE TABLE normative_document_type (ndtypeid INT NOT NULL, name VARCHAR(250) NOT NULL, PRIMARY KEY(ndtypeid))');
        $this->addSql('CREATE TABLE operation_status (operstatid INT NOT NULL, name VARCHAR(100) NOT NULL, PRIMARY KEY(operstatid))');
        $this->addSql('CREATE TABLE room (roomid UUID NOT NULL, roomguid UUID NOT NULL, houseguid UUID NOT NULL, regioncode VARCHAR(2) NOT NULL, flatnumber VARCHAR(50) NOT NULL, flattype INT NOT NULL, postalcode VARCHAR(6) DEFAULT NULL, startdate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, enddate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updatedate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, operstatus INT NOT NULL, livestatus INT NOT NULL, normdoc UUID DEFAULT NULL, roomnumber VARCHAR(50) DEFAULT NULL, roomtype INT DEFAULT NULL, previd UUID DEFAULT NULL, nextid UUID DEFAULT NULL, cadnum VARCHAR(100) DEFAULT NULL, roomcadnum VARCHAR(100) DEFAULT NULL, PRIMARY KEY(roomid))');
        $this->addSql('COMMENT ON COLUMN room.roomid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN room.roomguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN room.houseguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN room.normdoc IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN room.previd IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN room.nextid IS \'(DC2Type:uuid)\'');
        $this->addSql('CREATE TABLE room_type (rmtypeid INT NOT NULL, name VARCHAR(20) NOT NULL, shortname VARCHAR(20) DEFAULT NULL, PRIMARY KEY(rmtypeid))');
        $this->addSql('CREATE TABLE stead (steadid UUID NOT NULL, steadguid UUID NOT NULL, number VARCHAR(120) DEFAULT NULL, regioncode VARCHAR(2) NOT NULL, postalcode VARCHAR(6) DEFAULT NULL, ifnsfl VARCHAR(4) DEFAULT NULL, ifnsul VARCHAR(4) DEFAULT NULL, okato VARCHAR(11) DEFAULT NULL, oktmo VARCHAR(11) DEFAULT NULL, parentguid UUID DEFAULT NULL, operstatus INT NOT NULL, startdate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, enddate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updatedate TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, livestatus INT NOT NULL, divtype INT NOT NULL, normdoc UUID DEFAULT NULL, terrifnsfl VARCHAR(4) DEFAULT NULL, terrifnsul VARCHAR(4) DEFAULT NULL, previd UUID DEFAULT NULL, nextid UUID DEFAULT NULL, cadnum VARCHAR(100) DEFAULT NULL, PRIMARY KEY(steadid))');
        $this->addSql('COMMENT ON COLUMN stead.steadid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN stead.steadguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN stead.parentguid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN stead.normdoc IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN stead.previd IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN stead.nextid IS \'(DC2Type:uuid)\'');
        $this->addSql('CREATE TABLE structure_status (strstatid INT NOT NULL, name VARCHAR(20) NOT NULL, shortname VARCHAR(20) DEFAULT NULL, PRIMARY KEY(strstatid))');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE actual_status');
        $this->addSql('DROP TABLE address_object');
        $this->addSql('DROP TABLE address_object_type');
        $this->addSql('DROP TABLE center_status');
        $this->addSql('DROP TABLE current_status');
        $this->addSql('DROP TABLE estate_status');
        $this->addSql('DROP TABLE fias_version');
        $this->addSql('DROP TABLE flat_type');
        $this->addSql('DROP TABLE house');
        $this->addSql('DROP TABLE normative_document');
        $this->addSql('DROP TABLE normative_document_type');
        $this->addSql('DROP TABLE operation_status');
        $this->addSql('DROP TABLE room');
        $this->addSql('DROP TABLE room_type');
        $this->addSql('DROP TABLE stead');
        $this->addSql('DROP TABLE structure_status');
    }
}
