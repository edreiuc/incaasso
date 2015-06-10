<?php
use Phinx\Migration\AbstractMigration;

class CreateArticle extends AbstractMigration
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
        $table = $this->table('articles');
        $table->addColumn('titre', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('info', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('datePublication', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('autor', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
    }
}
