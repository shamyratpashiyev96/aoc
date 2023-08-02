<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function news($page_num=1){
        $news_all = News::orderBy('created_at', 'DESC')->get();
        $items_per_page = 12;
        $pages_total = ceil($news_all->count() / $items_per_page);
        $this->current_page = $page_num;
        $this->news_current_page = $news_all->slice(($items_per_page * $page_num) - $items_per_page , $items_per_page);
        $this->pagination_array = $this->paginate($page_num, $pages_total);
        $this->prev_page = $page_num > 1 ? $page_num - 1 : 1;
        $this->next_page = $page_num < $pages_total ? $page_num + 1 : $page_num;
        if($page_num > $pages_total){
            return abort(404);
        }
        return view('news_page', $this->data);
    }

    public function single_news(){
        return view('single_news_page');
    }

    public function paginate($currentPage, $pagesTotal) {
        
        $leftBlockLength = 1; // Length of the left block(before the "..." separator)
        $rightBlockLength = 1; // Length of the right block(after the "..." separator)
        $currentPageOffsets = 2; // The offsets on both sides of the current page
        $paginationRowLength = $leftBlockLength + ($currentPageOffsets * 2 + 1) + $rightBlockLength + 2; // 2 is for two "..." elements and +1 is for the current_page itself
        $separator = '...';
  
        $currentPage = intval($currentPage);
        $pagesTotal = intval($pagesTotal);
        $result = [];
  
        $separatorThresholdLeft = $leftBlockLength + 1 + $currentPageOffsets + 1; // Threshold for adding the "..." before the current page (+1 is for "..." and the next one is for the currentPage element itself)
        $separatorThresholdRight = 1 + $currentPageOffsets + 1 + $rightBlockLength; // Threshold for removing the "..." after the current page (+1 is for the currentPage element itself and the next one is for "...")
  
        $leftThresholdCrossed = $currentPage > $separatorThresholdLeft;
        $rightThresholdCrossed = $pagesTotal - $separatorThresholdRight < $currentPage;
  
        if ($pagesTotal <= $paginationRowLength) { // If there is no need to add "..." at all
          $result = range(1,$pagesTotal); 
        } else {
          /* ----------------------------------- Left block -------------------------------- */
          if (!$leftThresholdCrossed) { // The "..." should not be added
            $result = range(1, $separatorThresholdLeft + $currentPageOffsets); 
          } else {
            for ($i = 1; $i <= $leftBlockLength; $i++) { // Generating the left side block
              array_push($result, $i);
            }
            array_push($result, $separator);
          }
  
          /* -------------------------------------Middle block ------------------------- */
          if ($leftThresholdCrossed && !$rightThresholdCrossed) { // If the middle block is surrounded by "..." on both sides
            for ($i = $currentPage - $currentPageOffsets; $i <= $currentPage + $currentPageOffsets; $i++) { // Generating the middle block
              array_push($result, $i);
            }
          }
  
          /* --------------------------------------The Right block ----------------------- */
          if ($rightThresholdCrossed) { // Threshold has been crossed and "..." should not be added
            for ($i = ($pagesTotal + 1) - ($separatorThresholdRight + $currentPageOffsets); $i <= $pagesTotal; $i++) {
              array_push($result, $i);
            }
          } else { // Threshold has not been crossed and "..." should be added
            array_push($result,$separator);
            for ($i = $pagesTotal - $rightBlockLength + 1; $i <= $pagesTotal; $i++) {
              array_push($result, $i);
            }
          }
        }
        
        return $result;
    }
}
