@extends('template')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Dashboard | Pengajuan</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive table-striped">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No. WA</th>
                                <th>Surat Pengajuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No. WA</th>
                                <th>Surat Pengajuan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sintia Wulan</td>
                                <td>Edinburgh</td>
                                <td>0834****</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sari Putri</td>
                                <td>Tokyo</td>
                                <td>081***</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Putra Xean</td>
                                <td>San Francisco</td>
                                <td>0866**</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Andrin</td>
                                <td>Edinburgh</td>
                                <td>0896**</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Airi Satou</td>
                                <td>Tokyo</td>
                                <td>3083***</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Brielle Williamson</td>
                                <td>New York</td>
                                <td>0861***</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Xandiego</td>
                                <td>San Francisco</td>
                                <td>0859**</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Rhona Davidson</td>
                                <td>Tokyo</td>
                                <td>0855**</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>JRobert Fun</td>
                                <td>San Francisco</td>
                                <td>0839***</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Sonya Frost</td>
                                <td>Edinburgh</td>
                                <td>0823**</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Jena Gaines</td>
                                <td>London</td>
                                <td>0830**</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Quinn Flynn</td>
                                <td>Edinburgh</td>
                                <td>0822**</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Charde Marshall</td>
                                <td>San Francisco</td>
                                <td>0836**</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Hasan Kxile</td>
                                <td>London</td>
                                <td>0843**</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Tatyana Fitzpatrick</td>
                                <td>London</td>
                                <td>19</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Michael Silva</td>
                                <td>London</td>
                                <td>0866</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Paul Byrd</td>
                                <td>New York</td>
                                <td>0864**</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Gloria Little</td>
                                <td>New York</td>
                                <td>0859**</td>
                                <td>File Tersedia <button type="button" class="btn btn-success">Buka
                                </button></td>
                                <td><button type="button" class="btn btn-primary">Terima</button> <button type="button" class="btn btn-danger">Tolak</button></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection