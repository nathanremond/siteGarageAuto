<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241003124605 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajouter données table car';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('INSERT INTO car (id, description, technical_infos, price, first_photo, circulation_year, mileage, equipment, options) VALUES
        (1, "Chevrolet Camaro Zl1 de 2019 (voiture américaine) ayant un V8", "37cv , 650ch , 4 places , Boite Auto , Essence", 80900, "v1-1.png", "2019-09-09", 34200, "Camera de recul, Sellerie Alcantara , Android Auto , Pneux 4 saisons", "Couleur Rouge, finitions luxury"),
        (2, "BMW M3 CS de 2018 ( Voiture Allemande )", "35cv , 460 ch , Essence , 5 places , Boite Auto", 89700, "v2-1.png", "2018-01-25", 49094, "Sellerie cuir et Alcantara , Régulateur de vitesse, Système de navigation, Aide au stationnement, Bluetooth, Phares LED / Xenon, Sièges chauffants, Climatisation", "Pack M CS , gris"),
        (3, "Nissan GTR V6 de 2016 ( Voiture Japonaise )", "49cv , 570 ch ,  4 places , Boite Auto , Essence", 109900, "v3-1.png", "2016-09-20", 31050, "Bluetooth , Ecran 8 pouce , Clim , Vitre Teinté", "Noir , Finition Gentleman"),
        (4, "Mercedes C63S AMG V8 ( Voiture Allemande )", "40cv , 510ch ,  5 places , Boite Auto , Essence", 57900, "v4-1.png", "2016-03-05", 62500, "bluetooth , android auto , siege chauffant , camera de recul , palette au volant , ecran , becquet ", "Gris Mat , finition amg"),
        (5, "Audi RS7 V8 ( Voiture Allemande )", "52cv , 605ch ,  5 places , Boite Auto , Essence", 54500, "v5-1.png", "2016-12-15", 91200, "bluetooth , android auto , siege chauffant , camera de recul , palette au volant , ecran , aileron  , clim", "Noir , finition s-line"),
        (6, "Kia Stinger V6 ( Voiture Coréenne )", "27cv , 370ch ,  5 places , Boite Auto , Essence", 32900, "v6-1.png", "2018-08-14", 49500, "gps , roue de secours , bluetooth , android auto , siege chauffant , camera de recul , palette au volant , ecran , aileron  , clim , phare xenon", "Blanc , finition gt line");');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM car');
    }
}
