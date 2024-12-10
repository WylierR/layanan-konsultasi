<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Form;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\FormSubmittedNotification;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class FormController extends Controller
{
    public function tampil()
    {
        $max_data = 5;
        $form = Form::orderBy('created_at', 'desc')->paginate($max_data);



        return view('admin.dashboard', compact('form'));
    }
    public function tambah()
    {
        return view('form.form');
    }

    public function submit(Request $request)
    {
        $tanggal = Carbon::createFromFormat('d/m/Y', $request->input('tanggal'))->format('Y-m-d');

        $form = new Form();
        $form->email = $request->email;
        $form->nama = $request->nama;
        $form->jabatan = $request->jabatan;
        $form->instansi = $request->instansi;
        $form->nomor_telepon = $request->nomor_telepon;
        $form->jenis_layanan = $request->jenis_layanan;
        $form->pilih_layanan = $request->pilih_layanan;
        $form->tanggal = $tanggal;
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


        return redirect()->route('submit.message')->with('success', 'Permohonan ada telah dikirim.');
    }

    public function detail($id)
    {
        $form = Form::find($id);
        return view('admin.detail', compact('form'));
    }

    public function jadwal()
    {
        $max_data = 5;
        $form = Form::orderBy('created_at', 'desc')->paginate($max_data);

        return view('admin.jadwal', compact('form'));
    }
    public function markasread()
    {
        $user = Auth::user();

        foreach ($user->unreadNotifications as $notification) {
            $notification->markAsRead();

            $formId = $notification->data['form_id'];
            return redirect()->route('form.detail', $formId);
        }
        return redirect()->back()->with('error', 'Notification not found');
    }
    public function addbidang(Request $request, $id)
    {
        $form = Form::find($id);
        $form->bidang = $request->input('bidang');

        $form->update();
        return redirect()->back()->with('success', 'Tambah Bidang Berhasil');
    }

    public function sosialbudaya()
    {
        $max_data = 5;
        $form = Form::orderBy('created_at', 'desc')->paginate($max_data);

        return view('admin.sosialbudaya', compact('form'));
    }
}
