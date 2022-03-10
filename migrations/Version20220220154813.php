<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220220154813 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE offres_user (offres_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_F7F284846C83CD9F (offres_id), INDEX IDX_F7F28484A76ED395 (user_id), PRIMARY KEY(offres_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE offres_user ADD CONSTRAINT FK_F7F284846C83CD9F FOREIGN KEY (offres_id) REFERENCES offres (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE offres_user ADD CONSTRAINT FK_F7F28484A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE offres_user');
    }
}
