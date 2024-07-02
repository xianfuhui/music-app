<a name="_toc121076370"></a>**CHƯƠNG 1: PHÁT BIỂU BÀI TOÁN**

![](README_image\Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.001.jpeg)

<a name="_toc121076381"></a>Figure 1 Usecase diagram

Mô hình hoạt động:

- Khi các Table và dữ liệu được nhập trên Database. Một trang web cung cấp các service từ PHP để lấy dữ liệu từ Database rồi hiển thị lên dạng API. Ứng dụng nghe nhạc sử dụng Retrofit giúp dễ dàng kết nối đến một dịch vụ REST trên web bằng cách chuyển đổi API thành Java Interface. Sau khi đã có được dữ liệu Java Interface ta dễ dàng hiển thị chúng trên View tương tác với người dùng.

Cấu tạo ứng dụng:

- Database: https://databases-auth.000webhost.com/
- Host chứa PHP lấy API: http://huy329.000webhostapp.com/Server
- Ứng dụng Android: MusicS-H

Chức năng:

Màn hình “menu đăng nhập” : Tài khoản có sẵn: user & password: phuhuy (hoặc thanhson)

- Khi người dùng muốn sử dụng ứng dụng cần phải có tài khoản.
- Đăng nhập: Người dùng cần phải đăng ký tạo tài khoản mới hoặc sử dụng Facebook để đăng nhập qua API được hỗ trợ. Khi người dùng đăng nhập,tài khoản và mật khẩu sẽ được hệ thống xác thực.
- Đăng ký: Người dùng có thể đăng ký  bằng cách tự tạo tên người dùng, mật khẩu, điền và xác thực email của mình.
- Quên mật khẩu: Dùng để lấy lại tài khoản do quên mật khẩu. Mã xác thực sẽ được gửi qua mail và cho phép người dùng lấy lại tài khoản khi nhập đúng tên tài khoản và mã xác thực.

  Sau khi đăng nhập thành công, người dùng sẽ được sử dụng ứng dụng gồm 4 màn hình :

- Màn hình chính (có hình ngôi nhà) : Ở đây người dùng có thể nghe nhạc theo “Danh sách phát”, “Danh sách nghệ sĩ”, “ Thịnh hành”, “Phổ biến”, “Chủ đề” và “Bảng xếp hạng”. Chọn và hàn hình sẽ hiển thị các nội dung phù hợp với yêu cầu của người dùng, và nhạc sẽ được phát. Khi nhạc được phát người dùng vẫn có thể thoát hoặc tắt màn hình mà không sợ nhạc sẽ dừng.
- Màn hình tìm kiếm: ở đây người dùng có thể tự tìm kiếm theo từ khóa (có thể là tên bài hát hoặc ca sĩ) hoặc sử dụng các gợi ý tìm kiếm có sẵn dưới thanh tìm kiếm.Các bài hát sẽ được lọc từ database do admin đăng lên và hiển thị lần lượt dưới thanh thông báo.
- Màn hình thư viện : Chứa các danh sách phát tự tạo của người dùng, danh sách phát theo nghệ sĩ và các bài hát được người dùng yêu thích.Ở đây cũng là nơi người dùng tự tạo danh sách phát và đặt tên theo yêu thích của mình.
- Màn hình “đăng xuất”: Cho phép người dùng đăng xuất.Trở về màn hình “menu đăng nhập”



<a name="_toc121076372"></a>**CHƯƠNG 2: THIẾT KẾ GIAO DIỆN**

Màn hình đang chờ

- Layout: customdialog.xml
- Công dụng: màn hình này hiển thị lên khi có một hành động đang chờ.

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.002.png)

<a name="_toc121076382"></a>Figure 2 Màn hình chờ

Màn hình khởi động

- Layout: activity\_main.xml
- Công dụng: màn hình khởi động khi bật app.

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.003.jpeg)

<a name="_toc121076383"></a>Figure 3 Màn hình khởi động



Màn hình menu đăng nhập

- Layout: activity\_first.xml
- Công dụng: màn hình này hiển thị các chức năng như đăng nhập bằng Facebook, đăng ký, đăng nhập.

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.004.jpeg)

<a name="_toc121076384"></a>Figure 4 Màn hình menu đăng nhập



Màn hình đăng nhập

- Layout: activity\_dang\_nhap.xml
- Công dụng: màn hình này hiển thị giao diện đăng nhập

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.005.jpeg)

<a name="_toc121076385"></a>Figure 5 Màn hình đăng nhập

Màn hình đăng ký

- Layout: dialog\_dang\_ky\_free.xml
- Công dụng: màn hình này hiển thị giao diện đăng ký cho người dùng

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.006.jpeg)

<a name="_toc121076386"></a>Figure 6 Màn hình đăng ký

Màn hình quên mật khẩu

- Layout: dialog\_forget\_pasword.xml, fragment\_dialog\_quen\_mk.xml
- Công dụng: màn hình này hiển thị giao diện quên mật khẩu của người dùng.

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.007.jpeg)

<a name="_toc121076387"></a>Figure 7 Màn hình quên mật khẩu


