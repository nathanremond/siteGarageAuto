<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241003124126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajouter données table user';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('INSERT INTO user (id, email, password, is_admin) VALUES
        (1, "vparrot@garageauto.com", "test", 1),
        (2, "employe1@garageauto.com", "test", 0);');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM user');
    }
}
