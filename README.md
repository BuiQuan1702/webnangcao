![image](https://github.com/user-attachments/assets/ca95a7bf-e1c7-46c4-8e62-283d6dca241c)

﻿#  Wed bán sách

 **Môn học:** Thiết kế Web nâng cao

 **Tên dự án:** Wed bán sách

 **Nhóm thực hiện:** Nhóm 12 – Lớp [Thiết kế Web nâng cao - TH2]

<div align="center">

| **STT** |  **Họ và Tên**    |  **Email**                                                              |
| :--------: | :------------------ | :------------------------------------------------------------------------ |
|     1      | **Bùi Minh Quân **      | 23010725@st.phenikaa-uni.edu.vn  |
|     2      | **Nguyễn Văn Thành **    | 23010764@st.phenikaa-uni.edu.vn |
|     3      | **Ngô Ngọc Duy ** | 23010397@st.phenikaa-uni.edu.vn  |

</div>


# Tên dự án : Wed bán sách

# Mô tả dự án:
    -Là một trang web bán sách trực tuyến được xây dựng bằng Laravel.
    -Người dùng có thể đăng ký, đăng nhập, xem danh sách sách, tìm kiếm, thêm vào giỏ hàng và   đặt hàng.
    -Quản trị viên (Admin) có thể quản lý sách, danh mục, người dùng và đơn hàng.
    -Hệthống sử dụng các models chính như: User, Book, Cart, Order, Review, Category.
    -Hướng tới thiết kế MVC rõ ràng, dễ mở rộng trong tương lai.
    
# Chức năng chính:
 ✔️ Đăng ký, xác thực email, đăng nhập, đặt lại mặt khẩu<br>
 ✔️ Quản lý danh mục sách (Thêm/Sửa/Xóa) <br>
 ✔️ Tìm kiếm và lọc sách theo tiêu đề, tác giả <br>
 ✔️ Hệ thống giỏ hàng và thanh toán trực tuyến <br>
 ✔️ Quản lý tài khoản người dùng và đơn hàng <br>
 ✔️ Giao diện thân thiện, responsive với Bootstrap<br>
 ✔️ Quản lý khách hàng, hóa đơn<br>

# Ngôn ngữ sử dụng:
 HTML, CSS, JavaScript, PHP, Bootstrap, MySQL,.....
 
# Cấu trúc thư mục:
-Admin: Chứa các tệp PHP liên quan đến phần quản trị trang web.<br>
-Css: Chứa các tệp CSS để định dạng giao diện trang web.<br>
-Images: Chứa các hình ảnh được sử dụng trong trang web.<br>
-Js: Chứa các tệp JavaScript để thêm tính năng tương tác.<br>
-Uploaded_img: Chứa các hình ảnh sản phẩm được tải lên.<br>
-Các tệp PHP<br>

# Cơ sở dữ liệu:

![Screenshot 2025-06-25 150746](https://github.com/user-attachments/assets/369a4323-5f1c-40da-8732-81d71fe58a12) 
 
# Sơ đồ chức năng (Use case diagram):
![deepseek_mermaid_20250625_4990d2](https://github.com/user-attachments/assets/659d0057-974b-4137-9182-bec7d90bb13d)

# Activity Diagram (Ví dụ: Đặt hàng - Place Order):
```mermaid
flowchart TD
    A[User] -->|Chon sach| B[Them vao gio hang]
    B --> C[Chuyen toi Gio hang]
    C --> D[Nhan Dat hang]
    D --> E[Nhap thong tin giao hang]
    E --> F[Xac nhan đon hang]
    F --> G[Luu đon hang vao CSDL]
    G --> H[Hien thi thong bao thanh cong]

```
# Activity Diagram (Ví dụ: Xoá sách - Admin)
```mermaid
flowchart TD
A[Admin] --> B[Click nút 'Xóa' sách]
B --> C[Hiện hộp thoại xác nhận]
C -->|Đồng ý| D[Xóa sách khỏi CSDL]
D --> E[Reload danh sách sách]
C -->|Hủy| F[Không làm gì cả]


```
# Class Diagram 
```mermaid
classDiagram
    class User {
        +user_id: int
        +name: string
        +email: string
        +password: string
        +register()
        +login()
    }

    class Book {
        +book_id: int
        +title: string
        +author: string
        +price: float
        +stock: int
        +description: string
        +category_id: int
    }

    class Cart {
        +cart_id: int
        +user_id: int
        +addItem(book_id: int, quantity: int)
        +removeItem(book_id: int)
    }

    class Order {
        +order_id: int
        +user_id: int
        +total_amount: float
        +status: string
        +createOrder()
    }

    class Category {
        +category_id: int
        +name: string
    }

    class Review {
        +review_id: int
        +user_id: int
        +book_id: int
        +rating: int
        +comment: string
    }

    User "1" --> "*" Order
    User "1" --> "1" Cart
    User "1" --> "*" Review
    Book "1" --> "*" Review
    Book "*" --> "1" Category
    Order "*" --> "*" Book : contains
```

# Sơ đồ thuật toán

![deepseek_mermaid_20250625_694871](https://github.com/user-attachments/assets/89409eb6-dcd6-45f7-b76b-89b5c3566dbb)

# Giao diện chính của web
![Ảnh chụp màn hình 2025-06-26 094204](https://github.com/user-attachments/assets/cd86ef3a-b195-48bc-beeb-c101d2b040f6)

# Giao diện admin 
![Ảnh chụp màn hình 2025-06-26 094620](https://github.com/user-attachments/assets/1257ef51-c129-40ab-b232-d89f9de0d898)

# Giao diện danh mục sách, tìm kiếm, top bán chạy
![image](https://github.com/user-attachments/assets/f6df1dc3-ba1f-4aa4-80f8-9a1e478d397b)

# Giao diện thanh toán
![image](https://github.com/user-attachments/assets/13162ce4-fb27-48cd-afbb-36253ac3c77b)



# Liên kết kho lưu trữ : 
 https://github.com/BuiQuan1702/webnangcao

