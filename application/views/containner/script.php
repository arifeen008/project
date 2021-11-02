<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$('#myTable').dataTable({
			"ordering" : false,
			"oLanguage": {
				"sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
				"sZeroRecords": "ไม่เจอข้อมูล",
				"sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
				"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
				"sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ รายการ)",
				"sSearch": "ค้นหา :",
				"oPaginate" : {
					"sFirst" : "หน้าแรก",
					"sPrevious" : "ก่อนหน้า",
					"sNext" : "ถัดไป",
					"sLast" : "หน้าสุดท้าย"
				}
			}
		});
	});
</script>