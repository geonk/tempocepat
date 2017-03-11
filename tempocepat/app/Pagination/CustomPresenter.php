<?php

namespace App\Pagination;

use Illuminate\Support\HtmlString;
use Illuminate\Pagination\UrlWindowPresenterTrait;
// use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\UrlWindow;
use Illuminate\Contracts\Pagination\Paginator as PaginatorContract;
use Illuminate\Contracts\Pagination\Presenter as PresenterContract;
use Illuminate\Pagination\BootstrapThreeNextPreviousButtonRendererTrait;

class CustomPresenter implements PresenterContract
// , LengthAwarePaginator
{

	use BootstrapThreeNextPreviousButtonRendererTrait, UrlWindowPresenterTrait;

	protected $paginator;
	protected $window;
	
	function __construct(PaginatorContract $paginator, UrlWindow $window = null)
	{
		$this->paginator = $paginator;
		$this->window = is_null($window) ? UrlWindow::make($paginator) : $window->get();
	}
	public function render(){
		if ($this->hasPages()) {
            return new HtmlString(sprintf(
                '<ul class="pagination">%s %s %s</ul>',
                $this->getPreviousButton(),
                $this->getLinks(),
                $this->getNextButton()
            ));
        }

        return '';
	}

	public function hasPages(){
		return $this->paginator->lastPage();
	}

    protected function getDisabledTextWrapper($text)
    {
        return '<li class="disabled"><span>'.$text.'</span></li>';
    }

    protected function getActivePageWrapper($text)
    {
        return '<li class="active"><span>'.$text.'</span></li>';
    }

    protected function getAvailablePageWrapper($url, $page, $rel = null)
    {
        $rel = is_null($rel) ? '' : ' rel="'.$rel.'"';

        return '<li><a href="'.htmlentities($url).'"'.$rel.'>'.$page.'</a></li>';
    }
    
    protected function getDots()
    {
        return $this->getDisabledTextWrapper('...');
    }

}