Màn hình đổi mật khẩu

- Layout: fragment\_doi\_matkhau.xml
- Công dụng: sau khi xác thực quên mật khẩu thành công người dùng có thể đổi mật khẩu tại màn hình này.

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.008.jpeg)

<a name="_toc121076388"></a>Figure 8 Màn hình đổi mật khẩu


Màn hình trang chủ

- Layout: fragment\_trang\_chu.xml, fragment\_playlist.xml, activity\_home.xml
- Bao gồm các mục:
  - Màn hình bảng xếp hạng:  fragment\_bangxephang.xml
  - Màn hình chủ đề: fragment\_chude.xml
  - Màn hình nghệ sĩ: fragment\_nghesi.xml
  - Màn hình phổ biến: fragment\_phobien.xml
  - Màn hình thịnh hành: fragment\_thinhanh.xml
  - Mỗi mục chứa layout: activity\_danhsachbaihat.xml
- Công dụng: màn hình này hiển thị các danh mục bài hát, mỗi danh mục bao gồm tất cả các bài hát trong đó. 

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.009.jpeg)

<a name="_toc121076389"></a>Figure 9 Màn hình trang chủ


Màn hình danh sách bài hát

- Layout: activity\_danhsachbaihat.xml
- Công dụng: màn hình này hiển thị danh sách bài hát của mỗi chuyên mục.

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.010.jpeg)

<a name="_toc121076390"></a>Figure 10 Màn hình danh sách bài hát

Màn hình tìm kiếm

- Layout: fragment\_tim\_kiem.xml
- Công dụng: màn hình này hiển thị giao diện chức năng tìm kiếm bài hát.

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.011.jpeg)

<a name="_toc121076391"></a>Figure 11 Màn hình tìm kiếm

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.012.jpeg)

<a name="_toc121076392"></a>Figure 12 Màn hình tìm kiếm

Màn hình thư viện

- Layout: fragment\_thu\_vien.xml
- Bao gồm các mục:
  - Thư viện nghệ sĩ: fragment\_thu\_vien\_nghe\_si.xml
  - Thư viện playlist của người dùng: fragment\_thuvien\_playlist.xml
  - Thư viện yêu thích của người dùng: fragment\_thuvien\_yeuthich.xml
- Công dụng: màn hình này hiển thị danh sách thư viện playlist, thư viện các bài hát yêu thích và nghệ sĩ dành cho người dùng.

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.013.jpeg)

<a name="_toc121076393"></a>Figure 13 Màn hình thư viện

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.014.jpeg)

<a name="_toc121076394"></a>Figure 14 Màn hình thư viện

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.015.jpeg)

<a name="_toc121076395"></a>Figure 15 Màn hình thư viện


Màn hình profile

- Layout: fragment\_profile.xml
- Công dụng: màn hình này hiển thị profile của người dùng và có chức năng đăng xuất tài khoản người dùng.

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.016.jpeg)

<a name="_toc121076396"></a>Figure 16 Màn hình profile

Màn hình tạo playlist

- Layout: activity\_insert\_nhac\_thu\_vien.xml, fragment\_insert\_nhac\_thu\_vien.xml, dialog\_insert\_thuvien\_playlist.xml
- Công dụng: màn hình này hiển thị chức năng tạo playlist, tìm kiếm và thêm nhạc vào playlist riêng của người dùng.

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.017.jpeg)

<a name="_toc121076397"></a>Figure 17 Màn hình profile

Màn hình play nhạc

- Layout: activity\_play\_nhac.xml, fragment\_dianhac.xml
- Công dụng: màn hình này hiển thị các nút xử lý bài hát và phát nhạc.

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.018.jpeg)

<a name="_toc121076398"></a>Figure 18 Màn hình play nhạc

Màn hình profile ẩn hiện

Layout: dialog\_update\_profile.xml

Công dụng: khi nhấn vào avatar, màn hình này cho hiện lên bao gồm username cho người dùng biết rằng họ đang xử dụng tài khoản nào.

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.019.jpeg)

<a name="_toc121076399"></a>Figure 19 Màn hình profile ẩn hiện

Màn hình nhạc trên thanh thông báo

Layout: layout\_notification.xml

Công dụng: khi khởi chạy một bài hát màn hình này hiển thị lên cho người dùng xử lý bài hát trên thanh thông báo.

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.020.jpeg)

<a name="_toc121076400"></a>Figure 20 Màn hình nhạc trên thanh thông báo





<a name="_toc121076373"></a>**CHƯƠNG 3: THIẾT KẾ DỮ LIỆU**

<a name="_toc121076374"></a>**3.1 Lược đồ cơ sở dữ liệu**

![](README_image/Aspose.Words.ef006f11-09ff-480c-b623-de9c956acc72.021.png)

<a name="_toc121076401"></a>Figure 21 Lược đồ cơ sở dữ liệu

Mô tả:

