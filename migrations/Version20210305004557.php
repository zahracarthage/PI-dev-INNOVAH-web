<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210305004557 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservationrepas ADD idr INT NOT NULL');
        $this->addSql('ALTER TABLE reservationrepas ADD CONSTRAINT FK_E3CFECC07DD970E FOREIGN KEY (idr) REFERENCES repas (id)');
        $this->addSql('CREATE INDEX IDX_E3CFECC07DD970E ON reservationrepas (idr)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservationrepas DROP FOREIGN KEY FK_E3CFECC07DD970E');
        $this->addSql('DROP INDEX IDX_E3CFECC07DD970E ON reservationrepas');
        $this->addSql('ALTER TABLE reservationrepas DROP idr');
    }
}
