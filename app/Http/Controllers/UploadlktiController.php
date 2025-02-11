<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uploadlkti;
use App\Models\orderlkti;
use Illuminate\Support\Facades\Mail;
use App\Mail\LktiSubmission;

use RealRashid\SweetAlert\Facades\Alert;

class UploadlktiController extends Controller
{
    public function upload(Request $request){
        $validemail = orderlkti::where('email', $request['email'])->first();
        if (!$validemail) { 
            return back()->withErrors(['email' => 'Email Not Registered. Please Register first.'])->withInput();
        }
        if ($validemail->status !== 'Paid' && $validemail->status !== 'Khusus') {
            return back()->withErrors(['email' => 'Email Not able to UPLOAD, Pay First. '])->withInput();
        }
        $uploadlkti = $request->validate([
            'nama' => 'required|string|max:50',
            'email' => 'required|email',
            'instansi' => 'required|string|max:50',
            'judul' => 'required|string|max:50',
            'tema' => 'required|string|max:50',
            'naskah' => 'required|mimes:pdf|max:5000',
        ]);
        
        $uploadlkti = $request->all();
        if($request->hasFile('naskah'))
        {
            $destination_path = 'public/document/lkti/naskah';
            $image = $request->file('naskah');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('naskah')->storeAS($destination_path,$image_name);
            $imageUrl = asset('storage/document/lkti/naskah/' . $image_name);

            $uploadlkti['naskah'] = $imageUrl;

        }
        $uploadlkti = uploadlkti::create($uploadlkti);
        Mail::to($request['email'])->send(new LktiSubmission($uploadlkti));
        session()->flash('success', 'Terimakasih!, Tunggu Informasi Selanjutnya dari kami');
        return redirect()->route('utama');
    }
}
