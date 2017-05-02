<?php

use Phinx\Migration\AbstractMigration;

class CreateSubcategoriesTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('subcategories');

        $table->addColumn('title', 'string', [
            'default'   => null,
            'limit'     => 200,
            'null'      => false,
        ]);
        $table->addColumn('slug','string')->addIndex(array('slug'), array('unique' => true));

        $table->addColumn('sequence', 'integer', [
            'default'   =>  0,
            'limit'     =>  null,
            'null'      =>  false,
        ]);

        $table->addColumn('category_id', 'integer', [
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
        $this->dropTable('subcategories');
    }
}
