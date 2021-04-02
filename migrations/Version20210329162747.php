<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210329162747 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resactivites ADD ida INT NOT NULL');
        $this->addSql('CREATE INDEX IDX_1F3B97FE8363D6D0 ON resactivites (ida)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resactivites DROP FOREIGN KEY FK_1F3B97FE8363D6D0');
        $this->addSql('DROP INDEX IDX_1F3B97FE8363D6D0 ON resactivites');
        $this->addSql('ALTER TABLE resactivites DROP ida');
    }
}
