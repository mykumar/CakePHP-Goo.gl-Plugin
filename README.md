CakePHP Goo.gl Plugin
===================

Plugin for shorten url easy mode in cakephp based on the https://github.com/sebi/googl-php

Requirements
------------

* CakePHP 2.+

Documentation
-------------

* Load plugin in bootstrap.php;
* On your Controller load de component:
<code>
	public $components = array(
        "Googl.Googl"
    );
</code>

* For using: ``$this->Googl->shorten($url); ``

