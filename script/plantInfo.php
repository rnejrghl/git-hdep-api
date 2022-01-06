<?php
include_once './include.inc.php';


?>


<html>
    <head>
        <title>임시페이지</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <div class="app">
            <div class="appTitle"><h2>임시페이지</h2></div>
            <div class="contentsArea" style="border-bottom: 1px solid #787878; padding-bottom: 10px;">
                <div class="plantInfo title"><h3>PS ID</h3></div>
                <div class="plantInfo">
                    <input type="text" name="psId" class="inputBox" value="" placeholder="ps id를 입력하세요">
                </div>
                <div class="plantInfo">
                    <button type="button" id='search' class="btn-search"> 검색</button>
                </div>
            </div>
            <div id="searchResult" style="display: none;">
                <div class="contentsArea">
                    <div class="contentTitle"> <h3>발전소 정보</h3> </div>
                    <div class="contentBody">
                        <ul class="searchList">
                            <li>
                                <div class="plantInfo title">TIME ZONE</div>
                                <div class="plantInfo" id="timeZone"></div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="contentsArea">
                    <div class="contentTitle"> <h3>디바이스 정보</h3> </div>
                    <div class="contentBody">
                        <table class="table" border="">
                            <thead>
                                <tr>
                                    <th>모델명</th>
                                    <th>PS_KEY</th>
                                    <th>UUID</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="searchFail" style="display: none;">

                <div class="contentsArea">
                    <div class="failText">
                        <h3>검색결과가 없습니다.</h3>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <style>
        .app { margin: 5% }
        /*.appTitle { font-size: 20px; }*/
        .contentsArea { margin: 15px 20px;}
        .contentTitle { color: #1877BA }

        .plantInfo { display: inline-block; width: 200px; }
        .plantInfo.title { margin: 0px 5px; width: 100px; font-weight: bold}
        .inputBox { padding: 2px 5px; width: 180px; }
        .btn-search { width: 70px;}

        .searchList {margin: 10px 0px; padding: 0px 10px;}
        .searchList li { list-style: none}

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
                var psId = $('input[name=psId]').val();
                if ($.isEmptyObject(psId)) {
                    alert('PS ID 를 반드시 입력하세요');
                    return false;
                }

                $('#searchFail, #searchResult').hide();
                $.ajax({
                    url : '/src/sg_info.php',
                    data : {'psId' : psId} ,
                    method: 'POST',
                    dataType: 'JSON',
                    success: function(data) {
                        if (data.status) {
                            if (! $.isEmptyObject(data.timeZone)) {
                                $('#timeZone').html(data.timeZone);

                                var devices = data.device;
                                $('.table > tbody').find('tr').remove();
                                var table = $('.table > tbody');
                                $.each(devices , function(idx) {
                                    var device = devices[idx];

                                    var tr = $('<tr></tr>');
                                    tr.append($('<td></td>').append(device['device_pro_sn']));
                                    tr.append($('<td></td>').append(device['ps_key']));
                                    tr.append($('<td></td>').append(device['uuid']));

                                    table.append(tr);
                                });


                                $('#searchResult').show();
                            } else {
                                $('#searchFail').show();
                            }
                        } else {
                            alert('PS ID 가 존재하지 않습니다.');
                            return false;
                        }


                    }
                })
            });
        })
    </script>
</html>

