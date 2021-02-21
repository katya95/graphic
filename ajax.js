/* Article FructCode.com */
$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:      "action_ajax_form.php",
        type:     "POST", //����� ��������
        dataType: "html", //������ ������
        data: $("#"+ajax_form).serialize(),  // ����������� ������
        success: function(response) { //������ ���������� �������
        	result = $.parseJSON(response);
        	$('#result_form').html('���: '+result.name+'<br>�������: '+result.phonenumber);
    	},
    	error: function(response) { // ������ �� ����������
            $('#result_form').html('������. ������ �� ����������.');
    	}
 	});
}