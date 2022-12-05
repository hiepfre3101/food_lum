<?php require_once("header.php")?>
<!-- end header -->
<div class="box-table">
    <div class="action">
        <a href=""><button>Chọn Tất Cả</button></a>
        <a href=""><button>Xóa Các Mục Đã Chọn</button></a>
    </div>
    <form action="" class="tabel-form">
        <table class="table-main">
            <thead>
                <tr>
                    <th>Chọn</th>
                    <th>Ảnh</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td><img src="https://picsum.photos/200/300" alt=""></td>
                    <td>Nguyễn Ánh Dương</td>
                    <td>0869935501</td>
                    <td><button>Chi tiết</button></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td><img src="https://picsum.photos/200/300" alt=""></td>
                    <td>Nguyễn Ánh Dương</td>
                    <td>0869935501</td>
                    <td><button>Chi tiết</button></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td><img src="https://picsum.photos/200/300" alt=""></td>
                    <td>Nguyễn Ánh Dương</td>
                    <td>0869935501</td>
                    <td><a href=""><button>Chi tiết</button></a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td><img src="https://picsum.photos/200/300" alt=""></td>
                    <td>Nguyễn Ánh Dương</td>
                    <td>0869935501</td>
                    <td><a href=""><button>Chi tiết</button></a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td><img src="https://picsum.photos/200/300" alt=""></td>
                    <td>Nguyễn Ánh Dương</td>
                    <td>0869935501</td>
                    <td><a href=""><button>Chi tiết</button></a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td><img src="https://picsum.photos/200/300" alt=""></td>
                    <td>Nguyễn Ánh Dương</td>
                    <td>0869935501</td>
                    <td><a href=""><button>Chi tiết</button></a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td><img src="https://picsum.photos/200/300" alt=""></td>
                    <td>Nguyễn Ánh Dương</td>
                    <td>0869935501</td>
                    <td><a href=""><button>Chi tiết</button></a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td><img src="https://picsum.photos/200/300" alt=""></td>
                    <td>Nguyễn Ánh Dương</td>
                    <td>0869935501</td>
                    <td><a href=""><button>Chi tiết</button></a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td><img src="https://picsum.photos/200/300" alt=""></td>
                    <td>Nguyễn Ánh Dương</td>
                    <td>0869935501</td>
                    <td><a href=""><button>Chi tiết</button></a></td>
                </tr>
            </tbody>
        </table>
        <div style="<?php if($countPage == 1)echo "display:none;"?>">
            <div class="pagination">
                <div class="pagination-left">
                    <a href="">
                        <span class="material-symbols-outlined">
                            navigate_before
                        </span>
                    </a>
                </div>
                <div class="box-pagination">
                    <div class="pagination-item"><a href="">1</a></div>
                    <div class="pagination-item active"><a href="">2</a></div>
                    <div class="pagination-item"><a href="">3</a></div>
                </div>
                <div class="pagination-right">
                    <a href="">
                        <span class="material-symbols-outlined">
                            navigate_next
                        </span>
                    </a>
                </div>
            </div>
       </div>
    </form>
</div>
<?php require_once("footer.php")?>