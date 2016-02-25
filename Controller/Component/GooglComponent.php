<?php

App::import('Vendor', 'Googl.googl/Googl');

class GooglComponent extends Component{
	
	protected $_Googl;
	
	protected $_from;
	
	function __construct()
		{	
			//load config
			Configure::load('Googl.Googl');

			//get settings from config
			$ApiPkey = Configure::read('Googl.ApiKey');

			//initialize the client
			$this->_Googl = new Googl($ApiPkey);
			
		}
		
	
	public function shorten($url) {
		$url = $this->_Googl->shorten($url);
		return $url;
	}


}