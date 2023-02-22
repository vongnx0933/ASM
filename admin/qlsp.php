<main id="main" class="main">
    <div class="pagetitle">
        <h1>Quản lý sản phẩm</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                <li class="breadcrumb-item active">Quản lý sản phẩm</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="row">
        <form action="?act=qlsp" method="post" enctype="multipart/form-data">
            <input type="text" name="product_name" placeholder=" Tên sản phẩm">
            <input type="number" name="price" placeholder="Giá bán">
            <input type="file" name="product_image">
            <input type="number" name="catalog_id" placeholder="Loại sản phẩm">
            <input type="text" name="descript" placeholder="Mổ tả">
            <input type="number" name="amount" placeholder="Số lượng">
            <input type="submit" value="Thêm" name="themsp">
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
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá bán</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Loại sản phẩm</th>
                                    <th scope="col">Mổ tả</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                foreach($dssp as $set ):
                                    $img=$linkimg.$set['product_image'];
                                    $img="<img src='".$img."' width='100px'>";
                                    $xoa ="<a href='admin.php?act=qlsp&del=".$set['id']."'>Delete</a>";
                                    $edit="<a href='admin.php?act=updatesp&edit=".$set['id']."'> Edit </a>";
                                    
                             echo  " <tr>
                                    <td>".$set['id']."</td>
                                    <td>".$set['product_name']." </td>
                                    <td>".$set['price']." </td>
                                    <td>".$img."</td>
                                    <td>".$set['catalog_id']." </td>
                                    <td>".$set['descript']." </td>
                                    <td>".$set['amount']." </td>
                                    
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