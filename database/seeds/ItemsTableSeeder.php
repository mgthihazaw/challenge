<?php

use App\Models\InquiryItem;

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    /**
     * array of items
     *
     * @return void
     */
    protected $items = [
         ['name' => 'i-gift', 'description' => 'i-giftについて'],
         ['name' => 'ivr', 'description' => 'Saas型IVRについて'],
         ['name' => 'i-search', 'description' => 'i-searchについて'],
         ['name' => 'i-ask', 'description' => 'i-askについて'],
         ['name' => 'i-i-linkcheck', 'description' => 'i-linkcheckについて'],
         ['name' => 'i-print', 'description' => 'i-printについて'],
         ['name' => 'i-catalog', 'description' => 'i-catalogについて'],
         ['name' => 'i-flow', 'description' => 'i-flowについて'],
         ['name' => 'i-linkplus', 'description' => 'i-linkplusについて'],
         ['name' => 'i-shopnavi', 'description' => 'i-shopnaviについて'],
         ['name' => 'i-point', 'description' => 'i-pointについて'],
         ['name' => 'i-livechat', 'description' => 'i-livechatについて'],
         ['name' => 'hosting', 'description' => 'ホスティングサービスについて'],
         ['name' => 'i-campaign', 'description' => 'キャンペーンサービスについて'],
         ['name' => 'others', 'description' => 'その他(会社に関する事など)について'],
     ];
    public function run()
    {
        foreach($this->items as $index=>$item){
            $result = InquiryItem::create($item);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->items). ' records');
    }
}
