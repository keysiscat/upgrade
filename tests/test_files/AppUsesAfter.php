<?php

namespace Foo;

use App\Network\Http\HttpSocket;
use Cake\Controller\Component;
use Cake\Utility\Xml;
use Data\Lib\SomeLib;
use Foo\Lib\HtmlDomLib;
use Foo\Lib\HtmlDomLibExt;
use MyPlugin\Console\Command\FooShell;
use PluginName\Currency\CurrencyLib;

class AppUsesTest {

	public function test() {
		$this->Controller = new Controller(new Request, new Response());

		$HtmlDom = new HtmlDomLib();
		$HtmlDom = new HtmlDomLibExt();
	}

}
