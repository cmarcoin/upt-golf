<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200622085039 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE players_gap (id INT AUTO_INCREMENT NOT NULL, player_one_id_id INT NOT NULL, player_two_id_id INT NOT NULL, games INT NOT NULL, INDEX IDX_757AA4A19D8E6D41 (player_one_id_id), INDEX IDX_757AA4A1749FC4A3 (player_two_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE players_gap ADD CONSTRAINT FK_757AA4A19D8E6D41 FOREIGN KEY (player_one_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE players_gap ADD CONSTRAINT FK_757AA4A1749FC4A3 FOREIGN KEY (player_two_id_id) REFERENCES user (id)');
        $this->addSql('DROP TABLE team_plays');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE team_plays (id INT AUTO_INCREMENT NOT NULL, player_one_id INT NOT NULL, player_two_id INT NOT NULL, games INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE players_gap');
    }
}
