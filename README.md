CHƯƠNG 1: PHÁT BIỂU BÀI TOÁN

1.  Usecase diagram:

<img src="media/image1.jpg" style="width:5.85417in;height:2.51042in" />

> Figure 1 Usecase diagram

Mô hình hoạt động:

Khi các Table và dữ liệu được nhập trên Database. Một trang web cung cấp
các service từ PHP để lấy dữ liệu từ Database rồi hiển thị lên dạng API.
Ứng dụng nghe nhạc sử dụng Retrofit giúp dễ dàng kết nối đến một dịch vụ
REST trên web bằng cách chuyển đổi API thành Java Interface. Sau khi đã
có được dữ liệu Java Interface ta dễ dàng hiển thị chúng trên View tương
tác với người dùng.

Cấu tạo ứng dụng:

Database: https://databases-auth.000webhost.com/

Host chứa PHP lấy API: http://huy329.000webhostapp.com/Server

Ứng dụng Android: MusicS-H

Chức năng:

> Màn hình “menu đăng nhập” : Tài khoản có sẵn: user & password: phuhuy
> (hoặc thanhson)

- Khi người dùng muốn sử dụng ứng dụng cần phải có tài khoản.

- Đăng nhập: Người dùng cần phải đăng ký tạo tài khoản mới hoặc sử dụng
  Facebook để đăng nhập qua API được hỗ trợ. Khi người dùng đăng
  nhập,tài khoản và mật khẩu sẽ được hệ thống xác thực.

- Đăng ký: Người dùng có thể đăng ký bằng cách tự tạo tên người dùng,
  mật khẩu, điền và xác thực email của mình.

- Quên mật khẩu: Dùng để lấy lại tài khoản do quên mật khẩu. Mã xác thực
  sẽ được gửi qua mail và cho phép người dùng lấy lại tài khoản khi nhập
  đúng tên tài khoản và mã xác thực.

> Sau khi đăng nhập thành công, người dùng sẽ được sử dụng ứng dụng gồm
> 4 màn hình :

- Màn hình chính (có hình ngôi nhà) : Ở đây người dùng có thể nghe nhạc
  theo “Danh sách phát”, “Danh sách nghệ sĩ”, “ Thịnh hành”, “Phổ biến”,
  “Chủ đề” và “Bảng xếp hạng”. Chọn và hàn hình sẽ hiển thị các nội dung
  phù hợp với yêu cầu của người dùng, và nhạc sẽ được phát. Khi nhạc
  được phát người dùng vẫn có thể thoát hoặc tắt màn hình mà không sợ
  nhạc sẽ dừng.

- Màn hình tìm kiếm: ở đây người dùng có thể tự tìm kiếm theo từ khóa
  (có thể là tên bài hát hoặc ca sĩ) hoặc sử dụng các gợi ý tìm kiếm có
  sẵn dưới thanh tìm kiếm.Các bài hát sẽ được lọc từ database do admin
  đăng lên và hiển thị lần lượt dưới thanh thông báo.

- Màn hình thư viện : Chứa các danh sách phát tự tạo của người dùng,
  danh sách phát theo nghệ sĩ và các bài hát được người dùng yêu thích.Ở
  đây cũng là nơi người dùng tự tạo danh sách phát và đặt tên theo yêu
  thích của mình.

- Màn hình “đăng xuất”: Cho phép người dùng đăng xuất.Trở về màn hình
  “menu đăng nhập”

CHƯƠNG 2: THIẾT KẾ GIAO DIỆN

Màn hình đang chờ

Layout: customdialog.xml

Công dụng: màn hình này hiển thị lên khi có một hành động đang chờ.

<img src="media/image2.emf" style="width:1.99288in;height:3.56818in" />

Figure 2 Màn hình chờ

Màn hình khởi động

Layout: activity_main.xml

Công dụng: màn hình khởi động khi bật app.

<img src="media/image3.jpg" style="width:1.89573in;height:4in" />

> Figure 3 Màn hình khởi động

Màn hình menu đăng nhập

Layout: activity_first.xml

