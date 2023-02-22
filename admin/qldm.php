<main id="main" class="main">


    <div class="pagetitle">
        <h1>Quản lý danh mục</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                <li class="breadcrumb-item active">Quản lý danh mục</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="row">
        <form action="?act=qldm" method="post" enctype="multipart/form-data">
            <input type="text" name="catalog_name" placeholder=" Tên danh mục">
            <input type="text" name="stt" placeholder=" Số thự tự">
            <input type="submit" value="Thêm">
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
                                    $edit="<a href='admin.php?act=updatedm&edit=".$set['id']."'> Edit </a>";
                                    
                             echo  " <tr>
                                    <td>".$set['id']."</td>
                                    <td>".$set['catalog_name']." </td>
                                    <td>".$set['stt']." </td>
                                    <td>".$xoa." - ".$edit."</td>

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