- Bảng “thinhhanh”: Bao gồm thông tin về các bài hát thịnh hành, bao gồm IdThinhHanh(khóa chính) , TenThinhHanh, HinhThinhHanh.
- Bảng “chude” : Bao gồm thông tin về các bài hát theo chủ đề, bao gồm IdChuDe(khóa chính), TenChuDe, HinhChuDe.
- Bảng “bangxephang” : Bao gồm thông tin về các bài hát theo bảng xếp hạng, bao gồm IdBangXepHang(khóa chính), TenBangXepHang, HinhBangXepHang.
- Bảng “dexuat” : Bao gồm thông tin về các bài hát được đề xuất, bao gồm IdDeXuat(khóa chính), TenDeXuat, HinhDeXuat.
- Bảng “nghesi”: Bao gồm thông tin của nghệ sĩ, bao gồm IdNgheSi(khóa chính), TenNgheSi, HinhNgheSi.
- Bảng “playlist”: Bao gồm thông tin của danh sách phát, bao gồm IdPlayList(khóa chính), TenPlayList, HinhNen.
- Bảng “phobien”: Bao gồm thông tin của danh sách bài hát phổ biến, bao gồm IdPhoBien(khóa chính), TenPhoBien, HinhPhoBien.
- Bảng “nguodung”: Bao gồm thông tin của người dùng, bao gồm UserName (khóa chính), Password, Name, Email và Image.
- Bảng “thuvienplaylist”: Bao gồm thông tin của các play list của người dùng tạo,bao gồm IDThuVienPlayList(khóa chính), TenThuVienPlayList, HinhThuVienPlayList, UserName(khóa phụ).
- Bảng “baihatthuvienplaylist”: Bao gồm các bài hát của các thư viện play list, gồm IdBaiHatThuVienPlayList(khóa chính), IdThuVienPlayList(khóa phụ), IdBaiHat, TenBaiHat, TenCaSi, HinhBaiHat, LinkBaiHat.
- Bảng “baihat”: Bao gồm thông tin các bài hát, gồm IdBaiHat (khóa chính),  TenBaiHat, TenCaSi, HinhBaiHat, LinkBaiHat, IdBangXepHang(khóa phụ), IdChuDe(khóa phụ), IdDeXuat(khóa phụ), IdNgheSi(khóa phụ), IdPhoBien(khóa phụ), IdPlayList(khóa phụ), LuotThich, IdThinhHanh(khóa phụ).
- Bảng “nguoidungyeuthich”: Bao gồm thông tin của bài hát được yêu thích,bao gồm IdYeuThich(khóa chính), UserName(khóa phụ),, IdBaiHat(khóa phụ),, TenBaiHat, TenCaSi,HinhBaiHat, LinkBaiHat.



<a name="_toc121076376"></a>**CHƯƠNG 4: THIẾT KẾ XỬ LÝ**

<a name="_toc121076377"></a>**4.1 Danh mục Folder**

- Activity: folder này trữ các file Activity đại diện cho một chức năng của app, là một giao diện màn hình, nơi user tương tác trực tiếp với app.

- Adapter: folder này trữ các file đóng vai trò như là một liên kết giữa một tập hợp dữ liệu và một Adapter View, một đối tượng của một lớp thừa kế lớp trừu tượng AdapterView.

- Fragment: folder này trữ các file trong thư mục này là một phần của Activity đóng góp UI và hoạt động của nó vào thành phần chính.

- Model: folder này chứa các file phụ trách xử lý tầng dữ liệu có thể là các thực thể (Entities), API Services, SQLite.

- Service\_API: folder này trữ các file lấy dữ liệu JSON từ PHP cung cấp REST API và Database.



- Service\_Local: folder này trữ các file xử lý các dịch vụ lân cận trong ứng dụng như phát nhạc, điều khiển và hiển thị nhạc trên thanh thông báo.






<a name="_toc121076378"></a>**4.2 Danh sách các thư viện sử dụng:**

|STT|Tên thư viện|Version|Licence|Màn hình sử dụng|
| :- | :- | :- | :- | :- |
|1|facebook-login|latest|Apache License 2.0|Màn hình menu đăng nhập|
|2|retrofit2|2\.3.0|Apache License 2.0|Tất cả các màn hình|
|3|converter-gson|2\.3.0|Apache License 2.0|Tất cả các màn hình|
|4|picasso|2\.71828|Apache License 2.0|Màn hình danh sách bài hát<br>Màn hình play nhạc<br>Màn hình trang chủ<br>Màn hình xử lý nhạc trên thanh thông báo|
|5|android-mail|1\.6.0|Apache License 2.0|Màn hình đăng ký<br>Màn hình quên mật khẩu|
|6|android-activation|1\.6.0|Apache License 2.0|Màn hình đăng ký<br>Màn hình quên mật khẩu|
|7|media|1\.4.3|Apache License 2.0|Màn hình xử lý nhạc trên thanh thông báo|
|8|okhttp3|latest|Apache License 2.0|Tất cả các màn hình|

<a name="_toc121076402"></a>Table 1 Thông tin của thư viện




<a name="_toc121076379"></a>**ĐƯỜNG LINK ĐẾN VIDEO DEMO**

https://www.youtube.com/watch?v=63Jyy0POGnc&t=18s




















