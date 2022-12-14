<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\District;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AcehDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Aceh Barat"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Aceh Barat Daya"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Aceh Besar"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Aceh Jaya"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Aceh Selatan"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Aceh Singkil"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Aceh Tamiang"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Aceh Tengah"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Aceh Tenggara"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Aceh Timur"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Aceh Utara"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Bener Meriah"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Bireuen"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Gayo Lues"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Nagan Raya"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Pidie"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Pidie Jaya"],
            ['id_prov' => '1', 'nama_kota' => "Kabupaten Simeulue"],
            ['id_prov' => '1', 'nama_kota' => "Kota Banda Aceh"],
            ['id_prov' => '1', 'nama_kota' => "Kota Langsa"],
            ['id_prov' => '1', 'nama_kota' => "Kota Lhokseumawe"],
            ['id_prov' => '1', 'nama_kota' => "Kota Sabang"],
            ['id_prov' => '1', 'nama_kota' => "Kota Subulussalam"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Asahan"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Batu Bara"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Dairi"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Deli Serdang"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Humbang Hasundutan"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Karo"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Labuhanbatu"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Labuhanbatu Selatan"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Labuhanbatu Utara"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Langkat"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Mandailing Natal"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Nias"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Nias Barat"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Nias Selatan"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Nias Utara"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Padang Lawas"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Padang Lawas Utara"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Pakpak Bharat"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Samosir"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Serdang Bedagai"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Simalungun"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Tapanuli Selatan"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Tapanuli Tengah"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Tapanuli Utara"],
            ['id_prov' => '2', 'nama_kota' => "Kabupaten Toba"],
            ['id_prov' => '2', 'nama_kota' => "Kota Binjai"],
            ['id_prov' => '2', 'nama_kota' => "Kota Gunungsitoli"],
            ['id_prov' => '2', 'nama_kota' => "Kota Medan"],
            ['id_prov' => '2', 'nama_kota' => "Kota Padang Sidempuan"],
            ['id_prov' => '2', 'nama_kota' => "Kota Pematangsiantar"],
            ['id_prov' => '2', 'nama_kota' => "Kota Sibolga"],
            ['id_prov' => '2', 'nama_kota' => "Kota Tanjungbalai"],
            ['id_prov' => '2', 'nama_kota' => "Kota Tebing Tinggi"],
            ['id_prov' => '3', 'nama_kota' => "Kabupaten Agam"],
            ['id_prov' => '3', 'nama_kota' => "Kabupaten Dharmasraya"],
            ['id_prov' => '3', 'nama_kota' => "Kabupaten Kepulauan Mentawai"],
            ['id_prov' => '3', 'nama_kota' => "Kabupaten Lima Puluh Kota"],
            ['id_prov' => '3', 'nama_kota' => "Kabupaten Padang Pariaman"],
            ['id_prov' => '3', 'nama_kota' => "Kabupaten Pasaman"],
            ['id_prov' => '3', 'nama_kota' => "Kabupaten Pasaman Barat"],
            ['id_prov' => '3', 'nama_kota' => "Kabupaten Pesisir Selatan"],
            ['id_prov' => '3', 'nama_kota' => "Kabupaten Sijunjung"],
            ['id_prov' => '3', 'nama_kota' => "Kabupaten Solok"],
            ['id_prov' => '3', 'nama_kota' => "Kabupaten Solok Selatan"],
            ['id_prov' => '3', 'nama_kota' => "Kabupaten Tanah Datar"],
            ['id_prov' => '3', 'nama_kota' => "Kota Bukittinggi"],
            ['id_prov' => '3', 'nama_kota' => "Kota Padang"],
            ['id_prov' => '3', 'nama_kota' => "Kota Padang Panjang"],
            ['id_prov' => '3', 'nama_kota' => "Kota Pariaman"],
            ['id_prov' => '3', 'nama_kota' => "Kota Payakumbuh"],
            ['id_prov' => '3', 'nama_kota' => "Kota Sawahlunto"],
            ['id_prov' => '3', 'nama_kota' => "Kota Solok"],
            ['id_prov' => '4', 'nama_kota' => "Kabupaten Bengkalis"],
            ['id_prov' => '4', 'nama_kota' => "Kabupaten Indragiri Hilir"],
            ['id_prov' => '4', 'nama_kota' => "Kabupaten Indragiri Hulu"],
            ['id_prov' => '4', 'nama_kota' => "Kabupaten Kampar"],
            ['id_prov' => '4', 'nama_kota' => "Kabupaten Kepulauan Meranti"],
            ['id_prov' => '4', 'nama_kota' => "Kabupaten Kuantan Singingi"],
            ['id_prov' => '4', 'nama_kota' => "Kabupaten Pelalawan"],
            ['id_prov' => '4', 'nama_kota' => "Kabupaten Rokan Hilir"],
            ['id_prov' => '4', 'nama_kota' => "Kabupaten Rokan Hulu"],
            ['id_prov' => '4', 'nama_kota' => "Kabupaten Siak"],
            ['id_prov' => '4', 'nama_kota' => "Kota Dumai"],
            ['id_prov' => '4', 'nama_kota' => "Kota Pekanbaru"],
            ['id_prov' => '5', 'nama_kota' => "Kabupaten Bintan"],
            ['id_prov' => '5', 'nama_kota' => "Kabupaten Karimun"],
            ['id_prov' => '5', 'nama_kota' => "Kabupaten Kepulauan Anambas"],
            ['id_prov' => '5', 'nama_kota' => "Kabupaten Lingga"],
            ['id_prov' => '5', 'nama_kota' => "Kabupaten Natuna"],
            ['id_prov' => '5', 'nama_kota' => "Kota Batam"],
            ['id_prov' => '5', 'nama_kota' => "Kota Tanjungpinang"],
            ['id_prov' => '6', 'nama_kota' => "Kabupaten Batanghari"],
            ['id_prov' => '6', 'nama_kota' => "Kabupaten Bungo"],
            ['id_prov' => '6', 'nama_kota' => "Kabupaten Kerinci"],
            ['id_prov' => '6', 'nama_kota' => "Kabupaten Merangin"],
            ['id_prov' => '6', 'nama_kota' => "Kabupaten Muaro Jambi"],
            ['id_prov' => '6', 'nama_kota' => "Kabupaten Sarolangun"],
            ['id_prov' => '6', 'nama_kota' => "Kabupaten Tanjung Jabung Barat"],
            ['id_prov' => '6', 'nama_kota' => "Kabupaten Tanjung Jabung Timur"],
            ['id_prov' => '6', 'nama_kota' => "Kabupaten Tebo"],
            ['id_prov' => '6', 'nama_kota' => "Kota Jambi"],
            ['id_prov' => '6', 'nama_kota' => "Kota Sungai Penuh"],
            ['id_prov' => '7', 'nama_kota' => "Kabupaten Bengkulu Selatan"],
            ['id_prov' => '7', 'nama_kota' => "Kabupaten Bengkulu Tengah"],
            ['id_prov' => '7', 'nama_kota' => "Kabupaten Bengkulu Utara"],
            ['id_prov' => '7', 'nama_kota' => "Kabupaten Kaur"],
            ['id_prov' => '7', 'nama_kota' => "Kabupaten Kepahiang"],
            ['id_prov' => '7', 'nama_kota' => "Kabupaten Lebong"],
            ['id_prov' => '7', 'nama_kota' => "Kabupaten Mukomuko"],
            ['id_prov' => '7', 'nama_kota' => "Kabupaten Rejang Lebong"],
            ['id_prov' => '7', 'nama_kota' => "Kabupaten Seluma"],
            ['id_prov' => '7', 'nama_kota' => "Kota Bengkulu"],
            ['id_prov' => '8', 'nama_kota' => "Kabupaten Banyuasin"],
            ['id_prov' => '8', 'nama_kota' => "Kabupaten Empat Lawang"],
            ['id_prov' => '8', 'nama_kota' => "Kabupaten Lahat"],
            ['id_prov' => '8', 'nama_kota' => "Kabupaten Muara Enim"],
            ['id_prov' => '8', 'nama_kota' => "Kabupaten Musi Banyuasin"],
            ['id_prov' => '8', 'nama_kota' => "Kabupaten Musi Rawas"],
            ['id_prov' => '8', 'nama_kota' => "Kabupaten Musi Rawas Utara"],
            ['id_prov' => '8', 'nama_kota' => "Kabupaten Ogan Ilir"],
            ['id_prov' => '8', 'nama_kota' => "Kabupaten Ogan Komering Ilir"],
            ['id_prov' => '8', 'nama_kota' => "Kabupaten Ogan Komering Ulu"],
            ['id_prov' => '8', 'nama_kota' => "Kabupaten Ogan Komering Ulu Selatan"],
            ['id_prov' => '8', 'nama_kota' => "Kabupaten Ogan Komering Ulu Timur"],
            ['id_prov' => '8', 'nama_kota' => "Kabupaten Penukai Abab Lematang Ilir"],
            ['id_prov' => '8', 'nama_kota' => "Kota Lubuklinggau"],
            ['id_prov' => '8', 'nama_kota' => "Kota Pagar Alam"],
            ['id_prov' => '8', 'nama_kota' => "Kota Palembang"],
            ['id_prov' => '8', 'nama_kota' => "Kota Prabumulih"],
            ['id_prov' => '9', 'nama_kota' => "Kabupaten Bangka"],
            ['id_prov' => '9', 'nama_kota' => "Kabupaten Bangka Barat"],
            ['id_prov' => '9', 'nama_kota' => "Kabupaten Bangka Selatan"],
            ['id_prov' => '9', 'nama_kota' => "Kabupaten Bangka Tengah"],
            ['id_prov' => '9', 'nama_kota' => "Kabupaten Belitung"],
            ['id_prov' => '9', 'nama_kota' => "Kabupaten Belitung Timur"],
            ['id_prov' => '9', 'nama_kota' => "Kota Pangkal Pinang"],
            ['id_prov' => '10', 'nama_kota' => "Kabupaten Lampung Barat"],
            ['id_prov' => '10', 'nama_kota' => "Kabupaten Lampung Selatan"],
            ['id_prov' => '10', 'nama_kota' => "Kabupaten Lampung Tengah"],
            ['id_prov' => '10', 'nama_kota' => "Kabupaten Lampung Timur"],
            ['id_prov' => '10', 'nama_kota' => "Kabupaten Lampung Utara"],
            ['id_prov' => '10', 'nama_kota' => "Kabupaten Mesuji"],
            ['id_prov' => '10', 'nama_kota' => "Kabupaten Pesawaran"],
            ['id_prov' => '10', 'nama_kota' => "Kabupaten Pesisir Barat"],
            ['id_prov' => '10', 'nama_kota' => "Kabupaten Pringsewu"],
            ['id_prov' => '10', 'nama_kota' => "Kabupaten Tanggamus"],
            ['id_prov' => '10', 'nama_kota' => "Kabupaten Tulang Bawang"],
            ['id_prov' => '10', 'nama_kota' => "Kabupaten Tulang Bawang Barat"],
            ['id_prov' => '10', 'nama_kota' => "Kabupaten Way Kanan"],
            ['id_prov' => '10', 'nama_kota' => "Kota Bandar Lampung"],
            ['id_prov' => '10', 'nama_kota' => "Kota Metro"],
            ['id_prov' => '11', 'nama_kota' => "Kabupaten Lebak"],
            ['id_prov' => '11', 'nama_kota' => "Kabupaten Pandeglang"],
            ['id_prov' => '11', 'nama_kota' => "Kabupaten Serang"],
            ['id_prov' => '11', 'nama_kota' => "Kabupaten Tangerang"],
            ['id_prov' => '11', 'nama_kota' => "Kota Cilegon"],
            ['id_prov' => '11', 'nama_kota' => "Kota Serang"],
            ['id_prov' => '11', 'nama_kota' => "Kota Tangerang"],
            ['id_prov' => '11', 'nama_kota' => "Kota Tangerang Selatan"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Bandung"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Bandung Barat"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Bekasi"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Bogor"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Ciamis"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Cianjur"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Cirebon"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Garut"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Indramayu"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Karawang"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Kuningan"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Majalengka"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Pangandaran"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Purwakarta"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Subang"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Sukabumi"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Sumedang"],
            ['id_prov' => '13', 'nama_kota' => "Kabupaten Tasikmalaya"],
            ['id_prov' => '13', 'nama_kota' => "Kota Bandung"],
            ['id_prov' => '13', 'nama_kota' => "Kota Banjar"],
            ['id_prov' => '13', 'nama_kota' => "Kota Bekasi"],
            ['id_prov' => '13', 'nama_kota' => "Kota Bogor"],
            ['id_prov' => '13', 'nama_kota' => "Kota Cimahi"],
            ['id_prov' => '13', 'nama_kota' => "Kota Cirebon"],
            ['id_prov' => '13', 'nama_kota' => "Kota Depok"],
            ['id_prov' => '13', 'nama_kota' => "Kota Sukabumi"],
            ['id_prov' => '13', 'nama_kota' => "Kota Tasikmalaya"],
            ['id_prov' => '12', 'nama_kota' => "Kabupaten Adminitrasi Kepulauan Seribu"],
            ['id_prov' => '12', 'nama_kota' => "Kota Administrasi Jakarta Barat"],
            ['id_prov' => '12', 'nama_kota' => "Kota Administrasi Jakarta Pusat"],
            ['id_prov' => '12', 'nama_kota' => "Kota Administrasi Jakarta Selatan"],
            ['id_prov' => '12', 'nama_kota' => "Kota Administrasi Jakarta Timur"],
            ['id_prov' => '12', 'nama_kota' => "Kota Administrasi Jakarta Utara"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Banjarnegara"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Banyumas"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Batang"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Blora"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Boyolali"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Brebes"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Cilacap"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Demak"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Grobogan"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Jepara"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Karanganyar"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Kebumen"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Kendal"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Klaten"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Kudus"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Magelang"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Pati"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Pekalongan"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Pemalang"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Purbalingga"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Purworejo"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Rembang"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Semarang"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Sragen"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Sukoharjo"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Tegal"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Temanggung"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Wonogiri"],
            ['id_prov' => '14', 'nama_kota' => "Kabupaten Wonosobo"],
            ['id_prov' => '14', 'nama_kota' => "Kota Magelang"],
            ['id_prov' => '14', 'nama_kota' => "Kota Pekalongan"],
            ['id_prov' => '14', 'nama_kota' => "Kota Salatiga"],
            ['id_prov' => '14', 'nama_kota' => "Kota Semarang"],
            ['id_prov' => '14', 'nama_kota' => "Kota Surakarta"],
            ['id_prov' => '14', 'nama_kota' => "Kota Tegal"],
            ['id_prov' => '16', 'nama_kota' => "Kabupaten Bantul"],
            ['id_prov' => '16', 'nama_kota' => "Kabupaten Gunungkidul"],
            ['id_prov' => '16', 'nama_kota' => "Kabupaten Kulon Progo"],
            ['id_prov' => '16', 'nama_kota' => "Kabupaten Sleman"],
            ['id_prov' => '16', 'nama_kota' => "Kota Yogyakarta"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Bangkalan"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Banyuwangi"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Blitar"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Bojonegoro"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Bondowoso"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Gresik"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Jember"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Jombang"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Kediri"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Lamongan"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Lumajang"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Madiun"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Magetan"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Malang"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Mojokerto"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Nganjuk"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Ngawi"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Pacitan"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Pamekasan"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Pasuruan"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Ponorogo"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Probolinggo"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Sampang"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Sidoarjo"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Situbondo"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Sumenep"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Trenggalek"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Tuban"],
            ['id_prov' => '15', 'nama_kota' => "Kabupaten Tulungagung"],
            ['id_prov' => '15', 'nama_kota' => "Kota Batu"],
            ['id_prov' => '15', 'nama_kota' => "Kota Blitar"],
            ['id_prov' => '15', 'nama_kota' => "Kota Kediri"],
            ['id_prov' => '15', 'nama_kota' => "Kota Madiun"],
            ['id_prov' => '15', 'nama_kota' => "Kota Malang"],
            ['id_prov' => '15', 'nama_kota' => "Kota Mojokerto"],
            ['id_prov' => '15', 'nama_kota' => "Kota Pasuruan"],
            ['id_prov' => '15', 'nama_kota' => "Kota Probolinggo"],
            ['id_prov' => '15', 'nama_kota' => "Kota Surabaya"],
            ['id_prov' => '17', 'nama_kota' => "Kabupaten Badung"],
            ['id_prov' => '17', 'nama_kota' => "Kabupaten Bangil"],
            ['id_prov' => '17', 'nama_kota' => "Kabupaten Buleleng"],
            ['id_prov' => '17', 'nama_kota' => "Kabupaten Gianyar"],
            ['id_prov' => '17', 'nama_kota' => "Kabupaten Jembrana"],
            ['id_prov' => '17', 'nama_kota' => "Kabupaten Karangasem"],
            ['id_prov' => '17', 'nama_kota' => "Kabupaten Klungkung"],
            ['id_prov' => '17', 'nama_kota' => "Kabupaten Tabanan"],
            ['id_prov' => '17', 'nama_kota' => "Kota Denpasar"],
            ['id_prov' => '18', 'nama_kota' => "Kabupaten Bima"],
            ['id_prov' => '18', 'nama_kota' => "Kabupaten Dompu"],
            ['id_prov' => '18', 'nama_kota' => "Kabupaten Lombok Barat"],
            ['id_prov' => '18', 'nama_kota' => "Kabupaten Lombok Tengah"],
            ['id_prov' => '18', 'nama_kota' => "Kabupaten Lombok Timur"],
            ['id_prov' => '18', 'nama_kota' => "Kabupaten Lombok Utara"],
            ['id_prov' => '18', 'nama_kota' => "Kabupaten Sumbawa"],
            ['id_prov' => '18', 'nama_kota' => "Kabupaten Sumbawa Barat"],
            ['id_prov' => '18', 'nama_kota' => "Kota Bima"],
            ['id_prov' => '18', 'nama_kota' => "Kota Mataram"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Alor"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Belu"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Ende"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Flores Timur"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Kupang"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Lembata"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Malaka"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Manggarai"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Manggarai Barat"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Manggarai Timur"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Nagekeo"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Ngada"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Rote Ndao"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Sabu Raijua"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Sikka"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Sumba Barat"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Sumba Barat Daya"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Sumba Tengah"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Sumba Timur"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Timor Tengah Selatan"],
            ['id_prov' => '19', 'nama_kota' => "Kabupaten Timor Tengah Utara"],
            ['id_prov' => '19', 'nama_kota' => "Kota Kupang"],
            ['id_prov' => '20', 'nama_kota' => "Kabupaten Bengkayang"],
            ['id_prov' => '20', 'nama_kota' => "Kabupaten Kapuas Hulu"],
            ['id_prov' => '20', 'nama_kota' => "Kabupaten Kayong Utara"],
            ['id_prov' => '20', 'nama_kota' => "Kabupaten Ketapang"],
            ['id_prov' => '20', 'nama_kota' => "Kabupaten Kubu Raya"],
            ['id_prov' => '20', 'nama_kota' => "Kabupaten Landak"],
            ['id_prov' => '20', 'nama_kota' => "Kabupaten Melawi"],
            ['id_prov' => '20', 'nama_kota' => "Kabupaten Mempawah"],
            ['id_prov' => '20', 'nama_kota' => "Kabupaten Sambas"],
            ['id_prov' => '20', 'nama_kota' => "Kabupaten Sanggau"],
            ['id_prov' => '20', 'nama_kota' => "Kabupaten Sekadau"],
            ['id_prov' => '20', 'nama_kota' => "Kabupaten Sintang"],
            ['id_prov' => '20', 'nama_kota' => "Kota Pontianak"],
            ['id_prov' => '20', 'nama_kota' => "Kota Singkawang"],
            ['id_prov' => '21', 'nama_kota' => "Kabupaten Balangan"],
            ['id_prov' => '21', 'nama_kota' => "Kabupaten Banjar"],
            ['id_prov' => '21', 'nama_kota' => "Kabupaten Barito Kuala"],
            ['id_prov' => '21', 'nama_kota' => "Kabupaten Hulu Sungai Selatan"],
            ['id_prov' => '21', 'nama_kota' => "Kabupaten Hulu Sungai Tengah"],
            ['id_prov' => '21', 'nama_kota' => "Kabupaten Hulu Sungai Utara"],
            ['id_prov' => '21', 'nama_kota' => "Kabupaten Kotabaru"],
            ['id_prov' => '21', 'nama_kota' => "Kabupaten Tabalong"],
            ['id_prov' => '21', 'nama_kota' => "Kabupaten Tanah Bumbu"],
            ['id_prov' => '21', 'nama_kota' => "Kabupaten Tanah Laut"],
            ['id_prov' => '21', 'nama_kota' => "Kabupaten Tapin"],
            ['id_prov' => '21', 'nama_kota' => "Kota Banjarbaru"],
            ['id_prov' => '21', 'nama_kota' => "Kota Banjarmasin"],
            ['id_prov' => '22', 'nama_kota' => "Kabupaten Barito Selatan"],
            ['id_prov' => '22', 'nama_kota' => "Kabupaten Barito Timur"],
            ['id_prov' => '22', 'nama_kota' => "Kabupaten Barito Utara"],
            ['id_prov' => '22', 'nama_kota' => "Kabupaten Gunung Mas"],
            ['id_prov' => '22', 'nama_kota' => "Kabupaten Kapuas"],
            ['id_prov' => '22', 'nama_kota' => "Kabupaten Katingan"],
            ['id_prov' => '22', 'nama_kota' => "Kabupaten Kotawaringin Barat"],
            ['id_prov' => '22', 'nama_kota' => "Kabupaten Kotawaringin Timur"],
            ['id_prov' => '22', 'nama_kota' => "Kabupaten Lamandau"],
            ['id_prov' => '22', 'nama_kota' => "Kabupaten Murung Raya"],
            ['id_prov' => '22', 'nama_kota' => "Kabupaten Pulang Pisau"],
            ['id_prov' => '22', 'nama_kota' => "Kabupaten Sukamara"],
            ['id_prov' => '22', 'nama_kota' => "Kabupaten Seruyan"],
            ['id_prov' => '22', 'nama_kota' => "Kota Palangka Raya"],
            ['id_prov' => '23', 'nama_kota' => "Kabupaten Berau"],
            ['id_prov' => '23', 'nama_kota' => "Kabupaten Kutai Barat"],
            ['id_prov' => '23', 'nama_kota' => "Kabupaten Kutai Kartanegara"],
            ['id_prov' => '23', 'nama_kota' => "Kabupaten Kutai Timur"],
            ['id_prov' => '23', 'nama_kota' => "Kabupaten Mahakam Ulu"],
            ['id_prov' => '23', 'nama_kota' => "Kabupaten Paser"],
            ['id_prov' => '23', 'nama_kota' => "Kabupaten Penajam Paser Utara"],
            ['id_prov' => '23', 'nama_kota' => "Kota Balikpapan"],
            ['id_prov' => '23', 'nama_kota' => "Kota Bontang"],
            ['id_prov' => '23', 'nama_kota' => "Kota Samarinda"],
            ['id_prov' => '24', 'nama_kota' => "Kabupaten Bulungan"],
            ['id_prov' => '24', 'nama_kota' => "Kabupaten Malinau"],
            ['id_prov' => '24', 'nama_kota' => "Kabupaten Nunukan"],
            ['id_prov' => '24', 'nama_kota' => "Kabupaten Tana Tidung"],
            ['id_prov' => '24', 'nama_kota' => "Kota Tarakan"],
            ['id_prov' => '29', 'nama_kota' => "Kabupaten Bolaang Mongondow"],
            ['id_prov' => '29', 'nama_kota' => "Kabupaten Bolaang Mongondow Selatan"],
            ['id_prov' => '29', 'nama_kota' => "Kabupaten Bolaang Mongondow Timur"],
            ['id_prov' => '29', 'nama_kota' => "Kabupaten Bolaang Mongondow Utara"],
            ['id_prov' => '29', 'nama_kota' => "Kabupaten Kepulauan Sangihe"],
            ['id_prov' => '29', 'nama_kota' => "Kabupaten Kepulauan Siau Tagulandang Biaro"],
            ['id_prov' => '29', 'nama_kota' => "Kabupaten Kepulauan Talaud"],
            ['id_prov' => '29', 'nama_kota' => "Kabupaten Minahasa"],
            ['id_prov' => '29', 'nama_kota' => "Kabupaten Minahasa Selatan"],
            ['id_prov' => '29', 'nama_kota' => "Kabupaten Minahasa Tenggara"],
            ['id_prov' => '29', 'nama_kota' => "Kabupaten Minahasa Utara"],
            ['id_prov' => '29', 'nama_kota' => "Kota Bitung"],
            ['id_prov' => '29', 'nama_kota' => "Kota Kotamobagu"],
            ['id_prov' => '29', 'nama_kota' => "Kota Manado"],
            ['id_prov' => '29', 'nama_kota' => "Kota Tomohon"],
            ['id_prov' => '25', 'nama_kota' => "Kabupaten Boalemo"],
            ['id_prov' => '25', 'nama_kota' => "Kabupaten Bone Bolango"],
            ['id_prov' => '25', 'nama_kota' => "Kabupaten Gorontalo"],
            ['id_prov' => '25', 'nama_kota' => "Kabupaten Gorontalo Utara"],
            ['id_prov' => '25', 'nama_kota' => "Kabupaten Pohuwato"],
            ['id_prov' => '25', 'nama_kota' => "Kota Gorontalo"],
            ['id_prov' => '28', 'nama_kota' => "Kabupaten Banggai"],
            ['id_prov' => '28', 'nama_kota' => "Kabupaten Banggai Kepulauan"],
            ['id_prov' => '28', 'nama_kota' => "Kabupaten Banggai Laut"],
            ['id_prov' => '28', 'nama_kota' => "Kabupaten Buol"],
            ['id_prov' => '28', 'nama_kota' => "Kabupaten Donggala"],
            ['id_prov' => '28', 'nama_kota' => "Kabupaten Morowali Utara"],
            ['id_prov' => '28', 'nama_kota' => "Kabupaten Parigi Moutong"],
            ['id_prov' => '28', 'nama_kota' => "Kabupaten Poso"],
            ['id_prov' => '28', 'nama_kota' => "Kabupaten Sigi"],
            ['id_prov' => '28', 'nama_kota' => "Kabupaten Tojo Una-Una"],
            ['id_prov' => '28', 'nama_kota' => "Kabupaten Tolitoli"],
            ['id_prov' => '28', 'nama_kota' => "Kota Palu"],
            ['id_prov' => '30', 'nama_kota' => "Kabupaten Majene"],
            ['id_prov' => '30', 'nama_kota' => "Kabupaten Mamasa"],
            ['id_prov' => '30', 'nama_kota' => "Kabupaten Mamuju"],
            ['id_prov' => '30', 'nama_kota' => "Kabupaten Mamuju Tengah"],
            ['id_prov' => '30', 'nama_kota' => "Kabupaten Pasangkayu"],
            ['id_prov' => '30', 'nama_kota' => "Kabupaten Polewali Mandar"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Bantaeng"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Barru"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Bone"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Bulukmba"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Enrekang"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Gowa"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Jeneponto"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Kepulauan Selayar"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Luwu"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Luwu Timur"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Luwu Utara"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Maros"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Pangkajene dan Kepulauan"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Pinrang"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Sidenreng Rappang"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Sinjai"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Soppeng"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Takalar"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Tana Toraja"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Toraja Utara"],
            ['id_prov' => '26', 'nama_kota' => "Kabupaten Wajo"],
            ['id_prov' => '26', 'nama_kota' => "Kota Makassar"],
            ['id_prov' => '26', 'nama_kota' => "Kota Palopo"],
            ['id_prov' => '26', 'nama_kota' => "Kota Parepare"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Bombana"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Buton"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Buton Selatan"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Buton Tengah"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Buton Utara"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Kolaka"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Kolaka Timur"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Kolaka Utara"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Konawe"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Konawe Kepulauan"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Konawe Selatan"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Konawe Utara"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Muna"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Muna Barat"],
            ['id_prov' => '27', 'nama_kota' => "Kabupaten Wakatobi"],
            ['id_prov' => '27', 'nama_kota' => "Kota Baubau"],
            ['id_prov' => '27', 'nama_kota' => "Kota Kendari"],
            ['id_prov' => '31', 'nama_kota' => "Kabupaten Buru"],
            ['id_prov' => '31', 'nama_kota' => "Kabupaten Buru Selatan"],
            ['id_prov' => '31', 'nama_kota' => "Kabupaten Kepulauan Aru"],
            ['id_prov' => '31', 'nama_kota' => "Kabupaten Kepulauan Tanimbar"],
            ['id_prov' => '31', 'nama_kota' => "Kabupaten Maluku Barat Daya"],
            ['id_prov' => '31', 'nama_kota' => "Kabupaten Maluku Tengah"],
            ['id_prov' => '31', 'nama_kota' => "Kabupaten Maluku Tenggara"],
            ['id_prov' => '31', 'nama_kota' => "Kabupaten Seram Bagian Barat"],
            ['id_prov' => '31', 'nama_kota' => "Kabupaten Seram Bagian Timur"],
            ['id_prov' => '31', 'nama_kota' => "Kota Ambon"],
            ['id_prov' => '31', 'nama_kota' => "Kota Tuai"],
            ['id_prov' => '32', 'nama_kota' => "Kabupaten Halmahera Barat"],
            ['id_prov' => '32', 'nama_kota' => "Kabupaten Halmahera Tengah"],
            ['id_prov' => '32', 'nama_kota' => "Kabupaten Halmahera Timur"],
            ['id_prov' => '32', 'nama_kota' => "Kabupaten Halmahera Selatan"],
            ['id_prov' => '32', 'nama_kota' => "Kabupaten Halmahera Utara"],
            ['id_prov' => '32', 'nama_kota' => "Kabupaten Kepulauan Sula"],
            ['id_prov' => '32', 'nama_kota' => "Kabupaten Pulau Morotai"],
            ['id_prov' => '32', 'nama_kota' => "Kabupaten Pulau Taliabu"],
            ['id_prov' => '32', 'nama_kota' => "Kota Ternate"],
            ['id_prov' => '32', 'nama_kota' => "Kota Tidore Kepulauan"],
            ['id_prov' => '33', 'nama_kota' => "Kabupaten Biak Numfor"],
            ['id_prov' => '33', 'nama_kota' => "Kabupaten Jayapura"],
            ['id_prov' => '33', 'nama_kota' => "Kabupaten Keerom"],
            ['id_prov' => '33', 'nama_kota' => "Kabupaten Kepulauan Yapen"],
            ['id_prov' => '33', 'nama_kota' => "Kabupaten Mamberamo Raya"],
            ['id_prov' => '33', 'nama_kota' => "Kabupaten Sarmi"],
            ['id_prov' => '33', 'nama_kota' => "Kabupaten Supiori"],
            ['id_prov' => '33', 'nama_kota' => "Kabupaten Waropen"],
            ['id_prov' => '33', 'nama_kota' => "Kota Jayapura"],
            ['id_prov' => '34', 'nama_kota' => "Kabupaten Fakfak"],
            ['id_prov' => '34', 'nama_kota' => "Kabupaten Kaimana"],
            ['id_prov' => '34', 'nama_kota' => "Kabupaten Manokwari"],
            ['id_prov' => '34', 'nama_kota' => "Kabupaten Manokwari Selatan"],
            ['id_prov' => '34', 'nama_kota' => "Kabupaten Maybrat"],
            ['id_prov' => '34', 'nama_kota' => "Kabupaten Pegunungan Arfak"],
            ['id_prov' => '34', 'nama_kota' => "Kabupaten Raja Ampat"],
            ['id_prov' => '34', 'nama_kota' => "Kabupaten Sorong"],
            ['id_prov' => '34', 'nama_kota' => "Kabupaten Sorong Selatan"],
            ['id_prov' => '34', 'nama_kota' => "Kabupaten Tambrawu"],
            ['id_prov' => '34', 'nama_kota' => "Kabupaten Teluk Bintuni"],
            ['id_prov' => '34', 'nama_kota' => "Kabupaten Teluk Wondama"],
            ['id_prov' => '34', 'nama_kota' => "Kota Sorong"],
            ['id_prov' => '36', 'nama_kota' => "Kabupaten Jayawijaya"],
            ['id_prov' => '36', 'nama_kota' => "Kabupaten Lanny Jaya"],
            ['id_prov' => '36', 'nama_kota' => "Kabupaten Mamberamo Tengah"],
            ['id_prov' => '36', 'nama_kota' => "Kabupaten Nduga"],
            ['id_prov' => '36', 'nama_kota' => "Kabupaten Pegunungan Bintang"],
            ['id_prov' => '36', 'nama_kota' => "Kabupaten Tolikara"],
            ['id_prov' => '36', 'nama_kota' => "Kabupaten Yalimo"],
            ['id_prov' => '36', 'nama_kota' => "Kabupaten Yahukimo"],
            ['id_prov' => '37', 'nama_kota' => "Kabupaten Asmat"],
            ['id_prov' => '37', 'nama_kota' => "Kabupaten Boven Digoel"],
            ['id_prov' => '37', 'nama_kota' => "Kabupaten Mappi"],
            ['id_prov' => '37', 'nama_kota' => "Kabupaten Merauke"],
            ['id_prov' => '35', 'nama_kota' => "Kabupaten Deiyai"],
            ['id_prov' => '35', 'nama_kota' => "Kabupaten Dogiyai"],
            ['id_prov' => '35', 'nama_kota' => "Kabupaten Intan Jaya"],
            ['id_prov' => '35', 'nama_kota' => "Kabupaten Mimka"],
            ['id_prov' => '35', 'nama_kota' => "Kabupaten Nabire"],
            ['id_prov' => '35', 'nama_kota' => "Kabupaten Paniai"],
            ['id_prov' => '35', 'nama_kota' => "Kabupaten Puncak"],
            ['id_prov' => '35', 'nama_kota' => "Kabupaten Puncak Jaya"],

        ];

        foreach ($cities as $city) {
            District::factory()->create($city);
        }
    }
}