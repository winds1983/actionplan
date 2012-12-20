<?php
include 'common.php';
include 'libs/data.php';

switch ($action)
{
	case 'getUsers':
		echo json_encode($users);
		break;
	case 'getSubGroups':
		$groupId = isset($_GET['groupId']) ? $_GET['groupId']: '';
		echo json_encode($groups[$groupId]);
		break;
	default:
		break;
}
