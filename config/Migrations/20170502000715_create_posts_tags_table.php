<?php

use Phinx\Migration\AbstractMigration;

class CreatePostsTagsTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('posts_tags');

        $table->addColumn('post_id', 'integer', [
            'default'   => null,
            'limit'     => 11,
            'null'      => false,
        ]);
        $table->addColumn('tag_id', 'integer', [
            'default'   => null,
            'limit'     => 11,
            'null'      => false,
        ])
        ->addIndex(
            [
                'tag_id',
            ]
        )
        ->addIndex(
            [
                'post_id',
            ]
        );

        $table->addColumn('created', 'timestamp', ['default' => null,'null' => false]);
        $table->addColumn('modified', 'timestamp', ['default' => null,'null' => false]);

        $table->create();
    }

    public function down()
    {
        $this->dropTable('posts_tags');
    }
}
