<?php
//
// File generated by ... on the 2021-05-21T18:12:19+0200
// Please do not edit manually
//

/**
 * Classes and menus for itop-virtualization-mgmt (version 2.7.4)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



abstract class VirtualDevice extends FunctionalCI
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name', 'finalclass'),
			'db_table' => 'virtualdevice',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'obsolescence_expression' => 'status = \'obsolete\'',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeEnum("status", array("allowed_values"=>new ValueSetEnum("production,implementation,stock,obsolete"), "display_style"=>'list', "sql"=>'status', "default_value"=>'production', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSetIndirect("logicalvolumes_list", array("linked_class"=>'lnkVirtualDeviceToVolume', "ext_key_to_me"=>'virtualdevice_id', "ext_key_to_remote"=>'volume_id', "allowed_values"=>null, "count_min"=>0, "count_max"=>0, "duplicates"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'move2production',
  5 => 'description',
  6 => 'contacts_list',
  7 => 'documents_list',
  8 => 'applicationsolution_list',
  9 => 'logicalvolumes_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'move2production',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'finalclass',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'move2production',
));
;
	}


}


abstract class VirtualHost extends VirtualDevice
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name', 'finalclass'),
			'db_table' => 'virtualhost',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("virtualmachine_list", array("linked_class"=>'VirtualMachine', "ext_key_to_me"=>'virtualhost_id', "count_min"=>0, "count_max"=>0, "edit_mode"=>LINKSET_EDITMODE_ADDONLY, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'move2production',
  5 => 'description',
  6 => 'contacts_list',
  7 => 'documents_list',
  8 => 'applicationsolution_list',
  9 => 'logicalvolumes_list',
  10 => 'virtualmachine_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'business_criticity',
  3 => 'move2production',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'finalclass',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'move2production',
));
;
	}


	/**
	 * Placeholder for backward compatibility (iTop <= 2.1.0)
	 * in case an extension attempts to redefine this function...	 
	 */
	public static function GetRelationQueries($sRelCode){return parent::GetRelationQueries($sRelCode);} 
	public static function GetRelationQueriesEx($sRelCode)
	{
		switch ($sRelCode)
		{
		case 'impacts':
			$aRels = array(
				'virtualmachine' => array (
  '_legacy_' => false,
  'sDirection' => 'both',
  'sDefinedInClass' => 'VirtualHost',
  'sNeighbour' => 'virtualmachine',
  'sQueryDown' => NULL,
  'sQueryUp' => NULL,
  'sAttribute' => 'virtualmachine_list',
),
			);
			return array_merge($aRels, parent::GetRelationQueriesEx($sRelCode));

		default:
			return parent::GetRelationQueriesEx($sRelCode);
		}
	}

}


class Hypervisor extends VirtualHost
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name', 'server_id', 'farm_id'),
			'db_table' => 'hypervisor',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-virtualization-mgmt/images/hypervisor.png',
			'obsolescence_expression' => 'status = \'obsolete\'',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("farm_id", array("targetclass"=>'Farm', "allowed_values"=>null, "sql"=>'farm_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("farm_name", array("allowed_values"=>null, "extkey_attcode"=>'farm_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("server_id", array("targetclass"=>'Server', "allowed_values"=>null, "sql"=>'server_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_AUTO, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("server_name", array("allowed_values"=>null, "extkey_attcode"=>'server_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'server_id',
  4 => 'farm_id',
  5 => 'business_criticity',
  6 => 'move2production',
  7 => 'description',
  8 => 'contacts_list',
  9 => 'documents_list',
  10 => 'applicationsolution_list',
  11 => 'logicalvolumes_list',
  12 => 'virtualmachine_list',
  13 => 'providercontracts_list',
  14 => 'services_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'business_criticity',
  3 => 'move2production',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'server_id',
  2 => 'farm_id',
  3 => 'business_criticity',
  4 => 'move2production',
));
;
	}


	/**
	 * Placeholder for backward compatibility (iTop <= 2.1.0)
	 * in case an extension attempts to redefine this function...	 
	 */
	public static function GetRelationQueries($sRelCode){return parent::GetRelationQueries($sRelCode);} 
	public static function GetRelationQueriesEx($sRelCode)
	{
		switch ($sRelCode)
		{
		case 'impacts':
			$aRels = array(
				'farm' => array (
  '_legacy_' => false,
  'sDirection' => 'both',
  'sDefinedInClass' => 'Hypervisor',
  'sNeighbour' => 'farm',
  'sQueryDown' => NULL,
  'sQueryUp' => NULL,
  'sAttribute' => 'farm_id',
),
			);
			return array_merge($aRels, parent::GetRelationQueriesEx($sRelCode));

		default:
			return parent::GetRelationQueriesEx($sRelCode);
		}
	}

}


