<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210401021155 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activites (idact INT AUTO_INCREMENT NOT NULL, nom VARCHAR(55) DEFAULT NULL, description LONGTEXT DEFAULT NULL, categorie VARCHAR(55) DEFAULT NULL, date DATE DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, prix DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(idact)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paquet (idpaquet INT AUTO_INCREMENT NOT NULL, nom VARCHAR(55) DEFAULT NULL, prix DOUBLE PRECISION NOT NULL, activites LONGTEXT NOT NULL COMMENT \'(DC2Type:object)\', PRIMARY KEY(idpaquet)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE resactivites (idresactivites INT AUTO_INCREMENT NOT NULL, ida INT NOT NULL, date DATE NOT NULL, nbpersonnes INT NOT NULL, INDEX IDX_1F3B97FE8363D6D0 (ida), PRIMARY KEY(idresactivites)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE resactivites ADD CONSTRAINT FK_1F3B97FE8363D6D0 FOREIGN KEY (ida) REFERENCES activites (idact) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resactivites DROP FOREIGN KEY FK_1F3B97FE8363D6D0');
        $this->addSql('DROP TABLE activites');
        $this->addSql('DROP TABLE paquet');
        $this->addSql('DROP TABLE resactivites');
    }
}
