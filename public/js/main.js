$(document).ready(function(){
  $('.nav-link.active').click(function() {
    if ($(this).hasClass('effect_drop')) {
      $(this).removeClass('effect_drop');
    } else {
      $(this).addClass('effect_drop');
    }
    $('#product-menu').slideToggle(500);
  });
});


$(document).ready(function() {
  // Xử lý sự kiện khi click vào checkbox trong thead
  $('.checkALL').on('click', function() {
    var isChecked = $(this).prop('checked');
    $('tbody').find('input[type="checkbox"]').each(function() {
      $(this).prop('checked', isChecked);
    });
  });
  
  // Xử lý sự kiện khi click vào nút Xóa
  $('.delete-button').on('click', function() {
    // Lấy tất cả các checkbox được check trong tbody
    var checkedRows = $('tbody').find('input[type="checkbox"]:checked');
    
    // Kiểm tra xem có ít nhất một checkbox được check hay không
    if (checkedRows.length > 0) {
      // Hiển thị xác nhận xóa
      if (confirm("Bạn có chắc muốn xóa?")) {
        // Tạo một mảng lưu trữ id của các row được check
        var ids = [];
        // var id = $('table tbody tr').find('td:nth-child(2)').text();
        // Lặp qua tất cả các row được check và lấy id của chúng
        checkedRows.each(function() {
          var id = $(this).parents('tr').find('td:nth-child(2)').text();
          ids.push(id);
        });

        // Display the selected IDs in an alert box
        // alert("Selected IDsss: " + ids.join(", "));
        // Gửi request xóa dữ liệu đến server
        $.ajax({
          url: 'path/to/delete',
          type: 'POST',
          data: { "_token": '{{ csrf_token() }}' , ids: ids},
          success: function (data) {
           console.log(data);
         },
         error: function(xhr, status, error) {
          alert("Đã có lỗi xảy ra: " + error);
        }
      });

      }
    } else {
      alert("Bạn chưa chọn bản ghi để xóa.");
    }
  });
});
