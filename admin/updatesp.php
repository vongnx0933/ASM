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
        <form action="?act=updatesp" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$spone['id']?>">
            <input type=" text" name="product_name" value="<?=$spone['product_name']?>">
            <input type="number" name="price" value="<?=$spone['price']?>">
            <input type="file" name="product_image" value="<?=$spone['product_image']?>">
            <input type="number" name="catalog_id" value="<?=$spone['catalog_id']?>">
            <input type="text" name="descript" value="<?=$spone['descript']?>">
            <input type="number" name="amount" value="<?=$spone['amount']?>">
            <input type="submit" value="Cập nhật sản phẩm" name="editsp">
        </form>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card top-selling overflow-auto">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Danh Sách sản phẩm </h5>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá sản phẩm</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">ID loại sản phẩm</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($dssp as $prod):
                                    $img = $linkimg.$prod['product_image'];
                                    $img="<img src='".$img."' width='100px'>";
                                    $xoa ="<a href='admin.php?act=qlsp&del=".$prod['id']."'>Delete</a>";
                                    
                             echo  " <tr>
                                    <td>".$prod['id']."</td>
                                    <td>".$prod['product_name']." </td>
                                    <td>".$prod['price']."</td>
                                    <td>".$img."</td>
                                    <td>".$prod['catalog_id']."</td>
                                    <td>".$prod['descript']."</td>
                                    <td>".$prod['amount']."</td>
                                    <td>".$xoa."</td>
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