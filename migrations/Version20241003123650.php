<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241003123650 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajouter données table service';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('INSERT INTO service (id, photo, title, content) VALUES
        (1, "s1.png", "Vidanges", "Nous faisons vos vidanges"),
        (2, "s2.png", "Pneux", "Nous faisons le montage de vos pneu"),
        (3, "s3.png", "Contrôle technique", "Nous faisons votre contrôle technique");'); 
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM service');
    }
}
