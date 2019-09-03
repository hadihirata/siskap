
@extends('layout.page')

@section('title', $title)

@section('content')
    <div class="row">
      <div class="col-md-12">
        <h3>Daftar Pekerjaan</h3>

        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</button>
		<button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-copy"></i> Print</button>

        <table class="table mt-3">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col" style="width: 150px;">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                	<a href="" class="badge badge-success"><i class="fa fa-pencil"></i> Edit</a>
                	<a href="" class="badge badge-danger"><i class="fa fa-trash"></i> Delete</a>
                </td>
              </tr>
              
            </tbody>
          </table>

      </div>
    </div>
@endsection
