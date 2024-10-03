<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241003121358 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajouter données table notice';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('INSERT INTO notice (id, name, comment, note, state) VALUES
        (1, "Jean", "Super garage, très bon accueil.", 8, "validated"),
        (2, "Paul", "Service au top.", 10, "validated");'); 
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM notice');
    }
}
