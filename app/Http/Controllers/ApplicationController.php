<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Applicant;
use App\Models\Application;
use App\Models\LokasiTujuan;
use Illuminate\Http\Request;
use App\Models\ApplicationType;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ApplicationRequest;
use App\Models\AddOnApplicant;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // DB::enableQueryLog();
        // dd(DB::getQueryLog());
        $id_user = Auth::user()->id;
        $applications = Application::with(['type'])->where('id_user', $id_user)->orderByRaw('tanggal_permohonan DESC')->get();
        $data = Applicant::with(['user'])->findOrNew($id_user);
        $timenow = Carbon::now()->toDateTimeString();
        // dd($data->id_user);
        return view(
            'pages.permohonan.index',
            [
                'applications' => $applications,
                'timenow' => $timenow,
                'data' => $data,
            ]
        );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = ApplicationType::all();
        $lokasi = LokasiTujuan::all()->sortBy('lokasi_tujuan');
        $id_user = Auth::user()->id;
        $data = Applicant::with(['user'])->findOrNew($id_user);
        if ($data->id_user != null) {
            return view('pages.permohonan.create', [
                'types' => $type,
                'data' => $data,
                'lokasis' => $lokasi
            ]);
        } else {
            abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenis_permohonan' => ['required'],
            'no_surat' => ['required', 'min:5', 'max:255', 'string'],
            'asal_surat' => ['required', 'min:5', 'max:255', 'string'],
            'lokasi_penelitian' => ['required'],
            'tgl_surat' => ['required'],
            'keperluan_pemohon' => ['required', 'min:5'],
            'judul_penelitian' => ['required', 'min:5'],
            'waktu_awal' => ['required'],
            'waktu_akhir' => ['required'],
            'file_pengantar'     => ['required', 'file', 'mimes:pdf', 'max:712'],
            'file_proposal'     => ['required', 'file', 'mimes:pdf', 'max:3072']
        ], [
            'jenis_permohonan.required' => 'Jenis Permohonan Wajib dipilih',
            'no_surat.required' => 'Nomor Surat Wajib diisi',
            'no_surat.min' => 'Nomor Surat berisi mainimal 5 karakter',
            'no_surat.max' => 'Nomor Surat berisi maksimal 255 karakter',
            'asal_surat.required' => 'Asal Surat Wajib diisi',
            'asal_surat.min' => 'Asal Surat berisi mainimal 5 karakter',
            'asal_surat.max' => 'Asal Surat berisi maksimal 255 karakter',
            'lokasi_penelitian.required' => 'Lokasi Wajib diisi',
            'tgl_surat.required' => 'Tanggal Surat Wajib diisi',
            'keperluan_pemohon.required' => 'Keperluan Pemohon Wajib diisi',
            'keperluan_pemohon.min' => 'Keperluan Pemohon berisi minimal 5 karakter',
            'judul_penelitian.required' => 'Form Jenis data atau Judul Penelitian Wajib diisi',
            'judul_penelitian.min' => 'Form Jenis data atau Judul Penelitian berisi minimal 5 karakter',
            'waktu_awal.required' => 'Tanggal Awal  Wajib diisi',
            'waktu_akhir.required' => 'Tanggal Akhir Wajib diisi',
            'file_pengantar.required' => 'File Surat Pengantar Wajib diisi',
            'file_pengantar.file' => 'File Surat Pengantar harus berupa file',
            'file_pengantar.mimes' => 'File Surat Pengantar harus berupa file berformat pdf',
            'file_pengantar.max' => 'File Surat Pengantar harus tidak boleh lebih dari 700 KB',
            'file_proposal.required' => 'File Proposal Wajib diisi',
            'file_proposal.file' => 'File Proposal harus berupa file',
            'file_proposal.mimes' => 'File Proposal harus berupa file berformat pdf',
            'file_proposal.max' => 'File Proposal harus tidak boleh lebih dari 3 MB',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->getMessageBag()->all()[0])->withInput();
        } else {
            $surat = $request->file('file_pengantar')->getClientOriginalName();
            $name_surat_original = pathinfo($surat, PATHINFO_FILENAME);
            $surat_pengantar_enc = md5(sha1(bcrypt(Auth::user()->id . '' . $request->file('file_pengantar'))));
            $file_ext_surat = $request->file('file_pengantar')->guessExtension();
            $file_pengantar =  $request->file('file_pengantar')->storeAs(
                'assets/upload/file/surat-pengantar',
                $name_surat_original . '-' . $surat_pengantar_enc . '.' . $file_ext_surat,
                'public'
            );

            $proposal = $request->file('file_proposal')->getClientOriginalName();
            $name_proposal_original = pathinfo($proposal, PATHINFO_FILENAME);
            $proposal_penelitian_enc = md5(sha1(bcrypt(Auth::user()->id . '' . $request->file('file_proposal'))));
            $file_ext_proposal = $request->file('file_proposal')->guessExtension();
            $file_proposal = $request->file('file_proposal')->storeAs(
                'assets/upload/file/proposal',
                $name_proposal_original . '-' . $proposal_penelitian_enc . '.' . $file_ext_proposal,
                'public'
            );
            $data = [
                'kode_permohonan' => kodepermohonan(),
                'id_user' => Auth::user()->id,
                'id_applicant' => $request->applicant,
                'jenis_permohonan' => $request->jenis_permohonan,
                'no_surat' => $request->no_surat,
                'asal_surat' => $request->asal_surat,
                'lokasi_tujuan' => json_encode($request->lokasi_penelitian),
                'tgl_surat' => Carbon::createFromFormat('d/m/Y', $request->tgl_surat)->format('Y-m-d'),
                'keperluan' => $request->keperluan_pemohon,
                'judul_rencana_penelitian' => $request->judul_penelitian,
                'waktu_awal' => Carbon::createFromFormat('d/m/Y', $request->waktu_awal)->format('Y-m-d'),
                'waktu_akhir' => Carbon::createFromFormat('d/m/Y', $request->waktu_akhir)->format('Y-m-d'),
                'tanggal_permohonan' => Carbon::now()->format('Y-m-d h:i:s'),
                'file_surat_pemohon'     => $file_pengantar,
                'file_proposal_pemohon'     => $file_proposal,
                'status_permohonan' => 'Kirim',
                'update_waktu_status' => Carbon::now()->format('Y-m-d h:i:s'),

            ];
            // dd($request->dataApplicants);
            $app = Application::create($data);
            // foreach ($request->dataApplicants as $applicant) {
            //     $arr = array(
            //         'nama_pemohon' => $applicant['nama_pemohon'],
            //         'nim' => $applicant['nim'],
            //         'nik' => $applicant['nik'],
            //         'no_hp' => $applicant['no_hp'],
            //     );
            // }
            // dd($arr);

            // $app->applicant->
            // $applicantArr = [];
            // $dataApp = [];
            // $dataApplicant = $request->dataApplicants;
            // for ($i = 0; $i < count($dataApplicant); $i++) {
            //     $dataApp[] = [
            //         'nama_pemohon' => $dataApplicant['nama_pemohon'][$i],
            //         'nim' => $dataApplicant['nim_pemohon'][$i],
            //         'nik' => $dataApplicant['nik'][$i],
            //         'no_hp' => $dataApplicant['no_hp'][$i],
            //     ];
            // }
            // DB::table('add_on_applicants')->insert($dataApp);
            // $skillModels=[]
            // foreach ($request->dataApplicants as $applicant) {
            //     $app->addonapplicant()->saveMany([
            //         ['nama_pemohon' => $applicant['nama_pemohon']],
            //         ['nim' => $applicant['nim_pemohon']],
            //         ['nik' => $applicant['nik']],
            //         ['no_hp' => $applicant['no_hp']],
            //     ]);
            // }
            $appData = [];
            foreach ($request->dataApplicants as $applicant) {
                $appData[] = new AddOnApplicant($applicant);
            }
            $app->addonapplicant()->saveMany($appData);
            // $applicantArr[] = new Application($applicant);
            // $app->addonapplicant()->attach([
            //     'nama_pemohon' => $applicant['nama_pemohon'],
            //     'nim' => $applicant['nim'],
            //     'nik' => $applicant['nik'],
            //     'no_hp' => $applicant['no_hp'],
            // ]);
            // }
            // $app->addonapplicant()->createMany($applicantArr);

            return redirect()->route('permohonan.index')->with(['success' => 'Permohonan berhasil dikirim!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = ApplicationType::all();
        $app = Application::with(['applicant', 'user', 'type'])->findOrFail($id);

        // dd($app);
        return view('pages.permohonan.edit', [
            'types' => $types,
            'app' => $app,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {
        $item = Application::findOrFail($id);
        if (Storage::disk('local')->exists('public/' . $item->file_surat_pemohon) || Storage::disk('local')->exists('public/' . $item->file_proposal_pemohon)) {
            $validator = Validator::make($request->all(), [
                'jenis_permohonan' => 'required',
                'keperluan_pemohon' => 'required|min:5',
                'judul_penelitian' => 'required|min:5',
                'waktu_awal' => 'required',
                'waktu_akhir' => 'required',
                'file_pengantar'     => 'file|mimes:pdf,jpg,png,jpeg|max:712',
                'file_proposal'     => 'file|mimes:pdf,jpg,png,jpeg|max:2048'
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'jenis_permohonan' => 'required',
                'keperluan_pemohon' => 'required|min:5',
                'judul_penelitian' => 'required|min:5',
                'waktu_awal' => 'required',
                'waktu_akhir' => 'required',
                'file_pengantar'     => 'required|file|mimes:pdf|max:712',
                'file_proposal'     => 'required|file|mimes:pdf|max:2048'
            ]);
        }
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->getMessageBag()->all()[0])->withInput();
        } else {

            if (!empty($request->file('file_pengantar'))) {
                $surat = $request->file('file_pengantar')->getClientOriginalName();
                $name_surat_original = pathinfo($surat, PATHINFO_FILENAME);
                $surat_pengantar_enc = md5(sha1(bcrypt(Auth::user()->id . '' . $request->file('file_pengantar'))));
                $file_ext_surat = $request->file('file_pengantar')->guessExtension();
                $file_pengantar =  $request->file('file_pengantar')->storeAs(
                    'assets/upload/file/surat-pengantar',
                    $name_surat_original . '-' . $surat_pengantar_enc . '.' . $file_ext_surat,
                    'public'
                );
                try {
                    Storage::disk('local')->delete('public/' . $item->file_surat_pemohon);
                } catch (\Throwable $th) {
                    return $th->getMessage();
                }
            } else {
                $file_pengantar = $item->file_surat_pemohon;
            }
            if (!empty($request->file('file_proposal'))) {
                $proposal = $request->file('file_proposal')->getClientOriginalName();
                $name_proposal_original = pathinfo($proposal, PATHINFO_FILENAME);
                $proposal_penelitian_enc = md5(sha1(bcrypt(Auth::user()->id . '' . $request->file('file_proposal'))));
                $file_ext_proposal = $request->file('file_proposal')->guessExtension();

                $file_proposal = $request->file('file_proposal')->storeAs(
                    'assets/upload/file/proposal',
                    $name_proposal_original . '-' . $proposal_penelitian_enc . '.' . $file_ext_proposal,
                    'public'
                );
                try {
                    Storage::disk('local')->delete('public/' . $item->file_proposal_pemohon);
                } catch (\Throwable $th) {
                    return $th->getMessage();
                }
            } else {

                $file_proposal = $item->file_proposal_pemohon;
            }
            $data = [
                'jenis_permohonan' => $request->jenis_permohonan,
                'keperluan' => $request->keperluan_pemohon,
                'judul_rencana_penelitian' => $request->judul_penelitian,
                'waktu_awal' => Carbon::createFromFormat('d/m/Y', $request->waktu_awal)->format('Y-m-d'),
                'waktu_akhir' => Carbon::createFromFormat('d/m/Y', $request->waktu_akhir)->format('Y-m-d'),
                'tanggal_permohonan' => Carbon::now()->format('Y-m-d h:i:s'),
                'file_surat_pemohon'     => $file_pengantar,
                'file_proposal_pemohon'     => $file_proposal,
                'status_permohonan' => 'Kirim',
                'update_waktu_status' => Carbon::now()->format('Y-m-d h:i:s'),
            ];
            $item->update($data);
            return redirect()->route('permohonan.index')->with(['warning' => 'Permohonan berhasil diubah!']);
        }
    }
    public function sanggah(request $request, $id)
    {
        echo 'Sanggah View';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Application::findOrFail($id);

        if ($data->delete() == true)
            return redirect()->route('permohonan.index')->with(['success' => 'Data berhasil dihapus!']);
        else {
            return redirect()->route('permohonan.index')->with(['error' => 'Data gagal dihapus!']);
        }
    }
}