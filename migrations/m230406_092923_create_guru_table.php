<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%guru}}`.
 */
class m230406_092923_create_guru_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%guru}}', [
            'id' => $this->primaryKey(),
            'nip' => $this->string(32)->notNull(),
            'nama' => $this->text()->notNull(),
            'tempat_lahir' => $this->string(32)->notNull(),
            'tanggal_lahir' => $this->date()->notNull(),
            'agama' => $this->text()->notNull(),
            'jenis_kelamin' => $this->string(15)->notNull(),
            'status' => $this->string(25)->notNull(),
            'alamat' => $this->text()->notNull(),
            'telepon' => $this->string(26)->notNull(),
            'email' => $this->string(32)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%guru}}');
    }
}
