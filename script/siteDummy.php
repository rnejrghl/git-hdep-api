<?php
include_once './include.inc.php';

?>


<html>
    <head>
        <title>사이트 더미 데이터 생성</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <div class="app">
            <div class="appTitle"><h2>사이트 더미 데이터 생성</h2></div>
            <div class="contentsArea" style="border-bottom: 1px solid #787878; padding-bottom: 10px;">
                <div class="plantInfo title"><h3>사이트 갯수</h3></div>
                <div class="plantInfo">
                    <input type="text" name="number" class="inputBox" value="" placeholder="생성할 사이트 갯수를 입력하세요">
                </div>
                <div class="plantInfo">
                    <button type="button" id='search' class="btn-search">생성</button>
                </div>
            </div>
            <div class="contentsArea" id="searchResult" style="display: none;">
                <div class="plantInfo subTitle"><h3>결과</h3></div>
                <div class="m10 notice">총 <span id="newCount">0</span>개의 사이트가 생성되었습니다.</div>
            </div>
        </div>
    </body>

    <style>
        .app { margin: 5% }
        /*.appTitle { font-size: 20px; }*/
        .contentsArea { margin: 15px 20px;}
        .contentTitle { color: #1877BA }

        .plantInfo { display: inline-block; width: 300px; }
        .plantInfo.title { margin: 0px 5px; width: 130px; font-weight: bold}
        .plantInfo.subTitle { margin: 0px 5px; width: 200px; font-weight: bold}
        .inputBox { padding: 2px 5px; width: 250px; }
        .btn-search { width: 70px;}

        .m10 {margin-left: 10px;}
        .notice { font-size: 15px; margin-bottom: 10px;}

        #newCount {font-weight: bold; color: red}

        .searchList {margin: 10px 0px; padding: 0px 10px;}
        .searchList li { list-style: none; margin-bottom: 5px; font-size: 12px;}

        .table { border: #898989; text-align: center; border-collapse: collapse; font-size: 12px; margin: 10px;}
        .table th { width : 150px; padding: 5px 7px; background-color: #cdcdcd}
        .table td { width : 150px; padding: 5px 7px;}

        .failText { letter-spacing: -1px; color: red; }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">

        $( document ).ajaxStart(function() {
            //마우스 커서를 로딩 중 커서로 변경
            $('html').css("cursor", "wait");
        });
        //AJAX 통신 종료
        $( document ).ajaxStop(function() {
            //마우스 커서를 원래대로 돌린다
            $('html').css("cursor", "auto");
        });
        $(document).ready(function() {
            $('#search').on('click', function () {
                var number = $('input[name=number]').val();
                if ($.isEmptyObject(number)) {
                    alert('PS ID 를 반드시 입력하세요');
                    return false;
                }

                $('#searchResult').hide();
                $.ajax({
                    url : '/src/site_dummy.php',
                    data : {'number' : number} ,
                    method: 'POST',
                    dataType: 'JSON',
                    success: function(data) {
                        if (data.status) {
                            $('#newCount').html(data.siteCnt);
                            $('#searchResult').show();
                        } else {
                            $('#searchFail').show();
                        }


                    }
                })
            });
        })
    </script>
</html>

