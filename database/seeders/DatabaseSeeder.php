<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \DB::table('author')->insert([
            [
                'id' => 1,
                'name' => 'Amie Kaufman',
                'description' => "Amie Kaufman is a New York Times bestselling and internationally bestselling Australian author of science fiction and fantasy for young adults. She is known for the Starbound Trilogy and Unearthed, which she co-authored with Meagan Spooner; for her series The Illuminae Files, co-authored with Jay Kristoff; and for her solo series, Elementals. Her books have been published in over 35 countries."
            ],
            [
                'id' => 2,
                'name' => ' Diana Gabaldon',
                'description' => "Diana J. Gabaldon ( born January 11, 1952) is an American author, known for the Outlander series of novels. Her books merge multiple genres, featuring elements of historical fiction, romance, mystery, adventure and science fiction/fantasy. A television adaptation of the Outlander novels premiered on Starz in 2014."
            ],
            [
                'id' => 3,
                'name' => ' Sarah J. Maas',
                'description' => "Sarah Janet Maas (born 5 March 1986) is an American fantasy author, best known for her debut series Throne of Glass published in 2012 and A Court of Thorns and Roses series, published in 2015. Her newest work is the Crescent City series." 
            ]
        ]);

        \DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Sci-fi'
            ],
            [
                'id' => 2,
                'name' => 'Historic'
            ],
            [
                'id' => 3,
                'name' => 'Fantasy'
            ]
        ]);

        \DB::table('books')->insert([
            [
                'id' => 1,
                'title'=>"Gemina",
                'isbn'=>9780553499162,
                'author'=>"Amie Kaufman",
                'price'=> 15,
                'description' => "Moving to a space station at the edge of the galaxy was always going to be the death of Hanna’s social life. Nobody said it might actually get her killed. The sci-fi saga that began with the breakout bestseller Illuminae continues on board the Jump Station Heimdall, where two new characters will confront the next wave of the BeiTech assault. Hanna is the station captain’s pampered daughter; Nik the reluctant member of a notorious crime family. But while the pair are struggling with the realities of life aboard the galaxy’s most boring space station, little do they know that Kady Grant and the Hypatia are headed right toward Heimdall, carrying news of the Kerenza invasion.",
                'category'=>"Sci-fi"           
            ],
            [
                'id' => 2,
                'title'=>"Outlander",
                'isbn'=> 90440242940,
                'author'=>" Diana Gabaldon",
                'price'=> 10,
                'description' => "The year is 1945. Claire Randall, a former combat nurse, is just back from the war and reunited with her husband on a second honeymoon when she walks through a standing stone in one of the ancient circles that dot the British Isles. Suddenly she is a Sassenach—an “outlander”—in a Scotland torn by war and raiding border clans in the year of Our Lord...1743. Hurled back in time by forces she cannot understand, Claire is catapulted into the intrigues of lairds and spies that may threaten her life, and shatter her heart. For here James Fraser, a gallant young Scots warrior, shows her a love so absolute that Claire becomes a woman torn between fidelity and desire—and between two vastly different men in two irreconcilable lives.",
                'category'=>"Historic"           
            ],
            [
                'id' => 3,
                'title'=>"Throne of Glass",
                'isbn'=>9780553499162,
                'author'=>"Throne of Glass ",
                'price'=> 20,
                'description' => "After serving out a year of hard labor in the salt mines of Endovier for her crimes, 18-year-old assassin Celaena Sardothien is dragged before the Crown Prince. Prince Dorian offers her her freedom on one condition: she must act as his champion in a competition to find a new royal assassin. Her opponents are men-thieves and assassins and warriors from across the empire, each sponsored by a member of the king's council. If she beats her opponents in a series of eliminations, she'll serve the kingdom for four years and then be granted her freedom. Celaena finds her training sessions with the captain of the guard, Westfall, challenging and exhilarating. But she's bored stiff by court life. Things get a little more interesting when the prince starts to show interest in her ... but it's the gruff Captain Westfall who seems to understand her best.",
                'category'=>"Fantasy"       
            ],

        ]);
        
    }
}
