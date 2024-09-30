<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240930140730 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE open_hours MODIFY open_time TIME NULL');
        $this->addSql('ALTER TABLE open_hours MODIFY close_time TIME NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE open_hours MODIFY open_time TIME NOT NULL');
        $this->addSql('ALTER TABLE open_hours MODIFY close_time TIME NOT NULL');
    }
}
