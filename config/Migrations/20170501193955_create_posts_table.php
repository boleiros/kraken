<?php

use Phinx\Migration\AbstractMigration;

class CreatePostsTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('posts');

        $table->addColumn('title', 'string', [
            'default'   => null,
            'limit'     => 200,
            'null'      => false,
        ]);

        $table->addColumn('slug','string')->addIndex(array('slug'), array('unique' => true));

        $table->addColumn('excerpt', 'text', [
            'default'   => null,
            'limit'     => null,
            'null'      => false,
        ]);

        $table->addColumn('description', 'text', [
            'default'   => null,
            'limit'     => null,
            'null'      => false,
        ]);

        $table->addColumn('excerpt', 'text', [
            'default'   => null,
            'limit'     => null,
            'null'      => false,
        ]);

        $table->addColumn('view_count', 'integer', [
            'default'   => 0,
            'limit'     => 11,
            'null'      => false,
        ]);

        $table->addColumn('featured_image', 'string', [
            'default'   => null,
            'limit'     => 200,
            'null'      => false,
        ]);

        $table->addColumn('featured', 'integer', [
            'default'   => 0,
            'limit'     => 11,
            'null'      => false,
        ]);

         $table->addColumn('status', 'integer', [
            'default'   => null,
            'limit'     => 11,
            'null'      => false,
        ]);

        $table->addColumn('subcategory_id', 'integer', [
            'default'   => null,
            'limit'     => 11,
            'null'      => false,
        ]);

        $table->addColumn('tag_id', 'integer', [
            'default'   => null,
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
        $this->dropTable('posts');
    }
}
