<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kelas}}`.
 */
class m230409_202808_create_kelas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kelas}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kelas}}');
    }
}
