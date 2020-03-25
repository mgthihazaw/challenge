<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntryFormRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class FormController extends BaseController
{
 public function index(){
     
    $items = Item::all();

     $this->setPageTitle('お問い合わせ　入力画面');
     return view('forms.entry')->withItems($items);
 }

 public function confirm(EntryFormRequest $request){

    
    $this->setPageTitle('お問い合わせ　確認画面');
    return view('forms.confirm')->withData($request);
 }
}
