<?php 

class Pagination{
private $max = 10;

private $index = 'page';
private $current_page;
private $total; 
private $limit; 
public function __construct($total, $currentPage, $limit, $index)
{
	//umumiy soni 
$this->total = $total;
//sahifadagi limit
$this->limit = $limit;
//urldan kelgan son
$this->index = $index;
//sahifalar soni
$this->amount = $this->amount();
//joriy sahifani nomeri
$this->setCurrentPage($currentPage);
}
public function get(){
	//ssilkaga yozish uchun
	$links = null;
	#silk uchun cheklov olish
	$limits = $this->limits();
	$html = '<ul class="pagination">';
	for ($page = $limits[0]; $page <= $limits[1]; $page++){
		//agar bori shu sahifada bo'lsa
		if($page == $this->current_page) 
		{
			$links .='<li class="active"><a href="#">' . $page . '</a></li>';
		} else {
			$links .= $this->generateHtml($page);
		}
	}
	//agar ssilka sozdat qilingan bo'lsa
	if(!is_null($links)) {
		if ($this->current_page > 1)
		//agar joriy sahifa birinchi bo'lsa
		$links = $this->generateHtml(1, ' &lt;&lt;') . $links;
	//agar joriy sahifa birinchi bo'masa
	if($this->current_page < $this->amount)
	//oxirgi uchun ssilka ochamiz
		$links .= $this->generateHtml($this->amount, '&gt;&gt;');
	}
	$html .= $links . '</ul>';
	return $html;
}
private function generateHtml($page, $text = null){
	  if (!$text)
        # Matnni sahifa raqamiga aylantirilishini belgilash
            $text = $page;
        $currentURI = rtrim($_SERVER['REQUEST_URI'], '/') . '/';
        $currentURI = preg_replace('~/page-[0-9]+~', '', $currentURI);
        
        return
                '<li><a href="' . $currentURI . $this->index . $page . '">' . $text . '</a></li>';
}
private function limits()
{
	$left = $this->current_page - round($this->max / 2);
	 $start = $left > 0 ? $left : 1;
                if ($start + $this->max <= $this->amount) {
                   $end = $start > 1 ? $start + $this->max : $this->max;
        } else {
                      $end = $this->amount;
                      $start = $this->amount - $this->max > 0 ? $this->amount - $this->max : 1;
        }
       
        return
                array($start, $end);
    }
    
    	
    private function setCurrentPage($currentPage)
    {
       
        $this->current_page = $currentPage;
     
        if ($this->current_page > 0) {
          
            if ($this->current_page > $this->amount)
         
                $this->current_page = $this->amount;
        } else
       
            $this->current_page = 1;
    }
    
    private function amount()
    {
       
        return ceil($this->total / $this->limit);
    }
}
 ?>
