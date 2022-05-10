<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220509233156 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnement (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, state INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE workout (ID INT AUTO_INCREMENT NOT NULL, nom_muscle VARCHAR(255) NOT NULL, nom_exercice VARCHAR(255) NOT NULL, image_exercice VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, duree_exercice INT NOT NULL, state INT NOT NULL, PRIMARY KEY(ID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE workout');
    }
}
