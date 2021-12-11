<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211211174634 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE edge_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE node_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE edge (id INT NOT NULL, source_id INT NOT NULL, target_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_7506D366953C1C61 ON edge (source_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7506D366158E0B66 ON edge (target_id)');
        $this->addSql('CREATE TABLE node (id INT NOT NULL, position_x INT NOT NULL, position_y INT NOT NULL, type VARCHAR(255) NOT NULL, data JSON NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE edge ADD CONSTRAINT FK_7506D366953C1C61 FOREIGN KEY (source_id) REFERENCES node (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE edge ADD CONSTRAINT FK_7506D366158E0B66 FOREIGN KEY (target_id) REFERENCES node (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE edge DROP CONSTRAINT FK_7506D366953C1C61');
        $this->addSql('ALTER TABLE edge DROP CONSTRAINT FK_7506D366158E0B66');
        $this->addSql('DROP SEQUENCE edge_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE node_id_seq CASCADE');
        $this->addSql('DROP TABLE edge');
        $this->addSql('DROP TABLE node');
    }
}
