<?php

	class View
	{
		public function render($view, $page = ''){
			if($page == '') {
				include_once 'app/views/'.$view.'.php';
			}
			else {
				include_once 'app/views/pages/'.$page.'.php';
				$this->page = new $page;
				$this->page->data = $this->data;
				// $this->page->index();
				// print_r($this);
				include_once 'app/views/'.$view.'.php';
			}		
		}
	}

?>