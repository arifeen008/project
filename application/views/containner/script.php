<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$('#myTable').dataTable({
			"ordering": false,
			"searching": false,
			"paging": false,
			"oLanguage": {
				"sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
				"sZeroRecords": "ไม่เจอข้อมูล",
				"sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
				"sInfoEmpty": "",
				"sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ รายการ)",
				"sSearch": "ค้นหา :",
				"oPaginate": {
					"sFirst": "หน้าแรก",
					"sPrevious": "ก่อนหน้า",
					"sNext": "ถัดไป",
					"sLast": "หน้าสุดท้าย"
				}
			}
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.navbar-light .dmenu').hover(function() {
			$(this).find('.sm-menu').first().stop(true, true).slideDown(150);
		}, function() {
			$(this).find('.sm-menu').first().stop(true, true).slideUp(105)
		});
	});
</script>
