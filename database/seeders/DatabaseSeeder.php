<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kategori;
use App\Models\Film;
use App\Models\Genre;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Film::create([
        //     'judul'=>'Kimi no Na wa',
        //     'slug'=>'Kimi_no_Na_wa',
        //     'kategori_id'=>'2',
        //     'poster'=>'https://i.postimg.cc/4yzGHNzN/your-name.jpg',
        //     'video'=>'https://short.ink/-FoWUMZ5d',
        //     'sutradara'=>'Makoto Shinkai',
        //     'bintangFilm'=>'Ryûnosuke Kamiki, Mone Kamishiraishi, Ryô Narita',
        //     'rating'=>'8.87',
        //     'durasi'=>'106 menit',
        //     'sinopsis'=>'Mitsuha Miyamizu, seorang gadis SMA, mendambakan untuk menjalani kehidupan seorang anak laki-laki di kota Tokyo yang ramai—sebuah mimpi yang sangat kontras dengan kehidupannya saat ini di pedesaan. Sementara itu di kota, Taki Tachibana menjalani kehidupan yang sibuk sebagai siswa sekolah menengah sambil menyulap pekerjaan paruh waktu dan harapan untuk masa depan dalam arsitektur.
        //     Suatu hari, Mitsuha terbangun di sebuah ruangan yang bukan miliknya dan tiba-tiba mendapati dirinya menjalani kehidupan impian di Tokyo—tetapi di dalam tubuh Taki! Di tempat lain, Taki mendapati dirinya menjalani kehidupan Mitsuha di pedesaan yang sederhana. Dalam mengejar jawaban atas fenomena aneh ini, mereka mulai mencari satu sama lain.
        //     Kimi no Nawa.berkisah tentang tindakan Mitsuha dan Taki, yang mulai memiliki dampak dramatis pada kehidupan masing-masing, menenun mereka menjadi kain yang disatukan oleh nasib dan keadaan.'
        // ]);
        // Film::create([
        //     'judul'=>'Kimetsu no Yaiba Movie: Mugen Ressha-hen',
        //     'slug'=>'Kimetsu_no_Yaiba_Movie_Mugen_Ressha-hen',
        //     'kategori_id'=>'2',
        //     'poster'=>'https://i.postimg.cc/TwdqPCHW/demon-slayer-kimetsu-no-yaiba-the-movie-mugen-train-wallpapers.jpg',
        //     'video'=>'https://short.ink/-FoWUMZ5d',
        //     'sutradara'=>'Haruo Sotozaki',
        //     'bintangFilm'=>'Natsuki Hanae, Akari Kitō, Yoshitsugu Matsuoka, Hiro Shimono, Satoshi Hino',
        //     'rating'=>'8.67',
        //     'durasi'=>'116 menit',
        //     'sinopsis'=>'Setelah Enmu ditugaskan untuk membunuh Tanjiro Kamado untuk menjadi Peringkat Atas dan mendapatkan lebih banyak darah Muzan, Tanjiro, Zenitsu, dan Inosuke membeli tiket Kereta Infinity untuk mencari Kyojuro Rengoku, si Api Hashhira. Tanjiro berharap dia memiliki beberapa info tentang Hinokami Kagura.'
        // ]);
        // Film::create([
        //     'judul'=>'Free Guy',
        //     'slug'=>'Free_Guy',
        //     'kategori_id'=>'1',
        //     'poster'=>'https://i.postimg.cc/28VFYb7D/free-guy-scaled.jpg',
        //     'video'=>'https://short.ink/-FoWUMZ5d',
        //     'sutradara'=>'Shawn Levy',
        //     'bintangFilm'=>'Ryan Reynolds, Jodie Comer, Taika Waititi',
        //     'rating'=>'7.1',
        //     'durasi'=>'115 menit',
        //     'sinopsis'=>'Seorang teller bank menemukan bahwa dia sebenarnya adalah NPC di dalam video game dunia terbuka yang brutal.'
        // ]);
        // Film::create([
        //     'judul'=>'Sonic 2',
        //     'slug'=>'Sonic_2',
        //     'kategori_id'=>'1',
        //     'poster'=>'https://i.postimg.cc/59TB1MmR/sonic-2.png',
        //     'video'=>'https://short.ink/-FoWUMZ5d',
        //     'sutradara'=>'Jeff Fowler',
        //     'bintangFilm'=>'James Marsden, Jim Carrey, Ben Schwartz',
        //     'rating'=>'6.6',
        //     'durasi'=>'122 menit',
        //     'sinopsis'=>'Ketika Dr. Robotnik yang maniak kembali ke Bumi dengan sekutu baru, Knuckles the Echidna, Sonic, dan teman barunya Tails adalah yang menghalangi mereka.'
        // ]);

        Kategori::create([
            'nama' => 'Movies'
        ]);
        Kategori::create([
            'nama' => 'Anime'
        ]);
        
        Genre::create([
            'nama' => 'Action'
        ]);
        Genre::create([
            'nama' => 'Comedy'
        ]);
        Genre::create([
            'nama' => 'Fantasy'
        ]);
        Genre::create([
            'nama' => 'Horror'
        ]);
        Genre::create([
            'nama' => 'Romance'
        ]);
        Genre::create([
            'nama' => 'Supranatural'
        ]);
        Genre::create([
            'nama' => 'Thriller'
        ]);
    }
}