Công dụng: màn hình này hiển thị các chức năng như đăng nhập bằng
Facebook, đăng ký, đăng nhập.

<img src="media/image4.jpg" style="width:1.89573in;height:4in" />

> Figure 4 Màn hình menu đăng nhập

Màn hình đăng nhập

Layout: activity_dang_nhap.xml

Công dụng: màn hình này hiển thị giao diện đăng nhập

<img src="media/image5.jpg" style="width:1.89573in;height:4in" />

Figure 5 Màn hình đăng nhập

Màn hình đăng ký

Layout: dialog_dang_ky_free.xml

Công dụng: màn hình này hiển thị giao diện đăng ký cho người dùng

<img src="media/image6.jpg" style="width:1.89573in;height:4in" />

Figure 6 Màn hình đăng ký

Màn hình quên mật khẩu

Layout: dialog_forget_pasword.xml, fragment_dialog_quen_mk.xml

Công dụng: màn hình này hiển thị giao diện quên mật khẩu của người dùng.

<img src="media/image7.jpg" style="width:1.89573in;height:4in" />

Figure 7 Màn hình quên mật khẩu

Màn hình đổi mật khẩu

Layout: fragment_doi_matkhau.xml

Công dụng: sau khi xác thực quên mật khẩu thành công người dùng có thể
đổi mật khẩu tại màn hình này.

<img src="media/image8.jpg" style="width:1.89573in;height:4in" />

Figure 8 Màn hình đổi mật khẩu

Màn hình trang chủ

Layout: fragment_trang_chu.xml, fragment_playlist.xml, activity_home.xml

Bao gồm các mục:

Màn hình bảng xếp hạng: fragment_bangxephang.xml

> Màn hình chủ đề: fragment_chude.xml
>
> Màn hình nghệ sĩ: fragment_nghesi.xml
>
> Màn hình phổ biến: fragment_phobien.xml
>
> Màn hình thịnh hành: fragment_thinhanh.xml

Mỗi mục chứa layout: activity_danhsachbaihat.xml

Công dụng: màn hình này hiển thị các danh mục bài hát, mỗi danh mục bao
gồm tất cả các bài hát trong đó.

<img src="media/image9.jpg" style="width:1.797in;height:3.79167in" />

Figure 9 Màn hình trang chủ

Màn hình danh sách bài hát

Layout: activity_danhsachbaihat.xml

Công dụng: màn hình này hiển thị danh sách bài hát của mỗi chuyên mục.

<img src="media/image10.jpeg" style="width:1.81274in;height:3.825in" />

Figure 10 Màn hình danh sách bài hát

Màn hình tìm kiếm

Layout: fragment_tim_kiem.xml

Công dụng: màn hình này hiển thị giao diện chức năng tìm kiếm bài hát.

> <img src="media/image11.jpg" style="width:1.7733in;height:3.74167in" />

Figure 11 Màn hình tìm kiếm

> <img src="media/image12.jpg" style="width:1.87204in;height:3.95in" />

Figure 12 Màn hình tìm kiếm

Màn hình thư viện

Layout: fragment_thu_vien.xml

Bao gồm các mục:

> Thư viện nghệ sĩ: fragment_thu_vien_nghe_si.xml
>
> Thư viện playlist của người dùng: fragment_thuvien_playlist.xml
>
> Thư viện yêu thích của người dùng: fragment_thuvien_yeuthich.xml

Công dụng: màn hình này hiển thị danh sách thư viện playlist, thư viện
các bài hát yêu thích và nghệ sĩ dành cho người dùng.

<img src="media/image13.jpg" style="width:1.7891in;height:3.775in" />

Figure 13 Màn hình thư viện

<img src="media/image14.jpg" style="width:1.74566in;height:3.68333in" />

Figure 14 Màn hình thư viện

<img src="media/image15.jpg" style="width:1.64297in;height:3.46667in" />

Figure 15 Màn hình thư viện

Màn hình profile

Layout: fragment_profile.xml

Công dụng: màn hình này hiển thị profile của người dùng và có chức năng
đăng xuất tài khoản người dùng.

<img src="media/image16.jpg" style="width:1.83254in;height:3.86667in" />

