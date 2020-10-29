<?php

use yii\db\Migration;

/**
 * Class m201027_043303_Reporter_Detail
 */
class m201027_043303_Reporter_Detail extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tablOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tablOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ReporterDetail}}', [
            'id' => $this->primaryKey(),
            'rep_code' => $this->string(8)->notNull(),
            'rep_co_quan' => $this->string()->notNull(),
            'rep_name' => $this->string()->notNull(),
            'rep_avt' => $this->string()->notNull(),
            'rep_gender' => $this->boolean()->notNull(),
            'rep_dob' => $this->integer()->notNull(),
            'rep_noi_o' => $this->string()->notNull(),
            'rep_chuc_vu' => $this->string(),
            'rep_but_danh' => $this->string(),
            'rep_giao_duc' => $this->string(),
            'rep_chuyen_mon' => $this->string(),
            'rep_truong_hoc' => $this->string(),
            'rep_chuyen_nganh' => $this->string(),
            'rep_hinh_thuc' => $this->string(),
            'rep_tot_nghiep' => $this->string(),
            'rep_chinh_tri' => $this->string(),
            'rep_ngoai_ngu' => $this->string(),
            'rep_chung_chi' => $this->string(),
            'rep_dang_vien' => $this->string(),
            'rep_chuc_dah' => $this->string(),
            'rep_so_the_cu' => $this->string(),
            'rep_cmnd' => $this->string()->notNull(),
            'rep_ngay_cap_cmnd' => $this->integer()->notNull(),
            'rep_cmnd_front' => $this->string()->notNull(),
            'rep_cmnd_back' => $this->string()->notNull(),
            'rep_hdld' => $this->string(),
            'rep_scan_bang' => $this->string(),
            'rep_scan_hdld' => $this->string(),
            'rep_scan_hs_khac' => $this->string(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tablOptions);
        $this->addForeignKey('FK_ReporterDetail_Reporter', '{{%ReporterDetail}}', 'rep_code', '{{%Reporter}}', 'rep_code', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201027_043303_Reporter_Detail cannot be reverted.\n";
        $this->dropForeignKey('FK_ReporterDetail_Reporter', '{{%ReporterDetail}}');
        $this->dropTable('{{%ReporterDetail}}');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201027_043303_Reporter_Detail cannot be reverted.\n";

        return false;
    }
    */
}
