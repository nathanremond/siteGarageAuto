<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241003115730 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajouter données table openhours';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('INSERT INTO open_hours (id, day, open_time, close_time, state) VALUES
        (1, "Lundi", "08:00:00", "19:00:00", 1),
        (3, "Mardi", "08:00:00", "19:00:00", 1),
        (4, "Mercredi", "08:00:00", "20:00:00", 1),
        (5, "Jeudi", "08:00:00", "19:00:00", 1),
        (6, "Vendredi", "08:00:00", "19:00:00", 1),
        (7, "Samedi", "08:00:00", "19:00:00", 1),
        (8, "Dimanche", NULL, NULL, 0);');  
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM open_hours');
    }
}
