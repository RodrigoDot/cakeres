<?php
use Migrations\AbstractMigration;

class CreatePropertiesTypes extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('properties_types');
        $table->addColumn('title', 'string');  
        $table->addColumn('created', 'datetime');        
        $table->addColumn('modified', 'datetime');
        $table->create();
    }
}
 