<?php
//
// File generated on 2021-05-21T18:12:19+0200
// Please do not edit manually
//
MetaModel::IncludeModule(MODULESROOT.'/core/main.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-cas/model.authent-cas.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-cas/main.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-external/model.authent-external.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-local/model.authent-local.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-db-tools/model.combodo-db-tools.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-db-tools/src/Service/DBToolsUtils.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-db-tools/src/Service/DBAnalyzerUtils.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-attachments/model.itop-attachments.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-attachments/main.itop-attachments.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-attachments/renderers.itop-attachments.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-backup/main.itop-backup.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-backup/model.itop-backup.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config-mgmt/model.itop-config-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config-mgmt/main.itop-config-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config/model.itop-config.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config/src/Validator/ConfigNodesVisitor.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config/src/Validator/iTopConfigAstValidator.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config/src/Validator/iTopConfigSyntaxValidator.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-datacenter-mgmt/model.itop-datacenter-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-endusers-devices/model.itop-endusers-devices.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-files-information/model.itop-files-information.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-files-information/src/Service/FilesInformation.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-files-information/src/Service/FilesInformationException.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-files-information/src/Service/FilesInformationUtils.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-files-information/src/Service/FilesIntegrity.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-hub-connector/menus.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-hub-connector/hubnewsroomprovider.class.inc.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-hub-connector/model.itop-hub-connector.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-portal-base/portal/vendor/autoload.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-portal-base/model.itop-portal-base.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-portal/main.itop-portal.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-portal/model.itop-portal.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-profiles-itil/model.itop-profiles-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-sla-computation/main.itop-sla-computation.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-storage-mgmt/model.itop-storage-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-tickets/main.itop-tickets.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-tickets/model.itop-tickets.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-virtualization-mgmt/model.itop-virtualization-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-welcome-itil/model.itop-welcome-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-bridge-virtualization-storage/model.itop-bridge-virtualization-storage.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-change-mgmt-itil/model.itop-change-mgmt-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-core-update/model.itop-core-update.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-core-update/src/Service/RunTimeEnvironmentCoreUpdater.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-core-update/src/Service/CoreUpdater.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-core-update/src/Controller/UpdateController.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-core-update/src/Controller/AjaxController.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-incident-mgmt-itil/model.itop-incident-mgmt-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-knownerror-mgmt/model.itop-knownerror-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-problem-mgmt/model.itop-problem-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-request-mgmt-itil/model.itop-request-mgmt-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-request-mgmt-itil/main.itop-request-mgmt-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-service-mgmt/model.itop-service-mgmt.php');
function GetModulesInfo()
{
$sCurrEnv = 'env-'.utils::GetCurrentEnvironment();
return array (
  'dictionaries' => 
  array (
    'root_dir' => '',
    'version' => '1.0',
  ),
  'core' => 
  array (
    'root_dir' => '',
    'version' => '1.0',
  ),
  'application' => 
  array (
    'root_dir' => '',
    'version' => '1.0',
  ),
  'authent-cas' => 
  array (
    'root_dir' => $sCurrEnv.'/authent-cas',
    'version' => '2.7.4',
  ),
  'authent-external' => 
  array (
    'root_dir' => $sCurrEnv.'/authent-external',
    'version' => '2.7.4',
  ),
  'authent-local' => 
  array (
    'root_dir' => $sCurrEnv.'/authent-local',
    'version' => '2.7.4',
  ),
  'combodo-db-tools' => 
  array (
    'root_dir' => $sCurrEnv.'/combodo-db-tools',
    'version' => '2.7.4',
  ),
  'itop-attachments' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-attachments',
    'version' => '2.7.4',
  ),
  'itop-backup' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-backup',
    'version' => '2.7.4',
  ),
  'itop-config-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-config-mgmt',
    'version' => '2.7.4',
  ),
  'itop-config' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-config',
    'version' => '2.7.4',
  ),
  'itop-datacenter-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-datacenter-mgmt',
    'version' => '2.7.4',
  ),
  'itop-endusers-devices' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-endusers-devices',
    'version' => '2.7.4',
  ),
  'itop-files-information' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-files-information',
    'version' => '2.7.4',
  ),
  'itop-hub-connector' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-hub-connector',
    'version' => '2.7.4',
  ),
  'itop-portal-base' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-portal-base',
    'version' => '2.7.4',
  ),
  'itop-portal' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-portal',
    'version' => '2.7.4',
  ),
  'itop-profiles-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-profiles-itil',
    'version' => '2.7.4',
  ),
  'itop-sla-computation' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-sla-computation',
    'version' => '2.7.4',
  ),
  'itop-storage-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-storage-mgmt',
    'version' => '2.7.4',
  ),
  'itop-tickets' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-tickets',
    'version' => '2.7.4',
  ),
  'itop-virtualization-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-virtualization-mgmt',
    'version' => '2.7.4',
  ),
  'itop-welcome-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-welcome-itil',
    'version' => '2.7.4',
  ),
  'itop-bridge-virtualization-storage' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-bridge-virtualization-storage',
    'version' => '2.7.4',
  ),
  'itop-change-mgmt-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-change-mgmt-itil',
    'version' => '2.7.4',
  ),
  'itop-core-update' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-core-update',
    'version' => '2.7.4',
  ),
  'itop-incident-mgmt-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-incident-mgmt-itil',
    'version' => '2.7.4',
  ),
  'itop-knownerror-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-knownerror-mgmt',
    'version' => '2.7.4',
  ),
  'itop-problem-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-problem-mgmt',
    'version' => '2.7.4',
  ),
  'itop-request-mgmt-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-request-mgmt-itil',
    'version' => '2.7.4',
  ),
  'itop-service-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-service-mgmt',
    'version' => '2.7.4',
  ),
  'itop-full-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-full-itil',
    'version' => '2.7.4',
  ),
);
}
