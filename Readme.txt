Trang web Topzone thực hiên bởi: Nguyễn Phương Nam - 519H0197

Môn: Lập trình web và ứng dụng (N1T02_HK3_2122_503073)
Giảng viên: Mai Văn Mạnh

---------------------------------------Các bước chạy trang web trên localhost---------------------------------
+ Bước 1: Đặt thư mục 'source' thành thư mục gốc tương đương với 'htdocs' của xampp bằng cách:
		
	* Mở XAMPP control Panel chọn 'Config' của dòng 'Apache'
	* Sau đó hiện lên hộp thoại nhỏ, chọn 'Apache(httpd.conf)'
	* File 'httpd.conf.txt' hiện lên tìm hai dòng:  DocumentRoot "C:/xampp/htdocs"
									<Directory "C:/xampp/htdocs">

	* Đổi thành: DocumentRoot "đường dẫn lưu thư mục source"
			<Directory "đường dẫn lưu thư mục source">
		Ví dụ: Thư mục 'source' được đặt ở ổ 'C' và có đường dẫn là: C:\source
			 Thì đổi thành:
						DocumentRoot "C:/source"
						<Directory "C:/source">
		#Lưu ý dấu '/'
	* Nhấn lưu.

	<> Video tham khảo: https://www.youtube.com/watch?v=VFZLGNiN0Ok

+ Bước 2: start 'Apache' và 'MySQL'
	* Đôi lúc sẽ gặp lỗi khi start 'MySQL' thì làm theo video sau: https://www.youtube.com/watch?v=Ypf0wdoyJq0&list=LL&index=1&t=47s&fbclid=IwAR1eY7WIqswZA8x2kgRKxq3ysmGzmPrS2w_viW5LquNKFMEXTlZ1PMK7nyw

+ Bước 3: Import database từ file 'topzonedb.sql' vào phpmyadmin

+ Bươc 4: Chạy trang web với đường dẫn:http://localhost

-------------------------------------------------Thank You------------------------------------------------------
