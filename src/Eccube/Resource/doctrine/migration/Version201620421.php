<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version201620421 extends AbstractMigration
{

    const NAME = 'dtb_product_request';

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        if ($schema->hasTable(self::NAME)) {
            return true;
        }
        $table = $schema->createTable(self::NAME);

        $table->addColumn('id', 'integer', array(
            'autoincrement' => true,
        ));
        $table->addColumn('user_id', 'integer', array('NotNull' => true));
        $table->addColumn('product_id', 'integer', array('NotNull' => true));
        $table->setPrimaryKey(array('id'));
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        if (!$schema->hasTable(self::NAME)) {
            return true;
        }
        $schema->dropTable(self::NAME);

    }
}
