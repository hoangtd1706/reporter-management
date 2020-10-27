<?php

use yii\db\Migration;

/**
 * Class m201027_043248_Reporter
 */
class m201027_043248_Reporter extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%Reporter}}', [
            'id' => $this->primaryKey(),
            'rep_code' => $this->string(8)->unique(),
            'status' => $this->smallInteger()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201027_043248_Reporter cannot be reverted.\n";

        $this->dropTable('{{%Reporter');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201027_043248_Reporter cannot be reverted.\n";

        return false;
    }
    */
}
