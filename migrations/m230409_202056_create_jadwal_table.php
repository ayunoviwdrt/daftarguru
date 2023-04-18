<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%jadwal}}`.
 */
class m230409_202056_create_jadwal_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%jadwal}}', [
            'id' => $this->primaryKey(),
            'id_kelas' => $this->integer()->notNull()->unique(),
            'id_guru' => $this->integer()->notNull()->unique(),
            'id_mapel' => $this->integer()->notNull()->unique(),
            'jam_mulai' => $this->time()->notNull(),
            'jam_selesai' => $this->time()->notNull(),
            'hari' => $this->string(25)->notNull(),
        ]);

        $this->addForeignKey(
            'fk-jadwal-id_guru',
            'jadwal',
            'id_guru',
            'guru',
            'id'
        );

        $this->addForeignKey(
            'fk-jadwal-id_mapel',
            'jadwal',
            'id_mapel',
            'mapel',
            'id'
        );

        $this->addForeignKey(
            'fk-jadwal-id_kelas',
            'jadwal',
            'id_kelas',
            'kelas',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%jadwal}}');
    }
}
