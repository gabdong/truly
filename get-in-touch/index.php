<?php  include("../inc/header.php"); ?>
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=jMG1IeZNgwj5NH2PGMw_&submodules=geocoder"></script>


<div class="sub-con">
    <div class="con-title" data-aos="fade-up">
        <h2>get in touch</h2>
    </div>


    <div class="con-04-02">
        <ul class="fix">
            <li data-aos="fade-up" data-aos-duration="1000">
                <div class="wave"></div>
                <h3>office</h3>
                <p>서울시 서초구 언남길 35 윤공순빌딩 4F</p>
                <span><strong>Tel.</strong>02. 574. 1750</span>
                <span><strong>email.</strong>psb2016@ps-b.co.kr</span>
            </li>
            <li data-aos="fade-up" data-aos-duration="1500">
                <div class="wave"></div>
                <h3>café</h3>
                <p>서울시 서초구 언남길 35 윤공순빌딩 1F</p>
            </li>
        </ul>
    </div>

    <div id="map"></div>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=77df66ace309650c4928e00041e5d846"></script>
    <script>
        var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
            mapOption = {
                center: new daum.maps.LatLng(37.472766, 127.041698), // 지도의 중심좌표
                level: 3 // 지도의 확대 레벨
            };

        var map = new daum.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

        // 마커가 표시될 위치입니다 
        var markerPosition = new daum.maps.LatLng(37.472766, 127.041698);

        // 마커를 생성합니다
        var marker = new daum.maps.Marker({
            position: markerPosition
        });

        // 마커가 지도 위에 표시되도록 설정합니다
        marker.setMap(map);

        // 아래 코드는 지도 위의 마커를 제거하는 코드입니다
        // marker.setMap(null);

    </script>

</div>




<?php  include("../inc/footer.php"); ?>
