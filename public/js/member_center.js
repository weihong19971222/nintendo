        //個人資料變更
        $('#personal_change').click(function () {
            var attr = $('#member_name').attr('readonly')
            if (attr && attr !== true) {
                $('#member_name').removeAttr('readonly');
                $('#member_birthday').removeAttr('readonly');
                $('#member_local').removeAttr('readonly');
                $('#member_sex').removeAttr('readonly');
                $('#personal_change').html('<p>儲存</p>');
            }
            else {
                $("#member_name").attr("readonly", true);
                $("#member_birthday").attr("readonly", true);
                $("#member_local").attr("readonly", true);
                $("#member_sex").attr("readonly", true);
                $('#personal_change').html('<p>變更</p>');
            }
        })
        //EMAIL變更
        $('#email_change').click(function () {
            var attr = $('#member_email').attr('readonly')
            if (attr && attr !== true) {
                $('#member_email').removeAttr('readonly');
                $('#email_change').html('<p>儲存</p>');
            }
            else {
                $("#member_email").attr("readonly", true);
                $('#email_change').html('<p>變更</p>');
            }
        })
        //顏色變更
        $('.member_button').click(function () {
            $('.member_button').css('color', 'black');
            $(this).css('color', 'red');
            $('.all_content').css('display', 'none');
            if ($(this).attr('data-type') == 'info') {
                $('#edit_user').css('display', 'block');
            }
            else if ($(this).attr('data-type') == 'safe') {
                $('#safe_user').css('display', 'block');
            }
            else if ($(this).attr('data-type') == 'other') {
                $('#other_user').css('display', 'block');
            }
            else if ($(this).attr('data-type') == 'check') {
                $('#check_user').css('display', 'block');
            }
        })
