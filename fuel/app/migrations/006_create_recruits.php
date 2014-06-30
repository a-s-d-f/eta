<?php

namespace Fuel\Migrations;

class Create_recruits
{
	public function up()
	{
		\DBUtil::create_table('recruits', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'title' => array('constraint' => 50, 'type' => 'varchar'),
			'body' => array('type' => 'text'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('recruits');
	}
}