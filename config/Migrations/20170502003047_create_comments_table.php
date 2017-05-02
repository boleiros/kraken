<?php

use Phinx\Migration\AbstractMigration;

class CreateCommentsTable extends AbstractMigration
{
   public function up()
    {
        $table = $this->table('comments');

        $table->addColumn('title', 'string', [
            'default'   => null,
            'limit'     => 100,
            'null'      => false,
        ]);

        $table->addColumn('description', 'text', [
            'default'   => null,
            'limit'     => null,
            'null'      => false,
        ]);

        $table->addColumn('post_id', 'integer', [
            'default'   => null,
            'limit'     => 11,
            'null'      => false,
        ]);

        $table->addColumn('approved_by', 'integer', [
            'default'   => null,
            'limit'     => 11,
            'null'      => false,
        ]);

        $table->addColumn('approved', 'integer', [
            'default'   => 0,
            'limit'     => 11,
            'null'      => false,
        ]);

        $table->addColumn('user_id', 'integer', [
            'default'   => null,
            'limit'     => 11,
            'null'      => false,
        ]);

        $table->addColumn('created', 'timestamp', ['default' => null,'null' => false]);
        $table->addColumn('modified', 'timestamp', ['default' => null,'null' => false]);

        $table->create();
    }

    public function down()
    {
        $this->dropTable('comments');
    }
}
