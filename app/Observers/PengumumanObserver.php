<?php

namespace App\Observers;

use App\Models\pengumuman;

class PengumumanObserver
{
    /**
     * Handle the pengumuman "created" event.
     *
     * @param  \App\Models\pengumuman  $pengumuman
     * @return void
     */
    public function created(pengumuman $pengumuman)
    {
        //
    }

    /**
     * Handle the pengumuman "updated" event.
     *
     * @param  \App\Models\pengumuman  $pengumuman
     * @return void
     */
    public function updated(pengumuman $pengumuman)
    {
        //
    }

    /**
     * Handle the pengumuman "deleted" event.
     *
     * @param  \App\Models\pengumuman  $pengumuman
     * @return void
     */
    public function deleting(pengumuman $pengumuman)
    {
        // foreach($pengumuman->siswas as $siswa){

        // if (file_exists(public_path('fotosiswa/' . $siswa->foto_struktur))) {
        //     unlink(public_path('fotosiswa/' . $siswa->foto_struktur));
        // }
        // $siswa->delete();
        // }
    }   

    /**
     * Handle the pengumuman "restored" event.
     *
     * @param  \App\Models\pengumuman  $pengumuman
     * @return void
     */
    public function restored(pengumuman $pengumuman)
    {
        //
    }

    /**
     * Handle the pengumuman "force deleted" event.
     *
     * @param  \App\Models\pengumuman  $pengumuman
     * @return void
     */
    public function forceDeleted(pengumuman $pengumuman)
    {
        //
    }
}
