<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndoTurkiSeeder extends Seeder
{
   
    public function run()
    {
        $data = [];

        $indonesianWords = [
            'Buku', 'Mobil', 'Komputer', 'Hewan', 'Makanan',
            'Pohon', 'Rumah', 'Jalan', 'Matahari', 'Bunga',
            'Air', 'Angin', 'Api', 'Pisau', 'Gunting',
            'Pertanyaan', 'Jawaban', 'Musik', 'Film', 'Pantai',
            'Gunung', 'Awan', 'Hujan', 'Salju', 'Bintang',
            'Bola', 'Sepatu', 'Topi', 'Jam', 'Kacamata',
        ];

        $turkiWords = [
            'Kitap', 'Araba', 'Bilgisayar', 'Hayvan', 'Yiyecek',
            'Ağaç', 'Ev', 'Yol', 'Güneş', 'Çiçek',
            'Su', 'Rüzgar', 'Ateş', 'Bıçak', 'Makas',
            'Soru', 'Cevap', 'Müzik', 'Film', 'Plaj',
            'Dağ', 'Bulut', 'Yağmur', 'Kar', 'Yıldız',
            'Top', 'Ayakkabı', 'Şapka', 'Saat', 'Gözlük',
        ];

        $jenisKata = [
            'Nomina', 'Verba', 'Adjektiva', 'Adverbia', 'Preposisi',
            'Konjungsi', 'Interjeksi', 'Pronomina', 'Numeralia', 'Artikel',
            'Partikel', 'Determiner', 'Konjungsi', 'Injungsi', 'Adposisi',
            'Kata Benda', 'Kata Kerja', 'Kata Sifat', 'Kata Keterangan', 'Kata Depan',
            'Kata Hubung', 'Kata Seru', 'Kata Ganti', 'Kata Bilangan', 'Artikel',
            'Partikel', 'Determiner', 'Konjungsi', 'Injungsi','Kata Benda'
        ];
        
        $contohPenggunaan = [
            'Saya suka membaca buku setiap hari.',
            'Mobil baru saya sangat cepat.',
            'Komputer ini sangat canggih.',
            'Hewan-hewan di kebun binatang sangat lucu.',
            'Makanan favorit saya adalah pizza.',
            'Pohon di taman ini sangat tinggi.',
            'Rumah baru kami memiliki taman yang indah.',
            'Jalan ini sangat ramai pada jam sibuk.',
            'Matahari terbenam di ufuk barat.',
            'Bunga di kebun ini berwarna-warni.',
            'Air adalah kebutuhan hidup.',
            'Angin bertiup lembut di pantai.',
            'Api unggun memberikan kehangatan di malam hari.',
            'Pisau ini sangat tajam.',
            'Gunting ini digunakan untuk memotong kertas.',
            'Pertanyaan itu membuat saya berpikir.',
            'Jawaban yang diberikan sangat informatif.',
            'Musik ini sangat menghibur.',
            'Film favorit saya adalah drama.',
            'Pantai ini indah dengan pasir putihnya.',
            'Gunung tertinggi di dunia adalah Everest.',
            'Awan bergerak perlahan di langit biru.',
            'Hujan membuat tanah menjadi basah.',
            'Salju turun di musim dingin.',
            'Bintang-bintang bersinar di langit malam.',
            'Bola digunakan dalam berbagai olahraga.',
            'Sepatu baru saya sangat nyaman.',
            'Topi ini melindungi dari sinar matahari.',
            'Jam tangan saya sudah tua tapi masih berfungsi baik.',
            'Kacamata ini membuat penglihatan saya jelas.',
        ];

        $contohPenggunaanTurki = [
            'Her gün kitap okumayı severim.',
            'Yeni arabam çok hızlı.',
            'Bu bilgisayar çok gelişmiş.',
            'Hayvanat bahçesindeki hayvanlar çok sevimli.',
            'En sevdiğim yemek pizza.',
            'Bu parktaki ağaçlar çok yüksek.',
            'Yeni evimizde güzel bir bahçe var.',
            'Bu yol yoğun saatlerde çok kalabalık.',
            'Güneş batıda kaybolur.',
            'Bu bahçedeki çiçekler renkli.',
            'Su, yaşam için gereklidir.',
            'Rüzgar plajda nazikçe eser.',
            'Ateş, geceleyin ısı sağlar.',
            'Bu bıçak çok keskin.',
            'Bu makas kağıt kesmek için kullanılır.',
            'Sorulan soru beni düşündürdü.',
            'Verilen cevap çok bilgilendiriciydi.',
            'Bu müzik beni çok eğlendiriyor.',
            'En sevdiğim film bir dramadır.',
            'Bu plaj beyaz kumuyla güzel.',
            'Dünyanın en yüksek dağı Everest\'tir.',
            'Bulutlar mavi gökyüzünde yavaşça hareket eder.',
            'Yağmur toprağı ıslatır.',
            'Kışın kar yağar.',
            'Gece gökyüzünde yıldızlar parlar.',
            'Top, çeşitli sporlarda kullanılır.',
            'Yeni ayakkabılarım çok rahat.',
            'Bu şapka güneş ışınlarından korur.',
            'Saatim eskidir ama hala iyi çalışır.',
            'Bu gözlük görüşümü netleştirir.',
            // ... add more examples as needed
        ];
        
        $keterangan = [
            'Deskripsi tentang buku favorit saya.',
            'Mobil baru saya memiliki mesin yang kuat.',
            'Komputer ini dilengkapi dengan prosesor terbaru.',
            'Hewan-hewan di kebun binatang memiliki keunikan masing-masing.',
            'Makanan favorit saya, pizza, selalu lezat.',
            'Pohon di taman ini memberikan naungan yang menyenangkan.',
            'Rumah baru kami memiliki desain modern.',
            'Jalan ini sering digunakan oleh kendaraan bermotor.',
            'Matahari terbenam memberikan pemandangan yang indah.',
            'Bunga-bunga di kebun ini sangat cantik.',
            'Air adalah sumber kehidupan.',
            'Angin sepoi-sepoi menyegarkan di pantai.',
            'Api unggun di malam hari menciptakan suasana hangat.',
            'Pisau ini memiliki mata yang tajam.',
            'Gunting ini berguna untuk memotong kertas dengan rapi.',
            'Pertanyaan tersebut memicu pemikiran mendalam.',
            'Jawaban yang diberikan sangat informatif dan jelas.',
            'Musik selalu menyertai setiap momen.',
            'Film drama selalu menyentuh hati saya.',
            'Pantai ini memiliki pasir putih yang lembut.',
            'Gunung Everest adalah gunung tertinggi di dunia.',
            'Awan bergerak di langit biru dengan lembut.',
            'Hujan memberikan kesegaran pada tanah.',
            'Salju menutupi tanah di musim dingin.',
            'Bintang-bintang bersinar di langit malam yang gelap.',
            'Bola digunakan dalam berbagai jenis olahraga.',
            'Sepatu baru saya sangat nyaman untuk dipakai sehari-hari.',
            'Topi ini melindungi dari sinar matahari yang terik.',
            'Jam tangan ini memiliki desain klasik.',
            'Kacamata ini memberikan kenyamanan dalam melihat.',
            // ... add more descriptions as needed
        ];
        
        foreach ($indonesianWords as $index => $indonesianWord) {
            $data[] = [
                'kata_indonesia' => $indonesianWord,
                'kata_turki' => $turkiWords[$index],
                'jenis_kata' => $jenisKata[$index],
                'contoh_penggunaan' => $contohPenggunaan[$index],
                'contoh_penggunaan_turki' => $contohPenggunaanTurki[$index],
                'keterangan' =>  $keterangan[$index],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert data into the 'indo_turkis' table
        DB::table('indo_turkis')->insert($data);
    }
}
