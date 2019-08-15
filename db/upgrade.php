<?php

defined('MOODLE_INTERNAL') || die;

function xmldb_enrol_apply_upgrade($oldversion) {

	global $CFG, $DB;
	$dbman = $DB->get_manager();

    if ($oldversion < 2018090600) {

        // Define table enrol_easy to be created.
        $table = new xmldb_table('enrol_easy');

        // Adding fields to table enrol_easy.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('course_id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('group_id', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
        $table->add_field('enrolmentcode', XMLDB_TYPE_CHAR, '20', null, XMLDB_NOTNULL, null, null);

        // Adding keys to table enrol_easy.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Conditionally launch create table for enrol_easy.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Easy savepoint reached.
        upgrade_plugin_savepoint(true, 2018090600, 'enrol', 'easy');
    }

	return true;

}
function xmldb_enrol_easy_upgrade($oldversion) {

		global $CFG, $DB;
		$dbman = $DB->get_manager();

		if ($oldversion < 2019071505) {

				// Define table enrol_easy to be created.
				$table = new xmldb_table('enrol_easy');

				// Adding fields to table enrol_easy.
				$field = new xmldb_field('used', XMLDB_TYPE_INTEGER, '1', null, null, null, null);

				// Conditionally launch create table for enrol_easy.
				if (!$dbman->field_exists($table, $field)) {
						$dbman->add_field($table, $field, $continue=true, $feedback=true);
				}

				// Easy savepoint reached.
				upgrade_plugin_savepoint(true, 2019071505, 'enrol', 'easy');
		}
    return true;
}
