<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntryFormRequest;
use App\Mail\CompleteMail;
use App\Models\Customer;
use App\Models\InquiryItem;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FormController extends BaseController
{
   /**
    * Show Entry Form
    */
   public function entry(Request $request)
   {
      $items = InquiryItem::all();
      $this->setPageTitle('お問い合わせ　入力画面');
      return view('forms.entry')->withItems($items);
   }

   /**
    * Show Entry Confirmation
    */
   public function confirm(EntryFormRequest $request)
   {
      $this->setPageTitle('お問い合わせ　確認画面');
      $subject = InquiryItem::where('name', $request->subject)->first();
      $request->merge(compact('subject'));
      return view('forms.confirm')->withData($request);
   }

   /**
    * Insert data and send mail
    */
   public function complete(EntryFormRequest $request)
   {

      DB::beginTransaction();
      try {
         /**
          * when success the registration
          */

         //Insert data to the database
         $customer = Customer::updateOrCreate(['email' => $request->mailaddress], [
            'name' => $request->name,
            'company' => $request->company,
            'phone' => $request->tel,
            'department' => $request->section,
            'ruby' => $request->ruby,

         ]);
         $item = InquiryItem::where('name', $request->subject)->firstOrFail();
         $item->customers()->attach([$customer->id => ["content" => $request->opinion]]);

         //Send mail to customer
         $email = $customer->email;
         $data = [
            'お問い合わせ内容' => $item->description,
            "内容" => $request->opinion,
            '会社名' => $request->company,
            '部署名' => $request->section ?? "None",
            'お名前	' => $request->name,
            'ふりがな' => $request->ruby ?? "None",
            '電話番号' => $request->tel,
            'メールアドレス' => $request->mailaddress
         ];
         Mail::to($email)->send(new CompleteMail($data));

         DB::commit();
      } catch (Exception $e) {
         /**
          * when fail the registration,rollback data
          */
         DB::rollBack();
         return redirect()->route('entry')->withError('登録に失敗しました。');
      }

      //Display complete message
      $this->setPageTitle('お問い合わせ　完了画面');
      return view('forms.complete');
   }
}
