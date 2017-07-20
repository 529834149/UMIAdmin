<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class umi_field_display_browser_seeder extends Seeder
{
    public function run()
    {
        DB::table('umi_field_display_browser')->insert([
            array(
                'id'                => 1,
                'table_id'          => 1,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 2,
                'table_id'          => 1,
                'field'             => 'table_id',
                'type'              => 'foreignKey',
                'relation_display'  => 'umi_tables:table_name',
                'display_name'      => 'Table Name',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 3,
                'table_id'          => 1,
                'field'             => 'field',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 4,
                'table_id'          => 1,
                'field'             => 'badge_name',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 3,
                'is_showing'        => 1
            ),
            array(
                'id'                => 5,
                'table_id'          => 1,
                'field'             => 'class',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 4,
                'is_showing'        => 1
            ),
            array(
                'id'                => 6,
                'table_id'          => 2,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 7,
                'table_id'          => 2,
                'field'             => 'table_id',
                'type'              => 'foreignKey',
                'relation_display'  => 'umi_tables:table_name',
                'display_name'      => 'Table Name',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 8,
                'table_id'          => 2,
                'field'             => 'field',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 9,
                'table_id'          => 2,
                'field'             => 'type',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 3,
                'is_showing'        => 1
            ),
            array(
                'id'                => 10,
                'table_id'          => 2,
                'field'             => 'relation_display',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 4,
                'is_showing'        => 1
            ),
            array(
                'id'                => 11,
                'table_id'          => 2,
                'field'             => 'display_name',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 5,
                'is_showing'        => 1
            ),
            array(
                'id'                => 12,
                'table_id'          => 2,
                'field'             => 'order',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 6,
                'is_showing'        => 1
            ),
            array(
                'id'                => 13,
                'table_id'          => 2,
                'field'             => 'is_showing',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 7,
                'is_showing'        => 1
            ),
            array(
                'id'                => 14,
                'table_id'          => 3,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 15,
                'table_id'          => 3,
                'field'             => 'table_id',
                'type'              => 'foreignKey',
                'relation_display'  => 'umi_tables:table_name',
                'display_name'      => 'Table Name',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 16,
                'table_id'          => 3,
                'field'             => 'field',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 17,
                'table_id'          => 3,
                'field'             => 'type',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 3,
                'is_showing'        => 1
            ),
            array(
                'id'                => 18,
                'table_id'          => 3,
                'field'             => 'relation_display',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 4,
                'is_showing'        => 1
            ),
            array(
                'id'                => 19,
                'table_id'          => 3,
                'field'             => 'display_name',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 5,
                'is_showing'        => 1
            ),
            array(
                'id'                => 20,
                'table_id'          => 3,
                'field'             => 'order',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 6,
                'is_showing'        => 1
            ),
            array(
                'id'                => 21,
                'table_id'          => 3,
                'field'             => 'is_showing',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 7,
                'is_showing'        => 1
            ),
            array(
                'id'                => 22,
                'table_id'          => 4,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 23,
                'table_id'          => 4,
                'field'             => 'table_id',
                'type'              => 'foreignKey',
                'relation_display'  => 'umi_tables:table_name',
                'display_name'      => 'Table Name',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 24,
                'table_id'          => 4,
                'field'             => 'field',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 25,
                'table_id'          => 4,
                'field'             => 'type',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 3,
                'is_showing'        => 1
            ),
            array(
                'id'                => 26,
                'table_id'          => 4,
                'field'             => 'relation_display',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 4,
                'is_showing'        => 1
            ),
            array(
                'id'                => 27,
                'table_id'          => 4,
                'field'             => 'display_name',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 5,
                'is_showing'        => 1
            ),
            array(
                'id'                => 28,
                'table_id'          => 4,
                'field'             => 'details',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 6,
                'is_showing'        => 1
            ),
            array(
                'id'                => 29,
                'table_id'          => 4,
                'field'             => 'order',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 7,
                'is_showing'        => 1
            ),
            array(
                'id'                => 30,
                'table_id'          => 4,
                'field'             => 'is_editable',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 8,
                'is_showing'        => 1
            ),
            array(
                'id'                => 31,
                'table_id'          => 5,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 32,
                'table_id'          => 5,
                'field'             => 'table_id',
                'type'              => 'foreignKey',
                'relation_display'  => 'umi_tables:table_name',
                'display_name'      => 'Table Name',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 33,
                'table_id'          => 5,
                'field'             => 'field',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 34,
                'table_id'          => 5,
                'field'             => 'type',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 3,
                'is_showing'        => 1
            ),
            array(
                'id'                => 35,
                'table_id'          => 5,
                'field'             => 'relation_display',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 4,
                'is_showing'        => 1
            ),
            array(
                'id'                => 36,
                'table_id'          => 5,
                'field'             => 'display_name',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 5,
                'is_showing'        => 1
            ),
            array(
                'id'                => 37,
                'table_id'          => 5,
                'field'             => 'details',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 6,
                'is_showing'        => 1
            ),
            array(
                'id'                => 38,
                'table_id'          => 5,
                'field'             => 'order',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 7,
                'is_showing'        => 1
            ),
            array(
                'id'                => 39,
                'table_id'          => 5,
                'field'             => 'is_editable',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 8,
                'is_showing'        => 1
            ),
            array(
                'id'                => 40,
                'table_id'          => 6,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 41,
                'table_id'          => 6,
                'field'             => 'menu_id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 42,
                'table_id'          => 6,
                'field'             => 'title',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 43,
                'table_id'          => 6,
                'field'             => 'url',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 3,
                'is_showing'        => 1
            ),
            array(
                'id'                => 44,
                'table_id'          => 6,
                'field'             => 'target',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 4,
                'is_showing'        => 1
            ),
            array(
                'id'                => 45,
                'table_id'          => 6,
                'field'             => 'icon_class',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 5,
                'is_showing'        => 1
            ),
            array(
                'id'                => 46,
                'table_id'          => 6,
                'field'             => 'extra_icon_html',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 6,
                'is_showing'        => 1
            ),
            array(
                'id'                => 47,
                'table_id'          => 6,
                'field'             => 'order',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 7,
                'is_showing'        => 1
            ),
            array(
                'id'                => 48,
                'table_id'          => 7,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 49,
                'table_id'          => 7,
                'field'             => 'permission_id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 50,
                'table_id'          => 7,
                'field'             => 'role_id',
                'type'              => 'foreignKey',
                'relation_display'  => 'umi_roles:role_name',
                'display_name'      => 'Role Name',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 51,
                'table_id'          => 8,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 52,
                'table_id'          => 8,
                'field'             => 'table_id',
                'type'              => 'foreignKey',
                'relation_display'  => 'umi_tables:table_name',
                'display_name'      => 'Table Name',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 53,
                'table_id'          => 8,
                'field'             => 'key',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 54,
                'table_id'          => 8,
                'field'             => 'display_name',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 3,
                'is_showing'        => 1
            ),
            array(
                'id'                => 55,
                'table_id'          => 9,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 56,
                'table_id'          => 9,
                'field'             => 'role_name',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 57,
                'table_id'          => 9,
                'field'             => 'display_name',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 58,
                'table_id'          => 10,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 59,
                'table_id'          => 10,
                'field'             => 'search_tab_id',
                'type'              => 'foreignKey',
                'relation_display'  => 'umi_search_tab:tab_title',
                'display_name'      => 'Tab Name',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 60,
                'table_id'          => 10,
                'field'             => 'field',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 61,
                'table_id'          => 10,
                'field'             => 'display_name',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 3,
                'is_showing'        => 1
            ),
            array(
                'id'                => 62,
                'table_id'          => 10,
                'field'             => 'type',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 4,
                'is_showing'        => 1
            ),
            array(
                'id'                => 63,
                'table_id'          => 10,
                'field'             => 'is_fuzzy',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 5,
                'is_showing'        => 1
            ),
            array(
                'id'                => 64,
                'table_id'          => 11,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 65,
                'table_id'          => 11,
                'field'             => 'table_id',
                'type'              => 'foreignKey',
                'relation_display'  => 'umi_tables:table_name',
                'display_name'      => 'Table Name',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 66,
                'table_id'          => 11,
                'field'             => 'tab_title',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 67,
                'table_id'          => 11,
                'field'             => 'order',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 3,
                'is_showing'        => 1
            ),
            array(
                'id'                => 68,
                'table_id'          => 12,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 69,
                'table_id'          => 12,
                'field'             => 'rule_name',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 70,
                'table_id'          => 12,
                'field'             => 'operation_type',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 71,
                'table_id'          => 12,
                'field'             => 'is_extra_operation',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 3,
                'is_showing'        => 1
            ),
            array(
                'id'                => 72,
                'table_id'          => 12,
                'field'             => 'details',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 4,
                'is_showing'        => 1
            ),
            array(
                'id'                => 73,
                'table_id'          => 13,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 74,
                'table_id'          => 13,
                'field'             => 'table_name',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 75,
                'table_id'          => 13,
                'field'             => 'type',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 76,
                'table_id'          => 14,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 77,
                'table_id'          => 14,
                'field'             => 'user_id',
                'type'              => 'foreignKey',
                'relation_display'  => 'umi_users:name',
                'display_name'      => 'User Name',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 78,
                'table_id'          => 14,
                'field'             => 'json',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 79,
                'table_id'          => 15,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 80,
                'table_id'          => 15,
                'field'             => 'user_id',
                'type'              => 'foreignKey',
                'relation_display'  => 'umi_users:name',
                'display_name'      => 'User Name',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 81,
                'table_id'          => 15,
                'field'             => 'role_id',
                'type'              => 'foreignKey',
                'relation_display'  => 'umi_roles:role_name',
                'display_name'      => 'Role Name',
                'order'             => 2,
                'is_showing'        => 1
            ),
            array(
                'id'                => 82,
                'table_id'          => 16,
                'field'             => 'id',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 0,
                'is_showing'        => 1
            ),
            array(
                'id'                => 83,
                'table_id'          => 16,
                'field'             => 'name',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 1,
                'is_showing'        => 1
            ),
            array(
                'id'                => 84,
                'table_id'          => 16,
                'field'             => 'email',
                'type'              => 'label',
                'relation_display'  => '',
                'display_name'      => '',
                'order'             => 2,
                'is_showing'        => 1
            ),
        ]);
    }
}