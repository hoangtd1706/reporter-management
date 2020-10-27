<?php

use yii\db\Migration;

/**
 * Class m201027_043410_Reporter_Process
 */
class m201027_043410_Reporter_Process extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $tableOptions = null;
        if ($this->db->driverName == 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ReporterProcess}}', [
            'id' => $this->primaryKey(),
            'rep_code' => $this->string(8)->notNull(),
            'start_date' => $this->string(10)->notNull(),
            'end_date' => $this->string(10),
            'chuc_vu' => $this->string(50),
            'co_quan' => $this->string(100),
            'ngach_luong' => $this->string(20),
            'bac_luong' => $this->string(20),
            'note' => $this->string(),
        ], $tableOptions);
        $this->addForeignKey('FK_ReporterProcess_Reporter', '{{%ReporterProcess}}', 'rep_code', '{{%Reporter}}', 'rep_code', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201027_043410_Reporter_Process cannot be reverted.\n";
        $this->dropForeignKey('FK_ReporterProcess_Reporter', '{{%ReporterProcess}}');
        $this->dropTable('{{%ReporterProcess}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201027_043410_Reporter_Process cannot be reverted.\n";

        return false;
    }
    */
}
