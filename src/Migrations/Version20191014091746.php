<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191014091746 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE address_object ADD previd UUID DEFAULT NULL');
        $this->addSql('ALTER TABLE address_object ADD code VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE address_object ALTER plaincode DROP NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER ifnsfl DROP NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER ifnsul DROP NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER terrifnsfl DROP NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER terrifnsul DROP NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER okato DROP NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER oktmo DROP NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER postalcode DROP NOT NULL');
        $this->addSql('COMMENT ON COLUMN address_object.previd IS \'(DC2Type:uuid)\'');
        $this->addSql('CREATE INDEX addressobject_aoguid_idx ON address_object (aoguid)');
        $this->addSql('ALTER TABLE address_object_type ALTER scname DROP NOT NULL');
        $this->addSql('ALTER TABLE stead ALTER number DROP NOT NULL');
        $this->addSql('ALTER TABLE stead ALTER postalcode DROP NOT NULL');
        $this->addSql('ALTER TABLE normative_document ALTER docname DROP NOT NULL');
        $this->addSql('ALTER TABLE normative_document ALTER docname TYPE VARCHAR(1000)');
        $this->addSql('ALTER TABLE normative_document ALTER docdate DROP NOT NULL');
        $this->addSql('ALTER TABLE normative_document ALTER docnum DROP NOT NULL');
        $this->addSql('ALTER TABLE house ALTER housenum DROP NOT NULL');
        $this->addSql('ALTER TABLE house ALTER ifnsfl DROP NOT NULL');
        $this->addSql('ALTER TABLE house ALTER ifnsul DROP NOT NULL');
        $this->addSql('ALTER TABLE house ALTER okato DROP NOT NULL');
        $this->addSql('ALTER TABLE house ALTER oktmo DROP NOT NULL');
        $this->addSql('ALTER TABLE house ALTER postalcode DROP NOT NULL');
        $this->addSql('ALTER TABLE structure_status ALTER shortname DROP NOT NULL');
        $this->addSql('ALTER TABLE room ALTER postalcode DROP NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE stead ALTER number SET NOT NULL');
        $this->addSql('ALTER TABLE stead ALTER postalcode SET NOT NULL');
        $this->addSql('ALTER TABLE house ALTER housenum SET NOT NULL');
        $this->addSql('ALTER TABLE house ALTER ifnsfl SET NOT NULL');
        $this->addSql('ALTER TABLE house ALTER ifnsul SET NOT NULL');
        $this->addSql('ALTER TABLE house ALTER okato SET NOT NULL');
        $this->addSql('ALTER TABLE house ALTER oktmo SET NOT NULL');
        $this->addSql('ALTER TABLE house ALTER postalcode SET NOT NULL');
        $this->addSql('ALTER TABLE structure_status ALTER shortname SET NOT NULL');
        $this->addSql('ALTER TABLE address_object_type ALTER scname SET NOT NULL');
        $this->addSql('ALTER TABLE normative_document ALTER docname SET NOT NULL');
        $this->addSql('ALTER TABLE normative_document ALTER docname TYPE VARCHAR(500)');
        $this->addSql('ALTER TABLE normative_document ALTER docdate SET NOT NULL');
        $this->addSql('ALTER TABLE normative_document ALTER docnum SET NOT NULL');
        $this->addSql('DROP INDEX addressobject_aoguid_idx');
        $this->addSql('ALTER TABLE address_object DROP previd');
        $this->addSql('ALTER TABLE address_object DROP code');
        $this->addSql('ALTER TABLE address_object ALTER plaincode SET NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER ifnsfl SET NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER ifnsul SET NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER terrifnsfl SET NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER terrifnsul SET NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER okato SET NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER oktmo SET NOT NULL');
        $this->addSql('ALTER TABLE address_object ALTER postalcode SET NOT NULL');
        $this->addSql('ALTER TABLE room ALTER postalcode SET NOT NULL');
    }
}
