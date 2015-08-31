<?php
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/27/2015
 * Time: 4:55 PM
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AddressTableSeeder extends Seeder{

    public function run()
    {
        DB::table('locations')->delete();

        /*-------------------------------------------------- Regions ---------------------------------------------------------*/
        App\Models\Address::create(['locn_id'=>'1','locn_name'=>'Eastern Region','locn_type'=>'Region','locn_parent_id'=>'0','locn_code'=>'R01']);
        App\Models\Address::create(['locn_id'=>'2','locn_name'=>'Central Region','locn_type'=>'Region','locn_parent_id'=>'0','locn_code'=>'R02']);
        App\Models\Address::create(['locn_id'=>'3','locn_name'=>'Western Region','locn_type'=>'Region','locn_parent_id'=>'0','locn_code'=>'R03']);
        App\Models\Address::create(['locn_id'=>'4','locn_name'=>'Mid-Western Region','locn_type'=>'Region','locn_parent_id'=>'0','locn_code'=>'R04']);
        App\Models\Address::create(['locn_id'=>'5','locn_name'=>'Far-Western Region','locn_type'=>'Region','locn_parent_id'=>'0','locn_code'=>'R05']);

        /*-------------------------------------------------- Zones ---------------------------------------------------------*/
        App\Models\Address::create(['locn_id'=>'6','locn_name'=>'Kosi','locn_type'=>'Zone','locn_parent_id'=>'1','locn_code'=>'R01Z01']);
        App\Models\Address::create(['locn_id'=>'7','locn_name'=>'Mechi','locn_type'=>'Zone','locn_parent_id'=>'1','locn_code'=>'R01Z02']);
        App\Models\Address::create(['locn_id'=>'8','locn_name'=>'Sagarmatha','locn_type'=>'Zone','locn_parent_id'=>'1','locn_code'=>'R01Z03']);
        App\Models\Address::create(['locn_id'=>'9','locn_name'=>'Bagmati','locn_type'=>'Zone','locn_parent_id'=>'2','locn_code'=>'R02Z01']);
        App\Models\Address::create(['locn_id'=>'10','locn_name'=>'Janakpur','locn_type'=>'Zone','locn_parent_id'=>'2','locn_code'=>'R02Z02']);
        App\Models\Address::create(['locn_id'=>'11','locn_name'=>'Narayani','locn_type'=>'Zone','locn_parent_id'=>'2','locn_code'=>'R02Z03']);
        App\Models\Address::create(['locn_id'=>'12','locn_name'=>'Dhawalagiri','locn_type'=>'Zone','locn_parent_id'=>'3','locn_code'=>'R03Z01']);
        App\Models\Address::create(['locn_id'=>'13','locn_name'=>'Gandaki','locn_type'=>'Zone','locn_parent_id'=>'3','locn_code'=>'R03Z02']);
        App\Models\Address::create(['locn_id'=>'14','locn_name'=>'Lumbini','locn_type'=>'Zone','locn_parent_id'=>'3','locn_code'=>'R03Z03']);
        App\Models\Address::create(['locn_id'=>'15','locn_name'=>'Bheri','locn_type'=>'Zone','locn_parent_id'=>'4','locn_code'=>'R04Z01']);
        App\Models\Address::create(['locn_id'=>'16','locn_name'=>'Karnali','locn_type'=>'Zone','locn_parent_id'=>'4','locn_code'=>'R04Z02']);
        App\Models\Address::create(['locn_id'=>'17','locn_name'=>'Rapti','locn_type'=>'Zone','locn_parent_id'=>'4','locn_code'=>'R04Z03']);
        App\Models\Address::create(['locn_id'=>'18','locn_name'=>'Mahakali','locn_type'=>'Zone','locn_parent_id'=>'5','locn_code'=>'R05Z01']);
        App\Models\Address::create(['locn_id'=>'19','locn_name'=>'Seti','locn_type'=>'Zone','locn_parent_id'=>'5','locn_code'=>'R05Z02']);

        /*-------------------------------------------------- Districts ---------------------------------------------------------*/
        App\Models\Address::create(['locn_id'=>'20','locn_name'=>'Bhaktapur','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'26']);
        App\Models\Address::create(['locn_id'=>'21','locn_name'=>'Dhading','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'30']);
        App\Models\Address::create(['locn_id'=>'22','locn_name'=>'Lalitpur','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'25']);
        App\Models\Address::create(['locn_id'=>'23','locn_name'=>'Kathmandu','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'27']);
        App\Models\Address::create(['locn_id'=>'24','locn_name'=>'Kavrepalanchok','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'24']);
        App\Models\Address::create(['locn_id'=>'25','locn_name'=>'Nuwakot','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'28']);
        App\Models\Address::create(['locn_id'=>'26','locn_name'=>'Rasuwa','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'29']);
        App\Models\Address::create(['locn_id'=>'27','locn_name'=>'Sindhupalanchok','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'23']);

        /*-------------------------------------------------- VDCs/Municipality ---------------------------------------------------------*/

        App\Models\Address::create(['locn_id'=>'28','locn_name'=>'Aalapot VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27001']);
        App\Models\Address::create(['locn_id'=>'29','locn_name'=>'Baadbhanjyang VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27002']);
        App\Models\Address::create(['locn_id'=>'30','locn_name'=>'Bajrayogini(Sankhu) VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27003']);
        App\Models\Address::create(['locn_id'=>'31','locn_name'=>'Balambu VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27004']);
        App\Models\Address::create(['locn_id'=>'32','locn_name'=>'Baluwa VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27005']);
        App\Models\Address::create(['locn_id'=>'33','locn_name'=>'Bhadrabas VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27006']);
        App\Models\Address::create(['locn_id'=>'34','locn_name'=>'Bhimdhunga VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27007']);
        App\Models\Address::create(['locn_id'=>'36','locn_name'=>'Budanilkantha VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27008']);
        App\Models\Address::create(['locn_id'=>'37','locn_name'=>'Chalnakhel VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27009']);
        App\Models\Address::create(['locn_id'=>'38','locn_name'=>'Chapalibhadrakali VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27010']);

        App\Models\Address::create(['locn_id'=>'39','locn_name'=>'Chhaimale VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27011']);
        App\Models\Address::create(['locn_id'=>'40','locn_name'=>'Chouketardahachok VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27012']);
        App\Models\Address::create(['locn_id'=>'41','locn_name'=>'Chunikhel VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27013']);
        App\Models\Address::create(['locn_id'=>'42','locn_name'=>'Daanchhi VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27014']);
        App\Models\Address::create(['locn_id'=>'43','locn_name'=>'Daxinkali VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27015']);
        App\Models\Address::create(['locn_id'=>'44','locn_name'=>'Dhapasi VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27016']);
        App\Models\Address::create(['locn_id'=>'45','locn_name'=>'Dharmasthali VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27017']);
        App\Models\Address::create(['locn_id'=>'46','locn_name'=>'Futung VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27018']);
        App\Models\Address::create(['locn_id'=>'47','locn_name'=>'Gagalphedi VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27019']);
        App\Models\Address::create(['locn_id'=>'48','locn_name'=>'Gokarneswor VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27020']);

        App\Models\Address::create(['locn_id'=>'49','locn_name'=>'Goldhunga VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27021']);
        App\Models\Address::create(['locn_id'=>'50','locn_name'=>'Gonggabu VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27022']);
        App\Models\Address::create(['locn_id'=>'51','locn_name'=>'Gothatar VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27023']);
        App\Models\Address::create(['locn_id'=>'52','locn_name'=>'Ichangnarayan VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27024']);
        App\Models\Address::create(['locn_id'=>'53','locn_name'=>'Indrayani VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27025']);
        App\Models\Address::create(['locn_id'=>'54','locn_name'=>'Jhormahankal VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27026']);
        App\Models\Address::create(['locn_id'=>'55','locn_name'=>'Jitpurphedi VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27027']);
        App\Models\Address::create(['locn_id'=>'56','locn_name'=>'Jorpati VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27028']);
        App\Models\Address::create(['locn_id'=>'57','locn_name'=>'Kabhresthali VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27029']);
        App\Models\Address::create(['locn_id'=>'58','locn_name'=>'Kapan VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27030']);

        App\Models\Address::create(['locn_id'=>'59','locn_name'=>'Kathmandu Metropolitan City','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27031']);
        App\Models\Address::create(['locn_id'=>'60','locn_name'=>'Khadkabhadrakali VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27032']);
        App\Models\Address::create(['locn_id'=>'61','locn_name'=>'Kirtipur Municipality','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27033']);
        App\Models\Address::create(['locn_id'=>'62','locn_name'=>'Lapsephedi VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27034']);
        App\Models\Address::create(['locn_id'=>'63','locn_name'=>'Machhegaun VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27035']);
        App\Models\Address::create(['locn_id'=>'64','locn_name'=>'Mahadevathan VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27036']);
        App\Models\Address::create(['locn_id'=>'65','locn_name'=>'Mahankal VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27037']);
        App\Models\Address::create(['locn_id'=>'66','locn_name'=>'Manmaiju VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27038']);
        App\Models\Address::create(['locn_id'=>'67','locn_name'=>'Matatirtha VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27039']);
        App\Models\Address::create(['locn_id'=>'68','locn_name'=>'Mulpani VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27040']);

        App\Models\Address::create(['locn_id'=>'69','locn_name'=>'Naglebhare VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27041']);
        App\Models\Address::create(['locn_id'=>'70','locn_name'=>'Naikapnayabhanjyang VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27042']);
        App\Models\Address::create(['locn_id'=>'71','locn_name'=>'Naikappuranobhanjyang VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27043']);
        App\Models\Address::create(['locn_id'=>'72','locn_name'=>'Nayapati VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27044']);
        App\Models\Address::create(['locn_id'=>'73','locn_name'=>'Pukhulachhi VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27045']);
        App\Models\Address::create(['locn_id'=>'74','locn_name'=>'Ramkot VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27046']);
        App\Models\Address::create(['locn_id'=>'75','locn_name'=>'Sangla VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27047']);
        App\Models\Address::create(['locn_id'=>'76','locn_name'=>'Satikhel VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27048']);
        App\Models\Address::create(['locn_id'=>'77','locn_name'=>'Satungal VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27049']);
        App\Models\Address::create(['locn_id'=>'78','locn_name'=>'Seuchatar VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27050']);

        App\Models\Address::create(['locn_id'=>'79','locn_name'=>'Sheshnarayan VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27051']);
        App\Models\Address::create(['locn_id'=>'80','locn_name'=>'Sitapaila VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27052']);
        App\Models\Address::create(['locn_id'=>'81','locn_name'=>'Sundarijal VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27053']);
        App\Models\Address::create(['locn_id'=>'82','locn_name'=>'Suntol VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27054']);
        App\Models\Address::create(['locn_id'=>'83','locn_name'=>'Talkududechour VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27055']);
        App\Models\Address::create(['locn_id'=>'84','locn_name'=>'Thankot VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27056']);
        App\Models\Address::create(['locn_id'=>'85','locn_name'=>'Tinthana VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27057']);
        App\Models\Address::create(['locn_id'=>'86','locn_name'=>'Tokhachandeswori VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27058']);
        App\Models\Address::create(['locn_id'=>'87','locn_name'=>'Tokhasarswoti VDC','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27059']);

        /*-------------------------------------------------- Ward Nos ---------------------------------------------------------*/
        App\Models\Address::create(['locn_id'=>'89','locn_name'=>'01','locn_type'=>'vdc','locn_parent_id'=>'59','locn_code'=>'27031001']);
        App\Models\Address::create(['locn_id'=>'90','locn_name'=>'02','locn_type'=>'vdc','locn_parent_id'=>'59','locn_code'=>'27031002']);
        App\Models\Address::create(['locn_id'=>'91','locn_name'=>'03','locn_type'=>'vdc','locn_parent_id'=>'59','locn_code'=>'27031003']);
        App\Models\Address::create(['locn_id'=>'92','locn_name'=>'04','locn_type'=>'vdc','locn_parent_id'=>'59','locn_code'=>'27031004']);
        App\Models\Address::create(['locn_id'=>'93','locn_name'=>'05','locn_type'=>'vdc','locn_parent_id'=>'59','locn_code'=>'27031005']);
        App\Models\Address::create(['locn_id'=>'94','locn_name'=>'06','locn_type'=>'vdc','locn_parent_id'=>'59','locn_code'=>'27031006']);
        App\Models\Address::create(['locn_id'=>'95','locn_name'=>'07','locn_type'=>'vdc','locn_parent_id'=>'59','locn_code'=>'27031007']);
        App\Models\Address::create(['locn_id'=>'96','locn_name'=>'08','locn_type'=>'vdc','locn_parent_id'=>'59','locn_code'=>'27031008']);
        App\Models\Address::create(['locn_id'=>'97','locn_name'=>'09','locn_type'=>'vdc','locn_parent_id'=>'59','locn_code'=>'27031009']);
        App\Models\Address::create(['locn_id'=>'98','locn_name'=>'10','locn_type'=>'vdc','locn_parent_id'=>'59','locn_code'=>'27031010']);


        App\Models\Address::create(['locn_id'=>'99','locn_name'=>'01','locn_type'=>'vdc','locn_parent_id'=>'28','locn_code'=>'27001001']);
        App\Models\Address::create(['locn_id'=>'100','locn_name'=>'02','locn_type'=>'vdc','locn_parent_id'=>'28','locn_code'=>'27001002']);
        App\Models\Address::create(['locn_id'=>'101','locn_name'=>'03','locn_type'=>'vdc','locn_parent_id'=>'28','locn_code'=>'27001003']);
        App\Models\Address::create(['locn_id'=>'102','locn_name'=>'04','locn_type'=>'vdc','locn_parent_id'=>'28','locn_code'=>'27001004']);
        App\Models\Address::create(['locn_id'=>'103','locn_name'=>'05','locn_type'=>'vdc','locn_parent_id'=>'28','locn_code'=>'27001005']);
        App\Models\Address::create(['locn_id'=>'104','locn_name'=>'06','locn_type'=>'vdc','locn_parent_id'=>'28','locn_code'=>'27001006']);
        App\Models\Address::create(['locn_id'=>'105','locn_name'=>'07','locn_type'=>'vdc','locn_parent_id'=>'28','locn_code'=>'27001007']);
        App\Models\Address::create(['locn_id'=>'106','locn_name'=>'08','locn_type'=>'vdc','locn_parent_id'=>'28','locn_code'=>'27001008']);
        App\Models\Address::create(['locn_id'=>'107','locn_name'=>'09','locn_type'=>'vdc','locn_parent_id'=>'28','locn_code'=>'27001009']);
        App\Models\Address::create(['locn_id'=>'108','locn_name'=>'10','locn_type'=>'vdc','locn_parent_id'=>'28','locn_code'=>'27001010']);


    }
}