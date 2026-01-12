jQuery(document).ready(function($) {
    
    // 1. 자동 목차 생성 (H2 태그 기준)
    function generateTOC() {
        var $content = $('.post-body');
        var $headers = $content.find('h2');
        
        if ($headers.length < 2) return; // 헤더가 적으면 중단

        var tocHtml = '<div id="post-toc"><h3>목차 <span id="toc-status" style="font-size:12px; cursor:pointer;">[숨기기]</span></h3><div id="toc-content"><ul>';
        
        $headers.each(function(index) {
            var id = 'toc-section-' + index;
            $(this).attr('id', id);
            tocHtml += '<li><a href="#' + id + '">' + $(this).text() + '</a></li>';
        });
        
        tocHtml += '</ul></div></div>';
        
        // 첫 번째 H2 앞에 삽입
        $headers.first().before(tocHtml);
        
        // 토글 기능
        $('#post-toc h3').on('click', function() {
            $('#toc-content').slideToggle();
            var status = $('#toc-status').text();
            $('#toc-status').text(status == '[숨기기]' ? '[보이기]' : '[숨기기]');
        });
    }
    
    if($('body').hasClass('single')) {
        generateTOC();
    }

    // 2. 팝업 로직
    setTimeout(function() {
        // 쿠키 확인 로직 추가 가능
        $('#popupOverlay').css('display', 'flex');
    }, 1500);

    window.closePopup = function() {
        $('#popupOverlay').hide();
    };

    // 3. 링크 복사
    window.copyLink = function() {
        var dummy = document.createElement('input'),
        text = location.href;
        document.body.appendChild(dummy);
        dummy.value = text;
        dummy.select();
        document.execCommand('copy');
        document.body.removeChild(dummy);
        alert('링크가 복사되었습니다!');
    };
});
