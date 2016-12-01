<?php 

namespace CumGhost;

include "simple_html_dom.php";
/**
* this class contain method that can use for crawl
*/

class Crawler
{
	
	private $site;
	private $cumSite;

	public $paragraf, $title, $link, $image;

	function __construct($url){
		if ($url) {
			$this->cumSite = file_get_html($url);
		}
		
	}

	public function setUrl($url){
		$this->cumSite = file_get_html($url);
	}
	public function getContentByTag($htmlTag){
		switch ($htmlTag) {
			case 'a':
				return $this->parseLinkHtml($htmlTag);
			case 'p':
				return $this->parseParagrafHtml($htmlTag);
			case 'title':
				return $this->parseTitleHtml($htmlTag);
			case 'img':
				return $this->parseImageHtml($htmlTag);
			default:
				return "Woops, this crawler doesnt provide ".$htmlTag." tag";
		}
	}
	private function parseLinkHtml($param){
		foreach ($this->cumSite->find($param) as $key) {
			$this->link .= $key->href."<\br>";
			echo $key->href."<\br>";
		}
	}
	private function parseTitleHtml($param){
		foreach ($this->cumSite->find($param) as $key) {
			echo $key->plaintext."<\br>";
		}	
	}
	private function parseParagrafHtml($param){
		foreach ($this->cumSite->find($param) as $key) {
			echo $key->plaintext."<\br>";
		}
	}
	private function parseImageHtml($param){
		foreach ($this->cumSite->find($param) as $key) {
			echo $key->src."<\br>";
		}
	}
}


 ?>