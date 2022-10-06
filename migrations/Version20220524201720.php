<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220524201720 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE formulaire_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE formulaire (id INT NOT NULL, titre_site VARCHAR(100) DEFAULT NULL, nom_user VARCHAR(100) NOT NULL, prenom_user VARCHAR(100) NOT NULL, service_user VARCHAR(100) DEFAULT NULL, mail_user VARCHAR(100) NOT NULL, tel_user DOUBLE PRECISION DEFAULT NULL, projet_nom VARCHAR(50) DEFAULT NULL, type_form VARCHAR(100) DEFAULT NULL, public_vise VARCHAR(100) DEFAULT NULL, public_vise2 VARCHAR(255) DEFAULT NULL, descriptif_form TEXT NOT NULL, porteur_form VARCHAR(100) DEFAULT NULL, responsable_form VARCHAR(100) NOT NULL, url_form VARCHAR(255) DEFAULT NULL, nom_contributeurs VARCHAR(100) DEFAULT NULL, externalisee_form BOOLEAN NOT NULL, concurrence_form BOOLEAN NOT NULL, contenus_form TEXT DEFAULT NULL, financement_form BOOLEAN NOT NULL, date_fin_form DATE DEFAULT NULL, date_archivage_form DATE DEFAULT NULL, statistique_form BOOLEAN DEFAULT NULL, recharche_form BOOLEAN DEFAULT NULL, actualites_form BOOLEAN DEFAULT NULL, formulaires_form BOOLEAN DEFAULT NULL, partage_form BOOLEAN DEFAULT NULL, media_form BOOLEAN DEFAULT NULL, multilangue_form BOOLEAN DEFAULT NULL, multilangue_form2 VARCHAR(100) DEFAULT NULL, autre_form BOOLEAN DEFAULT NULL, autre_form2 VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, date_status TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, comments_status TEXT DEFAULT NULL, approve_status BOOLEAN DEFAULT NULL, multilangue_form3 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE formulaire_id_seq CASCADE');
        $this->addSql('DROP TABLE formulaire');
    }
}