class Farm extends VirtualHost
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'farm',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-virtualization-mgmt/images/cluster.png',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("hypervisor_list", array("linked_class"=>'Hypervisor', "ext_key_to_me"=>'farm_id', "count_min"=>0, "count_max"=>0, "edit_mode"=>LINKSET_EDITMODE_ADDONLY, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeRedundancySettings("redundancy", array("sql"=>'redundancy', "relation_code"=>'impacts', "from_class"=>'Hypervisor', "neighbour_id"=>'farm', "enabled"=>true, "enabled_mode"=>'user', "min_up"=>1, "min_up_mode"=>'user', "min_up_type"=>'count', "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'move2production',
  5 => 'description',
  6 => 'contacts_list',
  7 => 'documents_list',
  8 => 'applicationsolution_list',
  9 => 'logicalvolumes_list',
  10 => 'hypervisor_list',
  11 => 'virtualmachine_list',
  12 => 'providercontracts_list',
  13 => 'services_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'business_criticity',
  3 => 'move2production',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'move2production',
));
;
	}


	/**
	 * Placeholder for backward compatibility (iTop <= 2.1.0)
	 * in case an extension attempts to redefine this function...	 
	 */
	public static function GetRelationQueries($sRelCode){return parent::GetRelationQueries($sRelCode);} 

}


class VirtualMachine extends VirtualDevice
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name', 'virtualhost_id'),
			'db_table' => 'virtualmachine',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-virtualization-mgmt/images/virtualmachine.png',
			'obsolescence_expression' => 'status=\'obsolete\'',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("virtualhost_id", array("targetclass"=>'VirtualHost', "allowed_values"=>null, "sql"=>'virtualhost_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("virtualhost_name", array("allowed_values"=>null, "extkey_attcode"=>'virtualhost_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("osfamily_id", array("targetclass"=>'OSFamily', "allowed_values"=>null, "sql"=>'osfamily_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("osfamily_name", array("allowed_values"=>null, "extkey_attcode"=>'osfamily_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("osversion_id", array("targetclass"=>'OSVersion', "allowed_values"=>new ValueSetObjects("SELECT OSVersion WHERE osfamily_id = :this->osfamily_id"), "sql"=>'osversion_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array('osfamily_id'), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("osversion_name", array("allowed_values"=>null, "extkey_attcode"=>'osversion_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("oslicence_id", array("targetclass"=>'OSLicence', "allowed_values"=>new ValueSetObjects("SELECT OSLicence WHERE osversion_id = :this->osversion_id"), "sql"=>'oslicence_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array('osversion_id'), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("oslicence_name", array("allowed_values"=>null, "extkey_attcode"=>'oslicence_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("cpu", array("allowed_values"=>null, "sql"=>'cpu', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("ram", array("allowed_values"=>null, "sql"=>'ram', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("logicalinterface_list", array("linked_class"=>'LogicalInterface', "ext_key_to_me"=>'virtualmachine_id', "count_min"=>0, "count_max"=>0, "edit_mode"=>LINKSET_EDITMODE_INPLACE, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false, "tracking_level"=>LINKSET_TRACKING_ALL)));
		MetaModel::Init_AddAttribute(new AttributeIPAddress("managementip", array("allowed_values"=>null, "sql"=>'managementip', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'softwares_list',
  1 => 'contacts_list',
  2 => 'documents_list',
  3 => 'applicationsolution_list',
  4 => 'logicalinterface_list',
  5 => 'logicalvolumes_list',
  6 => 'providercontracts_list',
  7 => 'services_list',
  'col:col1' => 
  array (
    'fieldset:Server:baseinfo' => 
    array (
      0 => 'name',
      1 => 'org_id',
      2 => 'status',
      3 => 'business_criticity',
      4 => 'virtualhost_id',
    ),
    'fieldset:Server:moreinfo' => 
    array (
      0 => 'osfamily_id',
      1 => 'osversion_id',
      2 => 'managementip',
      3 => 'oslicence_id',
      4 => 'cpu',
      5 => 'ram',
    ),
  ),
  'col:col2' => 
  array (
    'fieldset:Server:otherinfo' => 
    array (
      0 => 'move2production',
      1 => 'description',
    ),
  ),
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'managementip',
  3 => 'status',
  4 => 'business_criticity',
  5 => 'move2production',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
));
;
	}


	/**
	 * Placeholder for backward compatibility (iTop <= 2.1.0)
	 * in case an extension attempts to redefine this function...	 
	 */
	public static function GetRelationQueries($sRelCode){return parent::GetRelationQueries($sRelCode);} 

}


class LogicalInterface extends IPInterface
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name', 'virtualmachine_name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'virtualmachine_id', 'virtualmachine_name'),
			'db_table' => 'logicalinterface',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'itop-virtualization-mgmt/images/interface.png',
			'obsolescence_expression' => 'virtualmachine_id_obsolescence_flag',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("virtualmachine_id", array("targetclass"=>'VirtualMachine', "allowed_values"=>null, "sql"=>'virtualmachine_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("virtualmachine_name", array("allowed_values"=>null, "extkey_attcode"=>'virtualmachine_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'ipaddress',
  2 => 'macaddress',
  3 => 'comment',
  4 => 'ipgateway',
  5 => 'ipmask',
  6 => 'speed',
  7 => 'virtualmachine_id',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'ipaddress',
  2 => 'macaddress',
  3 => 'ipgateway',
  4 => 'ipmask',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'ipaddress',
  1 => 'macaddress',
  2 => 'comment',
  3 => 'ipgateway',
  4 => 'ipmask',
  5 => 'speed',
));
;
	}


}