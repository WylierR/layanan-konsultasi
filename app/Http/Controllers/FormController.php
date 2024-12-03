<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\FormSubmittedNotification;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class FormController extends Controller
{
    function tampil()
    {
        $max_data = 5;
        $form = Form::paginate($max_data);

        $unreadNotifications = Auth::user()->unreadNotifications;

        return view('admin.dashboard', compact('form', 'unreadNotifications'));
    }
    function tambah()
    {
        return view('form.form');
    }

    function submit(Request $request)
    {
        $form = new Form();
        $form->email = $request->email;
        $form->nama = $request->nama;
        $form->jabatan = $request->jabatan;
        $form->instansi = $request->instansi;
        $form->nomor_telepon = $request->nomor_telepon;
        $form->jenis_layanan = $request->jenis_layanan;
        $form->pilih_layanan = $request->pilih_layanan;
        $form->tanggal = $request->tanggal;
        $form->waktu = $request->waktu;
        $form->permasalahan = $request->permasalahan;
        $form->link = $request->link;
        if ($request->hasFile('file')) {
            // Menyimpan file di storage Laravel dan mendapatkan path-nya
            $filePath = $request->file('file')->store('uploads', 'public');
            $form->file = $filePath; // Menyimpan path file di kolom `file`
        }
        $form->save();

        $admins = User::role('admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new FormSubmittedNotification($form));
        }


        return redirect()->route('form')->with('success', 'Permohonan ada telah dikirim.');
    }

    function detail($id)
    {
        $form = Form::find($id);
        return view('admin.detail', compact('form'));
    }
}
