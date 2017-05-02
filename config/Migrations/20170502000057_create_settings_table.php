<?php

use Phinx\Migration\AbstractMigration;

class CreateSettingsTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('settings');

        $table->addColumn('name_site', 'string', [
            'default'   => null,
            'limit'     => 100,
            'null'      => false,
        ]);

        $table->addColumn('logo_site', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => true,
        ]);

        $table->addColumn('email_site', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => true,
        ]);

        $table->addColumn('phone_site', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => true,
        ]);

        $table->addColumn('maintenance_site', 'integer', [
            'default'   => 0,
            'limit'     => 11,
            'null'      => false,
        ]);

        $table->addColumn('created', 'timestamp', ['default' => null,'null' => false]);
        $table->addColumn('modified', 'timestamp', ['default' => null,'null' => false]);

        $table->create();
    }

    public function down()
    {
        $this->dropTable('settings');
    }
}
