<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mapel}}`.
 */
class m230409_202959_create_mapel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mapel}}', [
            'id' => $this->primaryKey(),
            'mapel' => $this->string(30)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mapel}}');
    }
}
