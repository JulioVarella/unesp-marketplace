<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231020201537 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE seller ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE seller ADD CONSTRAINT FK_FB1AD3FC7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FB1AD3FC7E3C61F9 ON seller (owner_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE seller DROP FOREIGN KEY FK_FB1AD3FC7E3C61F9');
        $this->addSql('DROP INDEX UNIQ_FB1AD3FC7E3C61F9 ON seller');
        $this->addSql('ALTER TABLE seller DROP owner_id');
    }
}
