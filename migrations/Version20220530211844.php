<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220530211844 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX author ON recipe');
        $this->addSql('DROP INDEX author_2 ON recipe');
        $this->addSql('DROP INDEX author_3 ON recipe');
        $this->addSql('ALTER TABLE recipe ADD description VARCHAR(255) NOT NULL, ADD imagelink VARCHAR(255) NOT NULL, DROP descriptions, DROP imagelinks, CHANGE countries country VARCHAR(50) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recipe ADD descriptions VARCHAR(255) NOT NULL, ADD imagelinks VARCHAR(255) NOT NULL, DROP description, DROP imagelink, CHANGE country countries VARCHAR(50) NOT NULL');
        $this->addSql('CREATE INDEX author ON recipe (author)');
        $this->addSql('CREATE INDEX author_2 ON recipe (author)');
        $this->addSql('CREATE INDEX author_3 ON recipe (author)');
    }
}
