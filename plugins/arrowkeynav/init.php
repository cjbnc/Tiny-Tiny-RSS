<?php
class ArrowKeyNav extends Plugin {

	private $link;
	private $host;

	function about() {
		return array(1.0,
			"PgUp/PgDn change feed, Left/Right change article, Up/Down scroll article",
			"cjbnc");
	}

	function init($host) {
		$this->link = $host->get_link();
		$this->host = $host;

		$host->add_hook($host::HOOK_HOTKEY_MAP, $this);
	}

	function hook_hotkey_map($hotkeys) {

		$hotkeys["(37)|left"]  = "prev_article";
		$hotkeys["(39)|right"] = "next_article";
		$hotkeys["(38)|up"]    = "article_scroll_up";
		$hotkeys["(40)|down"]  = "article_scroll_down";
		$hotkeys["(33)|pageup"]    = "prev_feed";
		$hotkeys["(34)|pagedown"]  = "next_feed";

		return $hotkeys;

	}
}
?>
