
수정할 ID를 입력하세요 <br>
<form action="../controller/modifyFix.php" method="POST">
    <input type="text" id = 'findId' name="thisID">
    <input type="button" value="사용자 정보 조회" onclick="Ajax(document.getElementById('findId').value)">

    <ol>
        <li>사용자 ID: <input type="text" id="user_id" name = 'user_id'></li>
        <li>이름: <input type="text" id="username" name = 'username'></li>
        <li>암호: <input type="text" id="userpassword" name = 'userpassword'></li>
        <li>구분: <select id="classification" name="classification">
                <option id ='sense' value="staff" >교직원</option>
                <option id = 'seito' value="student" selected>학생</option>
            </select></li>
        <li>성별: <select id="gender" name = 'gender'>
                <option id = 'man' value="male">남성</option>
                <option id = 'woman' value="female" selected>여성</option>
            </select></li>
        <li>전화번호: <input type="text" id="phone" name = 'phone'></li>
        <li>이메일: <input type="text" id="email" name = 'email'></li>
    </ol>
    <input type="submit" value="수정하기">
</form>

<script>
    function Ajax(id) {
        var url = '../controller/modifyController.php?';
        var xml = new XMLHttpRequest();
        var paramiter = "idValue="+id;
        xml.open("POST",url,true);
        xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xml.onreadystatechange = function () {
            if(xml.readyState == 4 && xml.status == 200){
                var result = xml.responseText;
                var infoArr = result.split(" ");
            if(result.length !=2){
                var userid = infoArr[1];
                var classification = infoArr[2];
                var name = infoArr[3];
                var gender = infoArr[4];
                var password = infoArr[5];
                var phone = infoArr[6];
                var email = infoArr[7];
                document.getElementById('user_id').value = userid;
                document.getElementById('userpassword').value = password;
                document.getElementById('phone').value = phone;
                document.getElementById('email').value = email;
                document.getElementById('username').value = name;
                if(gender == 'male'){
                    document.getElementById('man').setAttribute('selected','selected');
                }else if(gender == 'female'){
                    document.getElementById('woman').setAttribute('selected','selected');
                }
                if(classification == 'student'){
                    document.getElementById('seito').setAttribute('selected','selected');
                }else if (classification == 'staff'){
                    document.getElementById('sense').setAttribute('selected','selected');
                }
            }else{
                alert("ID를 찾을 수 없습니다.");
            }

            }
        };
        xml.send(paramiter);

    }
</script>
