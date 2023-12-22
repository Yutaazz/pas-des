<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\costumer;
use App\Repositories\Interfaces\costumerRepositoryInterface;


class CostumerController extends Controller
{
    private $costumerRepository;

    public function __construct(costumerRepositoryInterface $costumerRepository)
    {
        $this->costumerRepository = $costumerRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     **/
    public function index()
    {
        $costumers =  $this->costumerRepository->allcostumers();

        return view('costumers.index', compact('costumers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('costumers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kode' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:13',
            'alamat' => 'required|string|max:255',
        ]);

        $this->costumerRepository->storecostumer($data);

        return redirect()->route('costumers.index')->with('status-create', 'Data Kategori Berhasil Ditambahkan');
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
        $costumer = $this->costumerRepository->findcostumer($id);

        return view('costumers.edit', compact('costumer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:13',
            'alamat' => 'required|string|max:255',
        ]);

        $this->costumerRepository->updatecostumer($request->all(), $id);

        return redirect()->route('costumers.index')->with('status-edit', 'data kateori berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->costumerRepository->destroycostumer($id);

        return redirect()->route('costumers.index')->with('status-delete', 'data kategori berhasil dihapus');
    }
}
