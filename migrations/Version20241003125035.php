<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241003125035 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajouter données table photo';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('INSERT INTO photo (id, name, car_id) VALUES
        (1, "v1-1.png", 1),
        (2, "v1-2.png", 1),
        (3, "v1-3.png", 1),
        (4, "v2-1.png", 2),
        (5, "v2-2.png", 2),
        (6, "v2-3.png", 2),
        (7, "v3-1.png", 3),
        (8, "v3-2.png", 3),
        (9, "v3-3.png", 3),
        (10, "v4-1.png", 4),
        (11, "v4-2.png", 4),
        (12, "v4-3.png", 4),
        (13, "v5-1.png", 5),
        (14, "v5-2.png", 5),
        (15, "v5-3.png", 5),
        (16, "v6-1.png", 6),
        (17, "v6-2.png", 6),
        (18, "v6-3.png", 6);');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM photo');
    }
}
