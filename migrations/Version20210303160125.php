<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210303160125 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resactivites ADD idact INT NOT NULL');
        $this->addSql('CREATE INDEX IDX_1F3B97FEB6E9AE23 ON resactivites (idact)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resactivites DROP FOREIGN KEY FK_1F3B97FEB6E9AE23');
        $this->addSql('DROP INDEX IDX_1F3B97FEB6E9AE23 ON resactivites');
        $this->addSql('ALTER TABLE resactivites DROP idact');
    }
}
