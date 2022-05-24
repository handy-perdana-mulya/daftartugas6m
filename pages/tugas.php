<h2>Tugas</h2>
<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Tugas</th>
              <th scope="col">Matakuliah id</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Deadline</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
             include_once("../database/database.php");
             $database = new Database;
             $connection = $database->getConnection();
 
             $selectSQL = "SELECT * FROM tugas";
             $statement = $connection->prepare($selectSQL);
             $statement->execute();

             $no =1;      
             while ($data = $statement->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data['nama_tugas'] ?></td>
              <td><?php echo $data['matakuliah_id'] ?></td>
              <td><?php echo $data['keterangan'] ?></td>
              <td><?php echo $data['deadline'] ?></td>
              <td>
                  <a href="#" class="badge bg-warning">
                  <span data-feather="edit"></span>
                  </a>
                  <a href="#" class="badge bg-danger">
                  <span data-feather="x-circle"></span>
                  </a>
            </td>
            </tr>       
              <?php
             }
            
            ?>
          </tbody>
        </table>
      </div>