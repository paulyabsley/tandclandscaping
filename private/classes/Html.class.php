<?php 

class Html
{

	public $h;
	public $b;
	public $f;
	public $jq;
	public $mp;
	public $js;
	public $m;

	function __construct($t, $d)
	{
		$this->h = $this->head($t, $d);
		$this->b = $this->body();
		$this->f = $this->footer();
		$this->jq = $this->jquery();
		$this->mp = $this->magnificPopUp();
		$this->js = $this->appJs();
		$this->m = $this->menu();
	}

	/**
	 * Output Head
	 * @param string $t title
	 * @param string $d description
	 * @return string
	 */
	private function head($t, $d)
	{
		$o = '<!DOCTYPE html>';
		$o .= '<html dir="ltr" lang="en">';
		$o .= '<head>';
		$o .= '<meta charset="UTF-8">';
		$o .= '<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">';
		$o .= '<meta http-equiv="x-ua-compatible" content="ie=edge">';
		$o .= '<title>' . $t . '</title>';
		$o .= '<meta name="description" content="Town &amp; Country Landscaping are an established providers of all manner of landscaping services; driveways, patios, walling, fencing, block paviors, gates, brickwork and more.">';
		$o .= '<link rel="stylesheet" href="css/style.css">';
		$o .= $this->ga();		
		return $o;
	}

	/**
	 * Output Body
	 * @return string
	 */
	private function body()
	{
		return '</head><body id="top">';
	}

	/**
	 * Output analytics
	 * @return string
	 */
	private function ga()
	{
		return "<script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-19616688-5']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>";
	}

	/**
	 * Output Magnific Popup Script
	 * @return string
	 */
	private function magnificPopUp()
	{
		return '<script src="js/magnific-popup.js"></script>';
	}

	/**
	 * Output App Scripts
	 * @return string
	 */
	private function appJs()
	{
		return '<script src="js/app.js"></script>';
	}

	/**
	 * Output Foot
	 * @return string
	 */
	private function footer()
	{
		return '</body></html>';
	}

	/**
	 * Output Jquery CDN script include
	 * @return string
	 */
	private function jquery()
	{
		return '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>';
	}

	/**
	 * Output Menu
	 * @return string
	 */
	private function menu()
	{
		$o = '<ul>';
		$o .= '<li><a href="/home">Home</a></li>';
		$o .= '<li><a href="/log">Log</a></li>';
		$o .= '<li><a href="/admin/users">Admin</a></li>';
		$o .= '<li><a href="/logout">Logout</a></li>';
		$o .= '</ul>';
		return $o;
	}

	/**
	 * Output portfolio images
	 * @param int $s start
	 * @param int $e end
	 * @return string
	 */
	public function displayPortfolioImages($s, $e) {
		$o = '';
		for ($i = 1; $i <= 8; $i++) {
			$c = '';
			if ($i % 4 === 0) {
				$c = ' pi--last-img';
			}
			$o .= '<a href="images/l-example-' . $i . '.jpg"><img src="images/s-example-' . $i . '.jpg" alt="" class="pi' . $c . '"></a>';
		}
		return $o;
	}

}