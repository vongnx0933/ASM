<main id="main" class="main">
    <div class="pagetitle">
        <h1>Cập nhập danh mục</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                <li class="breadcrumb-item active">Cập nhập danh mục</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="row">
        <form action="?act=updatedm" method="post" enctype="multipart/form-data">
            <input type="text" name="catalog_name" value="<?=$dmone['catalog_name']?>">
            <input type="hidden" name="id" value=" <?=$dmone['id']?>">
            <input type=" text" name="stt" value=" <?=$dmone['stt']?>">
            <input type="submit" value="Cập nhập" name="edit">
        </form>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card top-selling overflow-auto">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Danh Sách Danh Mục </h5>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col">Số thự tự</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                foreach($dsdm as $set ):
                                    $xoa ="<a href='admin.php?act=qldm&del=".$set['id']."'>Delete</a>";
                                    
                             echo  " <tr>
                                    <td>".$set['id']."</td>
                                    <td>".$set['catalog_name']." </td>
                                    <td>".$set['stt']." </td>
                                    <td>".$xoa." </td>

                                </tr>";
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- End Top Selling -->
        </div>

    </section>
</main><!-- End #main -->