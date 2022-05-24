<h2>Dosen</h2>
<div class="table-responsive">
<a href="?page=dosencreate" class="btn btn-primary mb-3"><span data-feather="plus"></span>Data Baru</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Dosen</th>
              <th scope="col">Handphone</th>
              <th scope="col">Email</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>
                  <a href="?page=dosenupdate&id=<?php echo $data['id'] ?>"class="badge bg-warning">
                  <span data-feather="edit"></span>
                  </a>
                  <a href="#" class="badge bg-danger">
                  <span data-feather="x-circle"></span>
                  </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>