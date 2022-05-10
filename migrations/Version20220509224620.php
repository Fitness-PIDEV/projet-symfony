<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220509224620 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE achat (id_produit INT AUTO_INCREMENT NOT NULL, produits_id INT DEFAULT NULL, ref_produit VARCHAR(225) NOT NULL, prix DOUBLE PRECISION NOT NULL, INDEX IDX_26A98456CD11A2CF (produits_id), PRIMARY KEY(id_produit)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendar (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, description LONGTEXT NOT NULL, all_day TINYINT(1) NOT NULL, background_color VARCHAR(7) NOT NULL, border_color VARCHAR(7) NOT NULL, text_color VARCHAR(7) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom_categorie VARCHAR(255) NOT NULL, etat INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, nom_cours VARCHAR(255) NOT NULL, duree_cours VARCHAR(255) NOT NULL, salle VARCHAR(255) NOT NULL, nom_coach VARCHAR(255) NOT NULL, etat INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison (id_livraison INT AUTO_INCREMENT NOT NULL, users_id INT DEFAULT NULL, produits_id INT DEFAULT NULL, id_user INT NOT NULL, ref_commande VARCHAR(225) NOT NULL, donnees_user VARCHAR(225) NOT NULL, frais_livraison DOUBLE PRECISION NOT NULL, localisation VARCHAR(225) NOT NULL, INDEX IDX_A60C9F1F67B3B43D (users_id), INDEX IDX_A60C9F1FCD11A2CF (produits_id), PRIMARY KEY(id_livraison)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, categories_id INT DEFAULT NULL, nom_produit VARCHAR(255) NOT NULL, prix_produit INT NOT NULL, image_produit VARCHAR(255) NOT NULL, quantite_produit INT NOT NULL, ID_categorie INT NOT NULL, etat INT NOT NULL, description VARCHAR(255) NOT NULL, nbrvue INT DEFAULT NULL, INDEX IDX_29A5EC27A21214B7 (categories_id), INDEX ID_categorie (ID_categorie), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, users_id INT DEFAULT NULL, titre VARCHAR(250) NOT NULL, message VARCHAR(250) NOT NULL, iduser INT NOT NULL, etat INT DEFAULT NULL, created_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_CE60640467B3B43D (users_id), INDEX fkuser_reclamation (iduser), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, dispo INT NOT NULL, nom_cours VARCHAR(255) NOT NULL, date DATE NOT NULL, nbr_participant INT NOT NULL, state INT NOT NULL, Nom VARCHAR(255) NOT NULL, INDEX Nom (Nom), INDEX dispo (dispo), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, num VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, activation_token VARCHAR(255) DEFAULT NULL, is_deleted TINYINT(1) DEFAULT NULL, dispo INT DEFAULT NULL, certificat_url VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE achat ADD CONSTRAINT FK_26A98456CD11A2CF FOREIGN KEY (produits_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F67B3B43D FOREIGN KEY (users_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1FCD11A2CF FOREIGN KEY (produits_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27A21214B7 FOREIGN KEY (categories_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640467B3B43D FOREIGN KEY (users_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27A21214B7');
        $this->addSql('ALTER TABLE achat DROP FOREIGN KEY FK_26A98456CD11A2CF');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1FCD11A2CF');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F67B3B43D');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640467B3B43D');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE achat');
        $this->addSql('DROP TABLE calendar');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE user');
    }
}
