<?php

use Phinx\Migration\AbstractMigration;

class Pedidos extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        //Cria a tabela
        $table = $this->table('pedidos');
        $table->addColumn('categoria', 'string', array('limit' => 250))
              ->addColumn('nomedofato', 'text')
              ->addColumn('texto', 'text')
              ->create();
    }
}
