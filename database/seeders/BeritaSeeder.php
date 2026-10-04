<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        Berita::create([
            'judul' => 'Turnamen Voli Antar Dusun Resmi Dibuka',
            'kategori' => 'Olahraga',
            'isi' => 'Turnamen voli tahunan antar dusun resmi dibuka oleh kepala desa...',
            'penulis' => 'Admin',
        ]);
        Berita::create([
            'judul' => 'Sosialisasi Bank Sampah untuk Warga',
            'kategori' => 'Pendidikan',
            'isi' => 'Pemerintah desa mengadakan sosialisasi pengelolaan sampah...',
            'penulis' => 'Admin',
        ]);
        Berita::create([
            'judul' => 'Panen Raya Kelompok Wanita Tani',
            'kategori' => 'Potensi',
            'isi' => 'Kelompok wanita tani desa berhasil panen sayuran organik...',
            'penulis' => 'Admin',
        ]);
        Berita::create([
            'judul' => 'Pemerintah Desa Jalatrang Kukuhkan Desa Siaga TB, Perkuat Kolaborasi Lintas Sektor Basmi Tuberkulosis',
            'kategori' => 'Pendidikan',
            'isi' => 'Pemerintah Desa Jalatrang menggelar Sosialisasi Pencegahan Penyakit Menular (TBC) sekaligus Pembentukan Desa Siaga Tuberkulosis (TB) pada 28 September 2026 di aula Desa Jalatrang. Kegiatan ini bertujuan meningkatkan kesadaran masyarakat serta memperkuat deteksi dini dan pencegahan penularan TBC.',
            'penulis' => 'Dadi Haryadi',
        ]);

        Berita::create([
            'judul' => 'Malam Penuh Gengsi Dimulai! 16 Tim Berebut Mahkota Juara di Ajang CVC Cup 2026 Desa Jalatrang',
            'kategori' => 'Olahraga',
            'isi' => 'Ajang CVC Cup 2026 Desa Jalatrang resmi diselenggarakan dan diikuti oleh 16 tim. Turnamen bola voli ini menjadi salah satu kegiatan olahraga yang mempertemukan tim-tim dalam kompetisi untuk memperebutkan gelar juara.',
            'penulis' => 'JalatrangNews',
        ]);
        Berita::create([
            'judul' => 'Tingkatkan Nilai Religi dan Ekologi, Mahasiswa KKN UPI Membaur dalam Pengajian Bulanan Desa dan Aksi Penjemputan Sampah',
            'kategori' => 'Pendidikan',
            'isi' => 'JalatrangNews; Memasuki hari keempat pada Minggu (28/6), mahasiswa KKN Berdampak UPI Kelompok 04 membuktikan komitmennya untuk membaur secara utuh dengan kehidupan sosiokultural masyarakat Desa Jalatrang.',
            'penulis' => 'JalatrangNews',
        ]);
    }
}
