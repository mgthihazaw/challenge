<?php

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // <option class="ser-" value="">下記から項目をお選びください</option>
    // <option class="ser-igift" value="i-gift">i-giftについて</option>
    // <option class="ser-ivr" value="ivr">Saas型IVRについて</option>
    // <option class="ser-isearch" value="i-search">i-searchについて</option>
    // <option class="ser-iask" value="i-ask">i-askについて</option>
    // <option class="ser-ilinkcheck" value="i-linkcheck">i-linkcheckについて</option>
    // <option class="ser-iprint" value="i-print">i-printについて</option>
    // <option class="ser-icatalog" value="i-catalog">i-catalogについて</option>
    // <option class="ser-iflow" value="i-flow">i-flowについて</option>
    // <option class="ser-ilinkplus" value="i-linkplus">i-linkplusについて</option>
    // <option class="ser-ishopnavi" value="i-shopnavi">i-shopnaviについて</option>
    // <option class="ser-ipoint" value="i-point">i-pointについて</option>
    // <option class="ser-ilivechat" value="i-livechat">i-livechatについて</option>
    // <option class="ser-hosting" value="hosting">ホスティングサービスについて</option>
    // <option class="ser-icampaign" value="i-campaign">キャンペーンサービスについて</option>
    // <option class="ser-others" value="others">その他(会社に関する事など)について</option>
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
            $result = Item::create($item);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->items). ' records');
    }
}
