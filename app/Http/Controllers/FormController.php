<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntryFormRequest;
use App\Models\Customer;
use App\Models\Item;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends BaseController
{
   public function index(Request $request)
   {

      $items = Item::all();

      $this->setPageTitle('お問い合わせ　入力画面');

      return view('forms.entry')->withItems($items);
   }

   public function confirm(EntryFormRequest $request)
   {


      $this->setPageTitle('お問い合わせ　確認画面');
      $subject = Item::where('name', $request->subject)->first();
      $request->merge(compact('subject'));
      return view('forms.confirm')->withData($request);
   }

   public function complete(EntryFormRequest $request)
   {
      DB::beginTransaction();
      try {
    /**
    * when success the registration
    */

         $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->mailaddress,
            'company' => $request->company,
            'phone' => $request->tel,
            'department' => $request->section,
            'furiguna' => $request->ruby
         ]);
         $item = Item::where('name', $request->subject)->firstOrFail();

         $item->customers()->attach([$customer->id => ["content" => $request->opinion]]);

         DB::commit();
      } catch (Exception $e) {
   /**
    * when fail the registration
    */
         DB::rollBack();
         // $items = Item::all();
         // $this->setPageTitle('お問い合わせ　入力画面');
         // return view('forms.entry')->withError('登録に失敗しました。')->withItems($items);

         return redirect()->route('entry')->withError('登録に失敗しました。');
      }
      $this->setPageTitle('お問い合わせ　完了画面');
      return view('forms.complete');
   }
}