Figure 16 Màn hình profile

Màn hình tạo playlist

Layout: activity_insert_nhac_thu_vien.xml,
fragment_insert_nhac_thu_vien.xml, dialog_insert_thuvien_playlist.xml

Công dụng: màn hình này hiển thị chức năng tạo playlist, tìm kiếm và
thêm nhạc vào playlist riêng của người dùng.

<img src="media/image17.jpg" style="width:1.89573in;height:4in" />

Figure 17 Màn hình profile

Màn hình play nhạc

Layout: activity_play_nhac.xml, fragment_dianhac.xml

Công dụng: màn hình này hiển thị các nút xử lý bài hát và phát nhạc.

<img src="media/image18.jpg" style="width:1.89573in;height:4in" />

Figure 18 Màn hình play nhạc

Màn hình profile ẩn hiện

Layout: dialog_update_profile.xml

Công dụng: khi nhấn vào avatar, màn hình này cho hiện lên bao gồm
username cho người dùng biết rằng họ đang xử dụng tài khoản nào.

<img src="media/image19.jpeg" style="width:1.89568in;height:4in" />

Figure 19 Màn hình profile ẩn hiện

Màn hình nhạc trên thanh thông báo

Layout: layout_notification.xml

Công dụng: khi khởi chạy một bài hát màn hình này hiển thị lên cho người
dùng xử lý bài hát trên thanh thông báo.

<img src="media/image20.jpg" style="width:1.89573in;height:4in" />

Figure 20 Màn hình nhạc trên thanh thông báo

CHƯƠNG 3: THIẾT KẾ DỮ LIỆU

3.1 Lược đồ cơ sở dữ liệu

<img src="media/image21.png" style="width:6.33403in;height:4.26736in" />

> Figure 21 Lược đồ cơ sở dữ liệu

Mô tả:

Bảng “thinhhanh”: Bao gồm thông tin về các bài hát thịnh hành, bao gồm
IdThinhHanh(khóa chính) , TenThinhHanh, HinhThinhHanh.

Bảng “chude” : Bao gồm thông tin về các bài hát theo chủ đề, bao gồm
IdChuDe(khóa chính), TenChuDe, HinhChuDe.

Bảng “bangxephang” : Bao gồm thông tin về các bài hát theo bảng xếp
hạng, bao gồm IdBangXepHang(khóa chính), TenBangXepHang,
HinhBangXepHang.

Bảng “dexuat” : Bao gồm thông tin về các bài hát được đề xuất, bao gồm
IdDeXuat(khóa chính), TenDeXuat, HinhDeXuat.

Bảng “nghesi”: Bao gồm thông tin của nghệ sĩ, bao gồm IdNgheSi(khóa
chính), TenNgheSi, HinhNgheSi.

Bảng “playlist”: Bao gồm thông tin của danh sách phát, bao gồm
IdPlayList(khóa chính), TenPlayList, HinhNen.

Bảng “phobien”: Bao gồm thông tin của danh sách bài hát phổ biến, bao
gồm IdPhoBien(khóa chính), TenPhoBien, HinhPhoBien.

Bảng “nguodung”: Bao gồm thông tin của người dùng, bao gồm UserName
(khóa chính), Password, Name, Email và Image.

Bảng “thuvienplaylist”: Bao gồm thông tin của các play list của người
dùng tạo,bao gồm IDThuVienPlayList(khóa chính), TenThuVienPlayList,
HinhThuVienPlayList, UserName(khóa phụ).

Bảng “baihatthuvienplaylist”: Bao gồm các bài hát của các thư viện play
list, gồm IdBaiHatThuVienPlayList(khóa chính), IdThuVienPlayList(khóa
phụ), IdBaiHat, TenBaiHat, TenCaSi, HinhBaiHat, LinkBaiHat.

Bảng “baihat”: Bao gồm thông tin các bài hát, gồm IdBaiHat (khóa chính),
TenBaiHat, TenCaSi, HinhBaiHat, LinkBaiHat, IdBangXepHang(khóa phụ),
IdChuDe(khóa phụ), IdDeXuat(khóa phụ), IdNgheSi(khóa phụ),
IdPhoBien(khóa phụ), IdPlayList(khóa phụ), LuotThich, IdThinhHanh(khóa
phụ).

