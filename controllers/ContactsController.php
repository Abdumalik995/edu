<?php 
require_once(ROOT.'/models/Contacts.php');
	class ContactsController{
		public function actionContacts(){
			$menu = array();
			$menu = Menu1::getMenu();
			$dropdown1 = array();
			$dropdown1 = Menu1::DropdownMenu();
			require_once(ROOT.'/views/main/contacts.php');
			return true;
		}
	}


 ?>