<?php

use Phinx\Migration\AbstractMigration;

class CreatePagesTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('pages');

        $table->addColumn('title', 'string', [
            'default'   => null,
            'limit'     => 100,
            'null'      => false,
        ]);
        
        $table->addColumn('slug','string')->addIndex(array('slug'), array('unique' => true));

        $table->addColumn('body', 'text', [
            'default'   => null,
            'limit'     => null,
            'null'      => false,
        ]);

        $table->addColumn('image', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => true,
        ]);
        
        $table->addColumn('status', 'integer', [
            'default'   => 1,
            'limit'     => 11,
            'null'      => false,
        ]);

        $table->addColumn('created', 'timestamp', ['default' => null,'null' => false]);
        $table->addColumn('modified', 'timestamp', ['default' => null,'null' => false]);

        $table->create();
    }

    public function down()
    {
        $this->dropTable('pages');
    }
}
