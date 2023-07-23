<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('kategoris')->delete();

        \DB::table('kategoris')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Adult Fiction',
                'slug' => 'adult-fiction',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Art, Music & Photography',
                'slug' => 'art-music-photography',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Biographies & Memoirs',
                'slug' => 'biographies-memoirs',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Buddhism & Hinduism',
                'slug' => 'buddhism-hinduism',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Business & Investing',
                'slug' => 'business-investing',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Children Age 0-3',
                'slug' => 'children-age-0-3',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Children Age 4-7',
                'slug' => 'children-age-4-7',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Children Age 8-12',
                'slug' => 'children-age-8-12',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Christianity',
                'slug' => 'christianity',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Classics',
                'slug' => 'classics',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Comics & Graphic Novels',
                'slug' => 'comics-graphic-novels',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Computers & Technology',
                'slug' => 'computers-technology',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Education & Test Preparation',
                'slug' => 'education-test-preparation',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Fiction & Literature',
                'slug' => 'fiction-literature',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Food, Drink & Cookbook',
                'slug' => 'food-drink-cookbook',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Health, Fitness & Wellness',
                'slug' => 'health-fitness-wellness',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Historical Fiction',
                'slug' => 'historical-fiction',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'History',
                'slug' => 'history',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'Home & Architecture',
                'slug' => 'home-architecture',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'Horror & Paranormal',
                'slug' => 'horror-paranormal',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            20 =>
            array(
                'id' => 21,
                'name' => 'Humor & Comedy',
                'slug' => 'humor-comedy',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            21 =>
            array(
                'id' => 22,
                'name' => 'Islam',
                'slug' => 'islam',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            22 =>
            array(
                'id' => 23,
                'name' => 'Law & Tax',
                'slug' => 'law-tax',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            23 =>
            array(
                'id' => 24,
                'name' => 'Manga, Manhua & Manhwa',
                'slug' => 'manga-manhua-manhwa',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            24 =>
            array(
                'id' => 25,
                'name' => 'Motivation & Self-Help',
                'slug' => 'motivation-self-help',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            25 =>
            array(
                'id' => 26,
                'name' => 'Mystery, Thriller & Suspense',
                'slug' => 'mystery-thriller-suspense',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            26 =>
            array(
                'id' => 27,
                'name' => 'Non-fiction',
                'slug' => 'non-fiction',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            27 =>
            array(
                'id' => 28,
                'name' => 'Parenting & Relationships',
                'slug' => 'parenting-relationships',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            28 =>
            array(
                'id' => 29,
                'name' => 'Philosophy',
                'slug' => 'philosophy',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            29 =>
            array(
                'id' => 30,
                'name' => 'Poem & Short Story',
                'slug' => 'poem-short-story',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            30 =>
            array(
                'id' => 31,
                'name' => 'Politics, Affairs & Social Sciences',
                'slug' => 'politics-affairs-social-sciences',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            31 =>
            array(
                'id' => 32,
                'name' => 'Professional, Engineering & Technical',
                'slug' => 'professional-engineering-technical',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            32 =>
            array(
                'id' => 33,
                'name' => 'Psychology',
                'slug' => 'psychology',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            33 =>
            array(
                'id' => 34,
                'name' => 'Reference & Dictionary',
                'slug' => 'reference-dictionary',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-04 22:22:05',
            ),
            34 =>
            array(
                'id' => 35,
                'name' => 'Religion & Spirituality',
                'slug' => 'religion-spirituality',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-04 22:22:05',
            ),
            35 =>
            array(
                'id' => 36,
                'name' => 'Romance',
                'slug' => 'romance',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-04 22:22:05',
            ),
            36 =>
            array(
                'id' => 37,
                'name' => 'Science Fiction & Fantasy',
                'slug' => 'science-fiction-fantasy',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-04 22:22:05',
            ),
            37 =>
            array(
                'id' => 38,
                'name' => 'Science & Nature',
                'slug' => 'science-nature',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-04 22:22:05',
            ),
            38 =>
            array(
                'id' => 39,
                'name' => 'Sports & Outdoors',
                'slug' => 'sports-outdoors',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-04 22:22:05',
            ),
            39 =>
            array(
                'id' => 40,
                'name' => 'Teen & Young Adult Fiction',
                'slug' => 'teen-young-adult-fiction',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-04 22:22:05',
            ),
            40 =>
            array(
                'id' => 41,
                'name' => 'Travel',
                'slug' => 'travel',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-04 22:22:05',
            ),
            41 =>
            array(
                'id' => 42,
                'name' => 'Children',
                'slug' => 'children',
                'created_at' => '2021-12-04 22:25:10',
                'updated_at' => '2021-12-04 22:25:10',
            ),
            42 =>
            array(
                'id' => 43,
                'name' => 'Lainnya',
                'slug' => 'lainnya',
                'created_at' => '2021-12-04 22:25:10',
                'updated_at' => '2021-12-04 22:25:10',
            ),
        ));
    }
}
