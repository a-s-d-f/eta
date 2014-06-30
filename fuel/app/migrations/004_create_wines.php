<?php

namespace Fuel\Migrations;

class Create_wines
{
	public function up()
	{
		\DBUtil::create_table('wines', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 100, 'type' => 'varchar'),
			'money' => array('constraint' => 11, 'type' => 'int'),
			'comment' => array('type' => 'text'),
			'imgurl' => array('constraint' => 255, 'type' => 'varchar'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('wines');
	}
}