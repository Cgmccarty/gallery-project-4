<?php

use Illuminate\Database\Seeder;

class ArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $art1 = new \App\Artwork;
        $art1->artwork_name = 'Mary Magdalene and angels';
        $art1->url = 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Torun_SS_Johns_Mary_Magdalene.jpg/800px-Torun_SS_Johns_Mary_Magdalene.jpg';
        $art1->save();

        $art2 = new \App\Artwork;
        $art2->artwork_name = 'The Virgin and the Child of Poligny';
        $art2->year_completed = 'ca. 1420 CE';
        $art2->artist_name = 'Claus de Werve';
        $art2->medium = 'Limestone with paint and gilding';
        $art2->url = 'https://upload.wikimedia.org/wikipedia/commons/6/66/WLA_metmuseum_Poligny_Virgin.jpg';
        $art2->description = "This monumental yet engagingly intimate image of the Virgin and Child was probably
        a gift of John the Fearless, duke of Burgundy (died 1419), or his wife Margaret of Bavaria (died 1424) to
        the convent they founded at Poligny dedicated to the Franciscan Order of Poor Clares. This is one of four
        large sculptures from Poligny in the Museum's collection. As court sculptor in Dijon, the influential artist
        Claus de Werve (active 1396–ca. 1439) created many works for his patrons, and this is certainly one of his
        masterpieces. Its original location in the convent is unknown, but the sculpture was probably installed in
        the area reserved for the devotions of the nuns. In this tender portrayal, Mary's role as a personification of
        Wisdom is evoked by the open book on Christ's lap. In contrast to the warmth of the depiction of mother and son,
        the biblical inscription on the bench reminds us of Christ's fulfillment of Old Testament prophecy: \"From the
        beginning, and before the world, was I created …\" (Ecclesiasticus 24:14).";
        $art2->save();

        $art3 = new \App\Artwork;
        $art3->artwork_name = 'The Golden Bull';
        $art3->year_completed = 'ca. 1400 CE';
        $art3->artist_name = 'The Master of the Golden Bull';
        $art3->medium = 'Parchment';
        $art3->url = 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Meister_der_Wenzel-Werkstatt_002.jpg';
        $art3->description = 'The Golden Bull of 1356 (German: Goldene Bulle, Latin: Bulla Aurea) was a decree issued
        by the Imperial Diet at Nuremberg and Metz (Diet of Metz (1356/57)) headed by the Emperor Charles IV which fixed,
        for a period of more than four hundred years, important aspects of the constitutional structure of the Holy Roman
        Empire. It was named the Golden Bull for the golden seal it carried.';
        $art3->save();

        $art4 = new \App\Artwork;
        $art4->artwork_name = 'The Paremont of Narbonne';
        $art4->year_completed = 'ca. 1375 CE';
        $art4->artist_name = 'Master of the Paremont';
        $art4->medium = 'Gray wash on fluted silk mounted on canvas';
        $art4->url = 'https://upload.wikimedia.org/wikipedia/commons/9/99/Parement_de_Narbonne.jpg';
        $art4->save();

        $art5 = new \App\Artwork;
        $art5->artwork_name = 'Adoration of the Magi';
        $art5->year_completed = 'ca. 1420 CE';
        $art5->artist_name = 'Conrad von Soest';
        $art5->medium = 'Tempera on wood';
        $art5->url = 'https://upload.wikimedia.org/wikipedia/commons/2/2e/Conrad_von_Soest_001.jpg';
        $art5->save();
    }
}
