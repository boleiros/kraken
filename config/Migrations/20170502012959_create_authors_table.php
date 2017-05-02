<?php

use Phinx\Migration\AbstractMigration;

class CreateAuthorsTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('authors');

        $table->addColumn('user_id', 'integer', [
            'default'   => null,
            'limit'     => 11,
            'null'      => false,
        ]);

        $table->addColumn('phone', 'string', [
            'default'   => null,
            'limit'     => 200,
            'null'      => true,
        ]);

        $table->addColumn('about', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => true,
        ]);

        $table->addColumn('website', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => true,
        ]);

        $table->addColumn('created', 'timestamp', ['default' => null,'null' => false]);
        $table->addColumn('modified', 'timestamp', ['default' => null,'null' => false]);

        $table->create();
    }

    public function down()
    {
        $this->dropTable('authors');
    }
}
