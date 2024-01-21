<?php

$exp = "/bieuthucchinhquy/i";

/* <</>> Dấu phân cách của biểu thức chính quy hoặc bất kể kí tự nào không phải là chữ,số,dấu cách,dấu \ hoặc sử dụng <<#>>,<<~>>

Các bổ ngữ được áp dụng trong biểu thức chính quy
i:Thực hiện tìm kiếm không phân biệt chữ in hoa hay chữ thường.

m: Thực hiện tìm kiếm nhiều dòng (các mẫu tìm kiếm phần đầu hoặc phần cuối của một chuỗi sẽ khớp với phần đầu hoặc phần cuối của mỗi dòng)

u:Cho phép đối sánh chính xác các mẫu được mã hóa UTF-8.
*/
$exp1 = "^[a-z-9_-]{3,15}$";
/* 

^: ký tự bắt đầu một chuỗi
[a-z-9_-]: chỗ này thể hiện là cho phép lấy chữ cái, các con số, dầu gạch dưới, dấu gạch ngang.
{3,15}`: giới hạn chuỗi từ 3 đến 15 ký tự
$: ký tự kết thúc chuỗi.

*/