Bảng “nguoidungyeuthich”: Bao gồm thông tin của bài hát được yêu
thích,bao gồm IdYeuThich(khóa chính), UserName(khóa phụ),, IdBaiHat(khóa
phụ),, TenBaiHat, TenCaSi,HinhBaiHat, LinkBaiHat.

3.2 Các dạng dữ liệu khác

Khi các Table và dữ liệu được nhập trên Database. Một trang web cung cấp
các service từ PHP để lấy dữ liệu từ Database rồi hiển thị lên dạng
JSON. Ứng dụng nghe nhạc sử dụng Retrofit giúp dễ dàng kết nối đến một
dịch vụ REST trên web bằng cách chuyển đổi API thành Java Interface:

nguoidungyeuthich

\[

{

"IdYeuThich":"name024",

"UserName":"hotenabc",

"IdBaiHat":""idbaihat,

"TenBaiHat":"tenbaihat",

"TenCaSi":"tencasi",

"HinhBaiHat":"anh",

"LinkBaiHat":"linkbaihat"

}

\]

nguodung

\[

{

"UserName":"hotenabc",

"Password":"123456",

"Name":"ten",

"Email":"username123@gmail.com",

"Image":"anh"

}

\]

thuvienplaylist

\[

{

"IDThuVienPlayList":"idthuvienplaylist",

"TenThuVienPlayList":"tenthuvienplaylist",

"HinhThuVienPlayList":"hinhthuvienplaylist",

"UserName":"username"

}

\]

baihatthuvienplaylist

\[

{

"IdBaiHatThuVienPlayList":"idnhacplaylist",

"IdThuVienPlayList":"idlibplaylist",

"IdBaiHat":"idbaihat",

"TenBaiHat":"tenbaihat",

"TenCaSi":"tencasi",

"HinhBaiHat":"hinhbaihat",

"LinkBaiHat":"linkbaihat"

}

\]

baihat

\[

{

"IdBaiHat":"id" ,

"TenBaiHat:"tenbaihat",

"TenCaSi:"tencasi",

"HinhBaiHat:"hinhbaihat",

"LinkBaiHat:"linkbaihat",

"IdBangXepHang:"idbangxephang",

"IdChuDe:"idchude",

"IdDeXuat:"iddexuat",

"IdNgheSi"idnghesi",

"IdPhoBien:"idphobien",

"IdPlayList:"idplaylist",

"LuotThich:"luotthich",

"IdThinhHanh:"idthinhhanh"

}

\]

bangxephang

\[

{

"IdBangXepHang": "2",

"TenBangXepHang": "Top 50 USA",

"HinhBangXepHang":
"https://huy329.000webhostapp.com/HinhAnh/BangXepHang/Top%2050%20USA.jpg"

}

\]

chude

\[

{

"IdChuDe": "6",

"TenChuDe": "Discover Weekly",

"HinhChuDe":
"https://huy329.000webhostapp.com/HinhAnh/ChuDe/Discover%20Weekly.jpg"

}

\]

nghesi

\[

{

"IdNgheSi": "6",

"TenNgheSi": "Noo Phước Thịnh",

"HinhNgheSi":
"https://huy329.000webhostapp.com/HinhAnh/NgheSi/Noo%20Ph%C6%B0%E1%BB%9Bc%20Th%E1%BB%8Bnh.jpg"

}

\]

phobien

\[

{

"IdPhoBien": "6",

"TenPhoBien": "Maroon 5",

"HinhPhoBien":
"https://huy329.000webhostapp.com/HinhAnh/PhoBien/Maroon%205.jpg"

},

{

"IdPhoBien": "2",

"TenPhoBien": "BTS",

"HinhPhoBien":
"https://huy329.000webhostapp.com/HinhAnh/PhoBien/BTS.jpg"

}

\]

playlist

