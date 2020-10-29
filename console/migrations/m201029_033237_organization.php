<?php

use yii\db\Migration;

/**
 * Class m201029_033237_organization
 */
class m201029_033237_organization extends Migration
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
        $this->createTable('{{%organization}}', [
            'id' => $this->primaryKey(),
            'org_name' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->defaultValue(10)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201029_033237_organization cannot be reverted.\n";
        $this->dropTable('{{%organization}}');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201029_033237_organization cannot be reverted.\n";

        return false;
    }
    */
}
