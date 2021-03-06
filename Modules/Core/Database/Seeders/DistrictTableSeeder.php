<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\District;
use Modules\Core\Entities\DistrictCity;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $districts = [
            [
                "name" => "Ampara",
                "city" => [
                    ["name" => "Addalaichchenai"],
                    ["name" => "Akkarepattu"],
                    ["name" => "Alayadivembu"],
                    ["name" => "Ampara"],
                    ["name" => "Damana"],
                    ["name" => "Dehiattakandiya"],
                    ["name" => "Irakkamam"],
                    ["name" => "Kalmunai"],
                    ["name" => "Karaitivu"],
                    ["name" => "Lahugala"],
                    ["name" => "Maha Oya"],
                    ["name" => "Navithanveli"],
                    ["name" => "Nintavur"],
                    ["name" => "Padiyathalawa"],
                    ["name" => "Pottuvil"],
                    ["name" => "Sainthamaruthu"],
                    ["name" => "Sammanthurai"],
                    ["name" => "Uhana"],
                ],
            ],

            [
                "name" => "Anuradhapura",
                "city" => [
                    ["name" => "Anuradhapura"],
                    ["name" => "Bulnewa"],
                    ["name" => "Eppawala"],
                    ["name" => "Galenbindunuwewa"],
                    ["name" => "Galnewa"],
                    ["name" => "Habarana"],
                    ["name" => "Horowupotana"],
                    ["name" => "Ipalogama"],
                    ["name" => "Kahatagasdigiliya"],
                    ["name" => "Kebithigollewa"],
                    ["name" => "Kekirawa"],
                    ["name" => "Konapathirawa"],
                    ["name" => "Konwewa"],
                    ["name" => "Madatugama"],
                    ["name" => "Mahailuppallama"],
                    ["name" => "Mahavilachchiya"],
                    ["name" => "Maradankadawala"],
                    ["name" => "Medawachchiya"],
                    ["name" => "Mihintale"],
                    ["name" => "Nochchiyagama"],
                    ["name" => "Padaviya"],
                    ["name" => "Palagala"],
                    ["name" => "Palugaswewa"],
                    ["name" => "Rajanganaya"],
                    ["name" => "Rambewa"],
                    ["name" => "Seeppukulama"],
                    ["name" => "Talawa"],
                    ["name" => "Tambuttegama"],
                    ["name" => "Thambuttegama"],
                    ["name" => "Thirappane"],
                    ["name" => "Yakalla"],

                ],
            ],

            [
                "name" => "Badulla",
                "city" => [
                    ["name" => "Badulla"],
                    ["name" => "Bandarawela"],
                    ["name" => "Beragala"],
                    ["name" => "Diyatalawa"],
                    ["name" => "Ella"],
                    ["name" => "Hali Ela"],
                    ["name" => "Haputale"],
                    ["name" => "Kandaketiya"],
                    ["name" => "Lunugala"],
                    ["name" => "Mahiyanganaya"],
                    ["name" => "Meegahakivula"],
                    ["name" => "Passara"],
                    ["name" => "tennapanguwa"],
                    ["name" => "Uva-Paranagama"],
                    ["name" => "Welimada"],
                    ["name" => "Wiyaluwa"],
                ],
            ],

            [
                "name" => "Baticaloa",
                "city" => [
                    ["name" => "Araiyampathy"],
                    ["name" => "Batticaloa"],
                    ["name" => "Chenkalady"],
                    ["name" => "Eravur"],
                    ["name" => "Kaluvanchikudy"],
                    ["name" => "Kattankudy"],
                    ["name" => "Kiran"],
                    ["name" => "Kokkadichcholai"],
                    ["name" => "Oddamavadi"],
                    ["name" => "Pasikudah"],
                    ["name" => "Vakarai"],
                    ["name" => "Valaichchenai"],
                    ["name" => "Vavunathivu"],
                    ["name" => "Vellavely"],
                ],
            ],

            [
                "name" => "Colombo",
                "city" => [
                    ["name" => "Angoda"],
                    ["name" => "Athurugiriya"],
                    ["name" => "Avissawella"],
                    ["name" => "Battaramulla"],
                    ["name" => "Boralesgamuwa"],
                    ["name" => "Colombo 01"],
                    ["name" => "Colombo 02"],
                    ["name" => "Colombo 03"],
                    ["name" => "Colombo 04"],
                    ["name" => "Colombo 05"],
                    ["name" => "Colombo 06"],
                    ["name" => "Colombo 07"],
                    ["name" => "Colombo 08"],
                    ["name" => "Colombo 09"],
                    ["name" => "Colombo 10"],
                    ["name" => "Colombo 11"],
                    ["name" => "Colombo 12"],
                    ["name" => "Colombo 13"],
                    ["name" => "Colombo 14"],
                    ["name" => "Colombo 15"],
                    ["name" => "Dehiwala"],
                    ["name" => "Hanwella"],
                    ["name" => "Homagama"],
                    ["name" => "Kaduwela"],
                    ["name" => "Kesbewa"],
                    ["name" => "Kohuwala"],
                    ["name" => "Kolonnawa"],
                    ["name" => "Kosgama"],
                    ["name" => "Kottawa"],
                    ["name" => "Kotte"],
                    ["name" => "Maharagama"],
                    ["name" => "Malabe"],
                    ["name" => "Mount Lavinia"],
                    ["name" => "Nawala"],
                    ["name" => "Nugegoda"],
                    ["name" => "Paddukka"],
                    ["name" => "Pannipitiya"],
                    ["name" => "Piliyandala"],
                    ["name" => "Rajagiriya"],
                    ["name" => "Ranala"],
                    ["name" => "Ratmalana"],
                    ["name" => "Talawathugoda"],
                    ["name" => "Wellampitiya"],

                ],
            ],

            [
                "name" => "Galle",
                "city" => [
                    ["name" => "Ahangama"],
                    ["name" => "Ahungalla"],
                    ["name" => "Ambalangoda"],
                    ["name" => "Baddegama"],
                    ["name" => "Balapitiya"],
                    ["name" => "Batapola"],
                    ["name" => "Bentota"],
                    ["name" => "Boossa"],
                    ["name" => "Elpitiya"],
                    ["name" => "Galle"],
                    ["name" => "Habaraduwa"],
                    ["name" => "Hikkaduwa"],
                    ["name" => "Hiniduma"],
                    ["name" => "Imaduwa"],
                    ["name" => "Karandeniya"],
                    ["name" => "Karapitiya"],
                    ["name" => "Koggala"],
                    ["name" => "Kosgoda"],
                    ["name" => "Mapalagama"],
                    ["name" => "Nagoda"],
                    ["name" => "Neluwa"],
                    ["name" => "Pitigala"],
                    ["name" => "Rathgama"],
                    ["name" => "Thawalama"],
                    ["name" => "Udugama"],
                    ["name" => "Uragasmanhandiya"],
                    ["name" => "Wanduramba"],
                    ["name" => "Yakkalamulla"],

                ],
            ],

            [
                "name" => "Gampaha",
                "city" => [
                    ["name" => "Attanagalla"],
                    ["name" => "Biyagama"],
                    ["name" => "Delgoda"],
                    ["name" => "Divlapitiya"],
                    ["name" => "Dompe"],
                    ["name" => "Gampaha"],
                    ["name" => "Ganemulla"],
                    ["name" => "Ja-Ela"],
                    ["name" => "Kadawatha"],
                    ["name" => "Kandana"],
                    ["name" => "Katana"],
                    ["name" => "Katunayake"],
                    ["name" => "Kelaniya"],
                    ["name" => "Kiribathgoda"],
                    ["name" => "Mahara"],
                    ["name" => "Minuwangoda"],
                    ["name" => "Mirigama"],
                    ["name" => "Negombo"],
                    ["name" => "Nittambuwa"],
                    ["name" => "Ragama"],
                    ["name" => "Veyangoda"],
                    ["name" => "Wattala"],

                ],
            ],

            [
                "name" => "Hambanthota",
                "city" => [
                    ["name" => "Ambalantota"],
                    ["name" => "Angunukolapelessa"],
                    ["name" => "Beliatta"],
                    ["name" => "Hambantota"],
                    ["name" => "Middeniya"],
                    ["name" => "Tangalla"],
                    ["name" => "Tissamaharama"],
                    ["name" => "Walasmulla"],
                    ["name" => "Weeraketiya"],
                ],
            ],

            [
                "name" => "Jaffna",
                "city" => [
                    ["name" => "Chankanai"],
                    ["name" => "Chavakachcheri"],
                    ["name" => "Jaffna"],
                    ["name" => "Karainagar"],
                    ["name" => "Karaveddy"],
                    ["name" => "Kayts"],
                    ["name" => "Kopay"],
                    ["name" => "Maruthankerney"],
                    ["name" => "Nallur"],
                    ["name" => "Point Pedro"],
                    ["name" => "Sandilipay"],
                    ["name" => "Tellippalai"],
                    ["name" => "Uduvil"],
                    ["name" => "Velanai"],
                ],
            ],

            [
                "name" => "Kalutara",
                "city" => [
                    ["name" => "Agalawatta"],
                    ["name" => "Aluthgama"],
                    ["name" => "Baduraliya"],
                    ["name" => "Bandaragama"],
                    ["name" => "Beruwala"],
                    ["name" => "Bulathsinhala"],
                    ["name" => "Dodangoda"],
                    ["name" => "Ingiriya"],
                    ["name" => "Kalutara"],
                    ["name" => "Madurawela"],
                    ["name" => "Matugama"],
                    ["name" => "Millaniya"],
                    ["name" => "Panadura"],
                    ["name" => "Wadduwa"],
                    ["name" => "Walallavita"],
                ],
            ],

            [
                "name" => "Kandy",
                "city" => [
                    ["name" => "Akurana"],
                    ["name" => "Alawatugoda"],
                    ["name" => "Ambatenna"],
                    ["name" => "Ampitiya"],
                    ["name" => "Daskara"],
                    ["name" => "Daulagala"],
                    ["name" => "Delthota"],
                    ["name" => "Digana"],
                    ["name" => "Galagedara"],
                    ["name" => "Galhinna"],
                    ["name" => "Gampola"],
                    ["name" => "Gelioya"],
                    ["name" => "Hanguranketa"],
                    ["name" => "Hapugastalawa"],
                    ["name" => "Harispattuwa"],
                    ["name" => "Hatharaliyadda"],
                    ["name" => "Kadugannawa"],
                    ["name" => "Kadugannawa UC"],
                    ["name" => "Kandy"],
                    ["name" => "Katugastota"],
                    ["name" => "Kundasale"],
                    ["name" => "Madawala"],
                    ["name" => "Madawala Bazaar"],
                    ["name" => "Menikdiwela"],
                    ["name" => "Minipe"],
                    ["name" => "Nawalapitiya"],
                    ["name" => "Pallekele"],
                    ["name" => "Panvila"],
                    ["name" => "Pathadumbara"],
                    ["name" => "Pathahewaheta"],
                    ["name" => "Peradeniya"],
                    ["name" => "Pilimatalawa"],
                    ["name" => "Poojapitiya"],
                    ["name" => "Pussellawa"],
                    ["name" => "Talatuoya"],
                    ["name" => "Teldeniya"],
                    ["name" => "Thumpane"],
                    ["name" => "Udapalatha"],
                    ["name" => "Ududumbara"],
                    ["name" => "Udunuwara"],
                    ["name" => "Ulapane"],
                    ["name" => "Watadeniya"],
                    ["name" => "Wattegama"],
                    ["name" => "Welamboda"],
                    ["name" => "Yatinuwara"],
                ],
            ],

            [
                "name" => "Kegalle",
                "city" => [
                    ["name" => "Ambepussa"],
                    ["name" => "Amitirigala"],
                    ["name" => "Aranayaka"],
                    ["name" => "Bulathkohupitiya"],
                    ["name" => "Dehiovita"],
                    ["name" => "Deraniyagala"],
                    ["name" => "Galigamuwa"],
                    ["name" => "Hemmathagama"],
                    ["name" => "Karawanella"],
                    ["name" => "Kegalle"],
                    ["name" => "Kitulgala"],
                    ["name" => "Kotiyakumbura"],
                    ["name" => "Mawanella"],
                    ["name" => "Rambukkana"],
                    ["name" => "Ruwanwella"],
                    ["name" => "Thalgaspitiya"],
                    ["name" => "Warakapola"],
                    ["name" => "Yatiyantota"],
                ],
            ],

            [
                "name" => "Kilinochchi",
                "city" => [
                    ["name" => "Iranamadu"],
                    ["name" => "Kandavalai"],
                    ["name" => "Kilinochchi"],
                    ["name" => "Pallai"],
                    ["name" => "Poonakary"],
                    ["name" => "Velikkandal"],
                ],
            ],

            [
                "name" => "Kurunegala",
                "city" => [
                    ["name" => "Alawwa"],
                    ["name" => "Bingiriya"],
                    ["name" => "Dambadeniya"],
                    ["name" => "Dankotuwa"],
                    ["name" => "Galgamuwa"],
                    ["name" => "Giriulla"],
                    ["name" => "Hettipola"],
                    ["name" => "Hiripitiya"],
                    ["name" => "Ibbagamuwa"],
                    ["name" => "Katupotha"],
                    ["name" => "Kuliyapitiya"],
                    ["name" => "Kurunegala"],
                    ["name" => "Maho"],
                    ["name" => "Mawathagama"],
                    ["name" => "Melsiripura"],
                    ["name" => "Narammala"],
                    ["name" => "Nikaweratiya"],
                    ["name" => "pahamune"],
                    ["name" => "Panagamuwa"],
                    ["name" => "Pannala"],
                    ["name" => "Pannawa"],
                    ["name" => "Polgahawela"],
                    ["name" => "Potuhera"],
                    ["name" => "Ridigama"],
                    ["name" => "Wariyapola"],
                    ["name" => "Wawathagama"],
                    ["name" => "Yapahuwa"],
                ],
            ],

            [
                "name" => "Mannar",
                "city" => [
                    ["name" => "Adampan"],
                    ["name" => "Chilawathurai"],
                    ["name" => "Madhu"],
                    ["name" => "Mannar"],
                    ["name" => "Nanaddan"],
                ],
            ],

            [
                "name" => "Matale",
                "city" => [
                    ["name" => "Dambulla"],
                    ["name" => "Elkaduwa"],
                    ["name" => "Galewela"],
                    ["name" => "Gammaduwa"],
                    ["name" => "Inamaluwa"],
                    ["name" => "Kaikawala"],
                    ["name" => "Kibissa"],
                    ["name" => "Laggala Pallegama"],
                    ["name" => "Madawala Ulpotha"],
                    ["name" => "Matale"],
                    ["name" => "Nalanda"],
                    ["name" => "Naula"],
                    ["name" => "Palapathwela"],
                    ["name" => "Pallepola"],
                    ["name" => "Rattota"],
                    ["name" => "Sigiriya"],
                    ["name" => "Ukuwela"],
                    ["name" => "Wahacotte"],
                    ["name" => "Yatawatta"],
                ],
            ],

            [
                "name" => "Matara",
                "city" => [
                    ["name" => "Athuraliya"],
                    ["name" => "Akuressa"],
                    ["name" => "Aparekka"],
                    ["name" => "Denipitiya"],
                    ["name" => "Deniyaya"],
                    ["name" => "Devinuwara"],
                    ["name" => "Dikwella"],
                    ["name" => "Gandara"],
                    ["name" => "Hakmana"],
                    ["name" => "Kamburugamuwa"],
                    ["name" => "Kamburupitiya"],
                    ["name" => "Karaputugala"],
                    ["name" => "Kekanadura"],
                    ["name" => "Kirinda"],
                    ["name" => "Kotapola"],
                    ["name" => "Malimbada"],
                    ["name" => "Matara"],
                    ["name" => "Mirissa"],
                    ["name" => "Morawaka"],
                    ["name" => "Mulatiyana"],
                    ["name" => "Pasgoda"],
                    ["name" => "Pitabeddara"],
                    ["name" => "Puhuwella"],
                    ["name" => "Thelijjawila"],
                    ["name" => "Thihagoda"],
                    ["name" => "Tihagoda"],
                    ["name" => "Weligama"],
                    ["name" => "Welihinda"],
                    ["name" => "Welipitiya"],
                ],
            ],

            [
                "name" => "Moneragala",
                "city" => [
                    ["name" => "Badalkumbura"],
                    ["name" => "Bibile"],
                    ["name" => "Buttala"],
                    ["name" => "Kataragama"],
                    ["name" => "Madulla"],
                    ["name" => "Medagama"],
                    ["name" => "Moneragala"],
                    ["name" => "Okkampitiya"],
                    ["name" => "Sevanagala"],
                    ["name" => "Siyambalanduwa"],
                    ["name" => "Tanamalwila"],
                    ["name" => "Wellawaya"],
                ],
            ],

            [
                "name" => "Mullativu",
                "city" => [
                    ["name" => "Ehatugaswewa"],
                    ["name" => "Mullativu"],
                    ["name" => "Oddusuddan"],
                    ["name" => "Pandiyankulam"],
                    ["name" => "Puthukkudiyiruppu"],
                    ["name" => "Thunukkai"],
                ],
            ],

            [
                "name" => "Nuwara Eliya",
                "city" => [
                    ["name" => "Agrapatana"],
                    ["name" => "Ambewela"],
                    ["name" => "Bogawantalawa"],
                    ["name" => "Bopattalawa"],
                    ["name" => "Dayagama"],
                    ["name" => "Ginigathena"],
                    ["name" => "Haggala"],
                    ["name" => "Hapugastalawa"],
                    ["name" => "Hatton"],
                    ["name" => "Kotagala"],
                    ["name" => "Kotmale"],
                    ["name" => "Labukele"],
                    ["name" => "Laxapana"],
                    ["name" => "Madulla"],
                    ["name" => "Maskeliya"],
                    ["name" => "Nanuoya"],
                    ["name" => "Nuwara Eliya"],
                    ["name" => "Padiyapelella"],
                    ["name" => "Ragala"],
                    ["name" => "Ramboda"],
                    ["name" => "Rozella"],
                    ["name" => "Talawakele"],
                    ["name" => "Udapussallawa"],
                    ["name" => "Walapane"],
                    ["name" => "Watawala"],
                ],
            ],

            [
                "name" => "Polonnaruwa",
                "city" => [
                    ["name" => "Aralaganwila"],
                    ["name" => "Bakamuna"],
                    ["name" => "Dimbulagala"],
                    ["name" => "Elahera"],
                    ["name" => "Galamuna"],
                    ["name" => "Giritale"],
                    ["name" => "Hingurakgoda"],
                    ["name" => "Jayantipura"],
                    ["name" => "Kaduruwela"],
                    ["name" => "Lankapura"],
                    ["name" => "Manampitiya"],
                    ["name" => "Medirigiriya"],
                    ["name" => "Minneriya"],
                    ["name" => "Polonnaruwa"],
                    ["name" => "Sungawila"],
                    ["name" => "Welikanda"],
                ],
            ],

            [
                "name" => "Puttalam",
                "city" => [
                    ["name" => "Anamaduwa"],
                    ["name" => "Battuluoya"],
                    ["name" => "Chilaw"],
                    ["name" => "Dankotuwa"],
                    ["name" => "Eluvankulam"],
                    ["name" => "Kalpitiya"],
                    ["name" => "Madampe"],
                    ["name" => "Mahawewa"],
                    ["name" => "Marawila"],
                    ["name" => "Mundel"],
                    ["name" => "Nattandiya"],
                    ["name" => "Nuraicholai"],
                    ["name" => "Palavi"],
                    ["name" => "Puttalam"],
                    ["name" => "Thillaiyadi"],
                    ["name" => "Wennappuwa"],
                ],
            ],

            [
                "name" => "Ratnapura",
                "city" => [
                    ["name" => "Ayagama"],
                    ["name" => "Balangoda"],
                    ["name" => "Eheliyagoda"],
                    ["name" => "Elapatha"],
                    ["name" => "Embilipitiya"],
                    ["name" => "Godakawela"],
                    ["name" => "Imbulpe"],
                    ["name" => "Kahawatta"],
                    ["name" => "Kalawana"],
                    ["name" => "Kiriella"],
                    ["name" => "Kolonne"],
                    ["name" => "Kuruwita"],
                    ["name" => "Nivitigala"],
                    ["name" => "Opanayaka"],
                    ["name" => "Panamure"],
                    ["name" => "Pelmadulla"],
                    ["name" => "Pohorabawa"],
                    ["name" => "Rakwana"],
                    ["name" => "Ratnapura"],
                    ["name" => "Weligepola"],
                ],
            ],

            [
                "name" => "Trincomalee",
                "city" => [
                    ["name" => "Gomarankadawala"],
                    ["name" => "Kantalai"],
                    ["name" => "Kinniya"],
                    ["name" => "Kuchchaveli"],
                    ["name" => "Morawewa"],
                    ["name" => "Muttur"],
                    ["name" => "Seruvila"],
                    ["name" => "Siripura"],
                    ["name" => "Thampalakamam"],
                    ["name" => "Trincomalee"],
                    ["name" => "Verugal"],
                ],
            ],

            [
                "name" => "Vavuniya",
                "city" => [
                    ["name" => "Vavuniya"],
                    ["name" => "Nedunkeni"],
                    ["name" => "Cheddikulam"],
                ],
            ],
            [
                "name" => "Work from Home",
                "city" => [
                    ["name" => "Home"],
                ],
            ],

        ];

        foreach ($districts as $district) {
            $district_entity = District::create([
                "name" => $district["name"],
                "slug" => $district["name"],
            ]);

            foreach ($district["city"] as $c) {
                DistrictCity::create([
                    "district_id" => $district_entity->id,
                    "name" => $c["name"],
                    "slug" => $c["name"],
                ]);
            }
        }
    }
}

