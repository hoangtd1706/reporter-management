<?php

use yii\db\Migration;

/**
 * Class m201027_043359_Reporter_Profile
 */
class m201027_043359_Reporter_Profile extends Migration
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

        $this->createTable('{{%ReporterProfile}}', [
            'id' => $this->primaryKey(),
            'profile_code' => $this->string()->unique(),
            'rep_code' => $this->string(8)->notNull(),
            'so_the_nha_bao' => $this->string(),
            'cate_id' => $this->integer(),
            'status' => $this->string(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
        $this->addForeignKey('fk_ReporterProfile_Reporter', '{{%ReporterProfile}}', 'Rep_code', '{{%Reporter}}', 'Rep_code');
        $this->addForeignKey('fk_ReporterProfile_Category', '{{%ReporterProfile}}', 'cate_id', '{{%Category}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201027_043359_Reporter_Profile cannot be reverted.\n";
        $this->dropForeignKey('fk_ReporterProfile_Reporter', '{{%ReporterProfile}}');
        $this->dropForeignKey('fk_ReporterProfile_Category', '{{%ReporterProfile}}');
        $this->dropTable('{{%ReporterProfile}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201027_043359_Reporter_Profile cannot be reverted.\n";

        return false;
    }
    */
}
