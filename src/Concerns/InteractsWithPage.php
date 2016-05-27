<?php 
	
	namespace Nanosch\LaravelSelenium\Concerns;

	trait InteractsWithPage
	{
		protected function visit($path)
	    {
	    	$this->url($path);

	    	return $this;
	    }

	    protected function see($text, $tag = 'body')
	    {
	    	$this->assertEquals($text, $this->byTag($tag)->text());
	    }
	}