\[

{

"IdPlaylist": "9",

"Ten": "Trịnh Thăng Bình Radio",

"HinhPlaylist":
"https://huy329.000webhostapp.com/HinhAnh/Playlist/Tr%E1%BB%8Bnh%20Th%C4%83ng%20B%C3%ACnh%20Radio.jpg"

}

\]

thinhhanh

\[

{

"IdThinhHanh": "2",

"TenThinhHanh": "Fresh Finds",

"HinhThinhHanh":
"https://huy329.000webhostapp.com/HinhAnh/ThinhHanh/Fresh%20Finds.jpg"

}

\]

CHƯƠNG 4: THIẾT KẾ XỬ LÝ

4.1 Danh mục Folder

- Activity: folder này trữ các file Activity đại diện cho một chức năng
  của app, là một giao diện màn hình, nơi user tương tác trực tiếp với
  app.

- Adapter: folder này trữ các file đóng vai trò như là một liên kết giữa
  một tập hợp dữ liệu và một Adapter View, một đối tượng của một lớp
  thừa kế lớp trừu tượng AdapterView.

- Fragment: folder này trữ các file trong thư mục này là một phần của
  Activity đóng góp UI và hoạt động của nó vào thành phần chính.

- Model: folder này chứa các file phụ trách xử lý tầng dữ liệu có thể là
  các thực thể (Entities), API Services, SQLite.

- Service_API: folder này trữ các file lấy dữ liệu JSON từ PHP cung cấp
  REST API và Database.

- Service_Local: folder này trữ các file xử lý các dịch vụ lân cận trong
  ứng dụng như phát nhạc, điều khiển và hiển thị nhạc trên thanh thông
  báo.

4.2 Danh sách các thư viện sử dụng:

<table>
<caption><p>Table 1 Thông tin của thư viện</p></caption>
<colgroup>
<col style="width: 9%" />
<col style="width: 19%" />
<col style="width: 9%" />
<col style="width: 21%" />
<col style="width: 39%" />
</colgroup>
<thead>
<tr class="header">
<th>STT</th>
<th>Tên thư viện</th>
<th>Version</th>
<th>Licence</th>
<th>Màn hình sử dụng</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td>1</td>
<td>facebook-login</td>
<td>latest</td>
<td>Apache License 2.0</td>
<td>Màn hình menu đăng nhập</td>
</tr>
<tr class="even">
<td>2</td>
<td>retrofit2</td>
<td>2.3.0</td>
<td>Apache License 2.0</td>
<td>Tất cả các màn hình</td>
</tr>
<tr class="odd">
<td>3</td>
<td>converter-gson</td>
<td>2.3.0</td>
<td>Apache License 2.0</td>
<td>Tất cả các màn hình</td>
</tr>
<tr class="even">
<td>4</td>
<td>picasso</td>
<td>2.71828</td>
<td>Apache License 2.0</td>
<td>Màn hình danh sách bài hát<br />
Màn hình play nhạc<br />
Màn hình trang chủ<br />
Màn hình xử lý nhạc trên thanh thông báo</td>
</tr>
<tr class="odd">
<td>5</td>
<td>android-mail</td>
<td>1.6.0</td>
<td>Apache License 2.0</td>
<td>Màn hình đăng ký<br />
Màn hình quên mật khẩu</td>
</tr>
<tr class="even">
<td>6</td>
<td>android-activation</td>
<td>1.6.0</td>
<td>Apache License 2.0</td>
<td>Màn hình đăng ký<br />
Màn hình quên mật khẩu</td>
</tr>
<tr class="odd">
<td>7</td>
<td>media</td>
<td>1.4.3</td>
<td>Apache License 2.0</td>
<td>Màn hình xử lý nhạc trên thanh thông báo</td>
</tr>
<tr class="even">
<td>8</td>
<td>okhttp3</td>
<td>latest</td>
<td>Apache License 2.0</td>
<td>Tất cả các màn hình</td>
</tr>
</tbody>
</table>

Table 1 Thông tin của thư viện

ĐƯỜNG LINK ĐẾN VIDEO DEMO

https://www.youtube.com/watch?v=63Jyy0POGnc&t=18s
